# Portfolio PHP - Project Manager | Business Analyst | Marketing Specialist

## 🎯 Tổng quan

Portfolio chuyên nghiệp được xây dựng bằng **PHP** với theme **đen trắng tối giản**, phù hợp cho các vị trí:
- 📊 **Project Manager (PM)**
- 📈 **Business Analyst (BA)**
- 📢 **Marketing Specialist**

## 📁 Cấu trúc dự án

```
portfolio/
├── index.php                   # Trang chính (PHP)
├── config.php                  # File cấu hình
├── process_contact.php         # Xử lý form liên hệ
├── css/
│   └── styles-bw.css          # Black & White Theme
├── js/
│   └── script.js              # JavaScript
├── includes/                   # PHP Components
│   ├── header.php             # Navigation
│   ├── hero.php               # Hero section
│   ├── about.php              # Giới thiệu
│   ├── services.php           # Dịch vụ chuyên môn
│   ├── skills.php             # Kỹ năng
│   ├── projects.php           # Dự án
│   ├── contact.php            # Liên hệ
│   └── footer.php             # Footer
└── assets/
    └── images/                # Thư mục ảnh
```

## 🎨 Tính năng

### ✅ Cấu trúc PHP modular
- Component-based architecture
- Dễ dàng bảo trì và mở rộng
- Tách biệt logic và presentation

### ✅ Nội dung chuyên nghiệp
- **Project Management**: Agile/Scrum, Jira, MS Project, Risk Management
- **Business Analysis**: Requirements Analysis, Process Modeling, Data Analysis, SQL
- **Marketing**: Digital Marketing, SEO/SEM, Google Analytics, Content Strategy

### ✅ Theme đen trắng chuyên nghiệp
- Tối giản, sang trọng
- Phù hợp môi trường doanh nghiệp
- Hiệu ứng grayscale cho ảnh

### ✅ Các section
1. **Hero** - Giới thiệu tổng quan
2. **About** - Thông tin chi tiết + Chứng chỉ
3. **Services** - 6 dịch vụ chuyên môn
4. **Skills** - Kỹ năng theo 3 nhóm
5. **Projects** - 6 dự án tiêu biểu
6. **Contact** - Form liên hệ với PHP processing

## 🚀 Cách chạy

### Yêu cầu:
- PHP 7.4 trở lên
- Web server (Apache/Nginx) hoặc PHP built-in server

### Chạy local:

**Cách 1: PHP Built-in Server**
```bash
cd portfolio
php -S localhost:8000
```
Mở trình duyệt: `http://localhost:8000`

**Cách 2: XAMPP/WAMP**
1. Copy thư mục `portfolio` vào `htdocs` (XAMPP) hoặc `www` (WAMP)
2. Mở: `http://localhost/portfolio`

**Cách 3: Live Server (VS Code)**
- Cài extension "PHP Server"
- Right-click `index.php` → "PHP Server: Serve project"

## 📝 Tùy chỉnh

### 1. Thông tin cá nhân (config.php)

```php
$personal_info = [
    'name' => 'Tên của bạn',
    'title' => 'Project Manager | Business Analyst | Marketing Specialist',
    'email' => 'your.email@example.com',
    'phone' => '+84 xxx xxx xxx',
    // ...
];
```

### 2. Kỹ năng (config.php)

```php
$skills = [
    'Project Management' => [
        ['name' => 'Agile/Scrum', 'level' => 90],
        // Thêm kỹ năng khác...
    ],
];
```

### 3. Dự án (config.php)

```php
$projects = [
    [
        'title' => 'Tên dự án',
        'description' => 'Mô tả dự án',
        'image' => 'assets/images/project1.jpg',
        'tags' => ['PM', 'Agile', 'CRM'],
    ],
];
```

### 4. Dịch vụ (config.php)

```php
$services = [
    [
        'icon' => 'fas fa-tasks',
        'title' => 'Project Management',
        'description' => 'Mô tả dịch vụ...',
    ],
];
```

### 5. Chứng chỉ (config.php)

```php
$certifications = [
    'PMP (Project Management Professional)',
    'Certified Scrum Master (CSM)',
    // Thêm chứng chỉ khác...
];
```

## 📧 Cấu hình Email

Chỉnh sửa file `process_contact.php`:

```php
$to = 'your.email@example.com'; // Email nhận tin nhắn
```

## 🎨 Tùy chỉnh màu sắc

File `css/styles-bw.css`:

```css
:root {
    --primary-color: #000000;      /* Đen chính */
    --secondary-color: #1a1a1a;    /* Xám đậm */
    --accent-color: #333333;       /* Xám */
}
```

## 📸 Thêm ảnh

Đặt các file ảnh vào `assets/images/`:
- `profile.jpg` - Ảnh đại diện (400x400px)
- `about.jpg` - Ảnh giới thiệu
- `project1.jpg` đến `project6.jpg` - Ảnh dự án (800x600px)

## 🌐 Deploy

### GitHub Pages (Static)
GitHub Pages không hỗ trợ PHP. Bạn cần:
1. Convert sang HTML tĩnh, hoặc
2. Deploy lên hosting hỗ trợ PHP

### Hosting PHP (Khuyến nghị)
- **Heroku** (Free tier)
- **000webhost** (Free PHP hosting)
- **InfinityFree** (Free PHP hosting)
- **Hostinger** (Paid)
- **SiteGround** (Paid)

### Deploy lên Heroku:
```bash
# Tạo file composer.json
echo '{}' > composer.json

# Tạo file index.php nếu chưa có
# Deploy
git init
heroku create your-portfolio-name
git add .
git commit -m "Initial commit"
git push heroku main
```

## 💼 Nội dung nghiệp vụ

### Project Management
- Agile/Scrum methodology
- Jira/Confluence
- MS Project
- Risk Management
- Stakeholder Management

### Business Analysis
- Requirements Analysis
- Process Modeling (BPMN)
- Data Analysis
- SQL & Database
- Documentation

### Marketing
- Digital Marketing
- SEO/SEM
- Google Analytics
- Content Strategy
- Social Media Marketing

## 📊 Dự án mẫu

1. **E-commerce Platform** - Quản lý dự án phát triển nền tảng thương mại điện tử
2. **Business Process Optimization** - Phân tích và tối ưu quy trình kinh doanh
3. **Digital Marketing Campaign** - Chiến dịch marketing đa kênh
4. **CRM System Implementation** - Triển khai hệ thống CRM
5. **Market Research & Analysis** - Nghiên cứu thị trường
6. **Product Launch Strategy** - Chiến lược ra mắt sản phẩm

## 🔧 Troubleshooting

### Lỗi: "Call to undefined function mail()"
- Cấu hình SMTP trong `php.ini`
- Hoặc sử dụng PHPMailer library

### Lỗi: "Cannot modify header information"
- Kiểm tra không có output trước `<?php`
- Kiểm tra encoding file (UTF-8 without BOM)

### CSS không load
- Kiểm tra đường dẫn: `css/styles-bw.css`
- Kiểm tra file tồn tại

## 📞 Hỗ trợ

Nếu cần hỗ trợ:
1. Kiểm tra console (F12) để xem lỗi
2. Kiểm tra PHP error log
3. Đảm bảo tất cả file trong thư mục `includes/` tồn tại

---

**Chúc bạn thành công với portfolio chuyên nghiệp! 🎉**

