<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <title><?php echo SITE_TITLE; ?></title>

    <link rel="stylesheet" href="css/styles-dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/hero.php'; ?>
    <?php include 'includes/about.php'; ?>
    <?php include 'includes/services.php'; ?>
    <?php include 'includes/skills.php'; ?>
    <?php include 'includes/projects.php'; ?>
    <?php include 'includes/contact.php'; ?>
    <?php include 'includes/footer.php'; ?>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="js/script.js"></script>
</body>
</html>

