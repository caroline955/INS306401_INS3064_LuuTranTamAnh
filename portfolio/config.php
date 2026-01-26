<?php
// Configuration File
define('SITE_NAME', 'Portfolio');
define('SITE_TITLE', 'Portfolio - Project Manager | Business Analyst | Marketing Specialist');
define('SITE_DESCRIPTION', 'Portfolio chuyên nghiệp - PM, BA, Marketing');

// Personal Information
$personal_info = [
    'name' => '[Tên của bạn]',
    'full_name' => '[Tên đầy đủ của bạn]',
    'title' => 'Project Manager | Business Analyst | Marketing Specialist',
    'email' => 'your.email@example.com',
    'phone' => '+84 xxx xxx xxx',
    'location' => '[Thành phố của bạn]',
    'education' => '[Trường đại học của bạn]',
    'description' => 'Chuyên gia quản lý dự án, phân tích kinh doanh và marketing với kinh nghiệm trong việc phát triển chiến lược, tối ưu quy trình và thúc đẩy tăng trưởng kinh doanh.',
];

// Social Media Links
$social_links = [
    'github' => 'https://github.com/yourusername',
    'linkedin' => 'https://linkedin.com/in/yourusername',
    'facebook' => 'https://facebook.com/yourusername',
    'instagram' => 'https://instagram.com/yourusername',
    'twitter' => 'https://twitter.com/yourusername',
];

// Skills by Category
$skills = [
    'Project Management' => [
        ['name' => 'Agile/Scrum', 'level' => 90],
        ['name' => 'Jira/Confluence', 'level' => 85],
        ['name' => 'MS Project', 'level' => 80],
        ['name' => 'Risk Management', 'level' => 85],
    ],
    'Business Analysis' => [
        ['name' => 'Requirements Analysis', 'level' => 90],
        ['name' => 'Process Modeling', 'level' => 85],
        ['name' => 'Data Analysis', 'level' => 80],
        ['name' => 'SQL', 'level' => 75],
    ],
    'Marketing & Strategy' => [
        ['name' => 'Digital Marketing', 'level' => 85],
        ['name' => 'SEO/SEM', 'level' => 80],
        ['name' => 'Google Analytics', 'level' => 85],
        ['name' => 'Content Strategy', 'level' => 80],
    ],
];

// Projects
$projects = [
    [
        'title' => 'E-commerce Platform Development',
        'description' => 'Quản lý dự án phát triển nền tảng thương mại điện tử với 15 thành viên, tăng 40% doanh thu.',
        'image' => 'assets/images/project1.jpg',
        'demo_link' => '#',
        'github_link' => '#',
        'tags' => ['Project Management', 'Agile', 'E-commerce'],
    ],
    [
        'title' => 'Business Process Optimization',
        'description' => 'Phân tích và tối ưu hóa quy trình kinh doanh, giảm 30% thời gian xử lý và chi phí vận hành.',
        'image' => 'assets/images/project2.jpg',
        'demo_link' => '#',
        'github_link' => '#',
        'tags' => ['Business Analysis', 'Process Improvement', 'BPM'],
    ],
    [
        'title' => 'Digital Marketing Campaign',
        'description' => 'Chiến dịch marketing đa kênh tăng 200% lượng khách hàng tiềm năng và 150% tỷ lệ chuyển đổi.',
        'image' => 'assets/images/project3.jpg',
        'demo_link' => '#',
        'github_link' => '#',
        'tags' => ['Marketing', 'SEO', 'Social Media'],
    ],
    [
        'title' => 'CRM System Implementation',
        'description' => 'Triển khai hệ thống CRM cho doanh nghiệp 500+ nhân viên, cải thiện 45% hiệu suất bán hàng.',
        'image' => 'assets/images/project4.jpg',
        'demo_link' => '#',
        'github_link' => '#',
        'tags' => ['PM', 'CRM', 'Change Management'],
    ],
    [
        'title' => 'Market Research & Analysis',
        'description' => 'Nghiên cứu thị trường và phân tích đối thủ cạnh tranh, xác định cơ hội tăng trưởng mới.',
        'image' => 'assets/images/project5.jpg',
        'demo_link' => '#',
        'github_link' => '#',
        'tags' => ['BA', 'Market Research', 'Strategy'],
    ],
    [
        'title' => 'Product Launch Strategy',
        'description' => 'Chiến lược ra mắt sản phẩm mới với kế hoạch marketing tích hợp, đạt 120% mục tiêu doanh số.',
        'image' => 'assets/images/project6.jpg',
        'demo_link' => '#',
        'github_link' => '#',
        'tags' => ['Marketing', 'Product Management', 'GTM'],
    ],
];

// Services/Expertise
$services = [
    [
        'icon' => 'fas fa-tasks',
        'title' => 'Project Management',
        'description' => 'Quản lý dự án từ khởi tạo đến hoàn thành với phương pháp Agile/Scrum, đảm bảo đúng tiến độ và ngân sách.',
    ],
    [
        'icon' => 'fas fa-chart-line',
        'title' => 'Business Analysis',
        'description' => 'Phân tích yêu cầu kinh doanh, tối ưu quy trình và đưa ra giải pháp tăng hiệu quả vận hành.',
    ],
    [
        'icon' => 'fas fa-bullhorn',
        'title' => 'Digital Marketing',
        'description' => 'Xây dựng và triển khai chiến lược marketing đa kênh, tối ưu ROI và tăng trưởng bền vững.',
    ],
    [
        'icon' => 'fas fa-users',
        'title' => 'Stakeholder Management',
        'description' => 'Quản lý và điều phối các bên liên quan, đảm bảo sự đồng thuận và hợp tác hiệu quả.',
    ],
    [
        'icon' => 'fas fa-database',
        'title' => 'Data Analysis',
        'description' => 'Phân tích dữ liệu kinh doanh, tạo báo cáo và dashboard để hỗ trợ ra quyết định.',
    ],
    [
        'icon' => 'fas fa-lightbulb',
        'title' => 'Strategy Consulting',
        'description' => 'Tư vấn chiến lược kinh doanh, phát triển sản phẩm và mở rộng thị trường.',
    ],
];

// Certifications
$certifications = [
    'PMP (Project Management Professional)',
    'Certified Scrum Master (CSM)',
    'CBAP (Certified Business Analysis Professional)',
    'Google Analytics Certification',
    'Digital Marketing Professional',
];
?>

