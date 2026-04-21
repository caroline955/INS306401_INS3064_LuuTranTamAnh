<?php
// 1. DATABASE CONNECTION (PDO)
$host = 'localhost';
$dbname = 'computer_management';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Bật chế độ báo lỗi ngoại lệ để xử lý lỗi SQL dễ dàng
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$message = '';
$messageType = '';

// 3. CRUD OPERATIONS
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // Lấy và làm sạch dữ liệu đầu vào
    $id = $_POST['id'] ?? null;
    $computer_name = trim($_POST['computer_name'] ?? '');
    $model = trim($_POST['model'] ?? '');
    $operating_system = trim($_POST['operating_system'] ?? '');
    $processor = trim($_POST['processor'] ?? '');
    $memory = !empty($_POST['memory']) ? (int)$_POST['memory'] : null;
    $available = isset($_POST['available']) ? 1 : 0;

    try {
        if ($action === 'create' || $action === 'update') {
            // Xác thực dữ liệu cơ bản
            if (empty($computer_name) || empty($model)) {
                throw new Exception("Computer Name and Model are required.");
            }

            if ($action === 'create') {
                $sql = "INSERT INTO computers (computer_name, model, operating_system, processor, memory, available) 
                        VALUES (:computer_name, :model, :operating_system, :processor, :memory, :available)";
                $stmt = $pdo->prepare($sql);
                $message = "Computer added successfully!";
            } else { // update
                $sql = "UPDATE computers SET computer_name = :computer_name, model = :model, 
                        operating_system = :operating_system, processor = :processor, 
                        memory = :memory, available = :available WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':id', $id, PDO::PARAM_INT);
                $message = "Computer updated successfully!";
            }

            // Gán giá trị và thực thi (Prepared Statements)
            $stmt->bindValue(':computer_name', $computer_name);
            $stmt->bindValue(':model', $model);
            $stmt->bindValue(':operating_system', $operating_system);
            $stmt->bindValue(':processor', $processor);
            $stmt->bindValue(':memory', $memory, PDO::PARAM_INT);
            $stmt->bindValue(':available', $available, PDO::PARAM_INT);
            $stmt->execute();
            $messageType = "success";

        } elseif ($action === 'delete') {
            $sql = "DELETE FROM computers WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $message = "Computer deleted successfully!";
            $messageType = "success";
        }
    } catch (Exception $e) {
        $message = "Error: " . $e->getMessage();
        $messageType = "error";
    }
}

// Xử lý tìm kiếm và lấy danh sách máy tính
$searchQuery = $_GET['search'] ?? '';
$sql = "SELECT * FROM computers WHERE computer_name LIKE :search ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':search', '%' . $searchQuery . '%');
$stmt->execute();
$computers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Lab Management Dashboard</title>
    <style>
        /* CSS thuần, thiết kế responsive và gọn gàng */
        :root { --primary: #007bff; --danger: #dc3545; --success: #28a745; --dark: #343a40; }
        body { font-family: Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; color: #333; }
        .container { max-width: 1200px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h2 { border-bottom: 2px solid var(--primary); padding-bottom: 10px; color: var(--dark); }
        .header-actions { display: flex; justify-content: space-between; margin-bottom: 20px; flex-wrap: wrap; gap: 10px; }
        input[type="text"], input[type="number"] { padding: 10px; border: 1px solid #ccc; border-radius: 4px; width: 100%; box-sizing: border-box; }
        .search-box { display: flex; gap: 10px; }
        .search-box input { width: 250px; }
        button { padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; color: white; transition: 0.3s; }
        .btn-primary { background: var(--primary); }
        .btn-primary:hover { background: #0056b3; }
        .btn-danger { background: var(--danger); }
        .btn-warning { background: #ffc107; color: black; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 4px; }
        .alert.success { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert.error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        
        /* Table Styles */
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: var(--dark); color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .status-badge { padding: 5px 10px; border-radius: 15px; font-size: 0.85em; font-weight: bold; color: white; }
        .bg-success { background: var(--success); }
        .bg-danger { background: var(--danger); }
        .action-btns { display: flex; gap: 5px; }

        /* Modal Styles */
        .modal { display: none; position: fixed; z-index: 1000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); }
        .modal-content { background-color: white; margin: 5% auto; padding: 20px; border-radius: 8px; width: 90%; max-width: 500px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); }
        .close { float: right; font-size: 28px; font-weight: bold; cursor: pointer; }
        .close:hover { color: var(--danger); }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .header-actions { flex-direction: column; }
            .search-box input { width: 100%; }
            table { display: block; overflow-x: auto; white-space: nowrap; }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Computer Lab Management Dashboard</h2>

    <?php if ($message): ?>
        <div class="alert <?= $messageType ?>">
            <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>

    <div class="header-actions">
        <button class="btn-primary" onclick="openModal('computerModal', 'create')">+ Add New Computer</button>
        
        <form method="GET" class="search-box">
            <input type="text" name="search" placeholder="Search by Computer Name..." value="<?= htmlspecialchars($searchQuery) ?>">
            <button type="submit" class="btn-primary">Search</button>
            <?php if ($searchQuery): ?>
                <a href="dashboard.php" style="padding: 10px; text-decoration: none; color: #666;">Clear</a>
            <?php endif; ?>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Model</th>
                <th>OS</th>
                <th>CPU</th>
                <th>RAM (GB)</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($computers) > 0): ?>
                <?php foreach ($computers as $comp): ?>
                    <tr>
                        <td><?= htmlspecialchars($comp['id']) ?></td>
                        <td><?= htmlspecialchars($comp['computer_name']) ?></td>
                        <td><?= htmlspecialchars($comp['model']) ?></td>
                        <td><?= htmlspecialchars($comp['operating_system']) ?></td>
                        <td><?= htmlspecialchars($comp['processor']) ?></td>
                        <td><?= htmlspecialchars($comp['memory']) ?></td>
                        <td>
                            <?php if ($comp['available']): ?>
                                <span class="status-badge bg-success">Available</span>
                            <?php else: ?>
                                <span class="status-badge bg-danger">Under Repair</span>
                            <?php endif; ?>
                        </td>
                        <td class="action-btns">
                            <button class="btn-warning" onclick='openModal("computerModal", "update", <?= json_encode($comp) ?>)'>Edit</button>
                            <form method="POST" onsubmit="return confirm('Are you sure you want to delete this computer?');" style="display:inline;">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= $comp['id'] ?>">
                                <button type="submit" class="btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" style="text-align: center;">No computers found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<div id="computerModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('computerModal')">&times;</span>
        <h3 id="modalTitle">Add New Computer</h3>
        
        <form id="computerForm" method="POST">
            <input type="hidden" name="action" id="formAction" value="create">
            <input type="hidden" name="id" id="compId">
            
            <div class="form-group">
                <label>Computer Name <span style="color:red">*</span></label>
                <input type="text" name="computer_name" id="compName" required placeholder="e.g., Lab1-PC05">
            </div>
            
            <div class="form-group">
                <label>Model <span style="color:red">*</span></label>
                <input type="text" name="model" id="compModel" required placeholder="e.g., Dell Optiplex 7090">
            </div>
            
            <div class="form-group">
                <label>Operating System</label>
                <input type="text" name="operating_system" id="compOS" placeholder="e.g., Windows 10 Pro">
            </div>
            
            <div class="form-group">
                <label>Processor</label>
                <input type="text" name="processor" id="compCPU" placeholder="e.g., Intel Core i5-11400">
            </div>
            
            <div class="form-group">
                <label>Memory (GB)</label>
                <input type="number" name="memory" id="compMemory" min="1" placeholder="e.g., 16">
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" name="available" id="compAvailable" checked> Available
                </label>
            </div>
            
            <button type="submit" class="btn-primary" style="width: 100%;">Save Computer</button>
        </form>
    </div>
</div>

<script>
// Vanilla JS để xử lý hiển thị Modal và đẩy dữ liệu vào Form
function openModal(modalId, actionType, data = null) {
    const modal = document.getElementById(modalId);
    const formTitle = document.getElementById('modalTitle');
    const formAction = document.getElementById('formAction');
    
    // Đặt lại form trước khi mở
    document.getElementById('computerForm').reset();
    
    if (actionType === 'create') {
        formTitle.innerText = "Add New Computer";
        formAction.value = "create";
        document.getElementById('compAvailable').checked = true;
    } else if (actionType === 'update' && data) {
        formTitle.innerText = "Edit Computer Details";
        formAction.value = "update";
        
        // Đổ dữ liệu vào các trường
        document.getElementById('compId').value = data.id;
        document.getElementById('compName').value = data.computer_name;
        document.getElementById('compModel').value = data.model;
        document.getElementById('compOS').value = data.operating_system;
        document.getElementById('compCPU').value = data.processor;
        document.getElementById('compMemory').value = data.memory;
        document.getElementById('compAvailable').checked = (data.available == 1);
    }
    
    modal.style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

// Đóng modal khi click ra bên ngoài
window.onclick = function(event) {
    const modal = document.getElementById('computerModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
