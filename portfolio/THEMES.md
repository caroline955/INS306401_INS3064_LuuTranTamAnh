# Portfolio Website - Hướng dẫn Theme

## 🎨 Hai Theme Chuyên Nghiệp

Portfolio này có **2 theme** để bạn lựa chọn:

### 1. 🌸 **Pink Theme** (Màu hồng sang trọng)
- File: `index.html` + `css/styles.css`
- Màu sắc: Gradient hồng-tím (#d946ef → #ec4899)
- Phong cách: Hiện đại, năng động, sáng tạo
- Phù hợp: Designer, Creative, Marketing

### 2. ⚫ **Black & White Theme** (Đen trắng tối giản)
- File: `index-bw.html` + `css/styles-bw.css`
- Màu sắc: Đen trắng (#000000 → #ffffff)
- Phong cách: Tối giản, chuyên nghiệp, sang trọng
- Phù hợp: Developer, Corporate, Professional

## 🔄 Cách chuyển đổi Theme

### Cách 1: Đổi tên file (Khuyến nghị)
```bash
# Để dùng Pink Theme (mặc định)
Mở file: index.html

# Để dùng Black & White Theme
Đổi tên: index-bw.html → index.html
Hoặc mở trực tiếp: index-bw.html
```

### Cách 2: Thay đổi trong HTML
Mở file `index.html`, tìm dòng:
```html
<link rel="stylesheet" href="css/styles.css">
<!-- <link rel="stylesheet" href="css/styles-bw.css"> -->
```

Đổi thành:
```html
<!-- <link rel="stylesheet" href="css/styles.css"> -->
<link rel="stylesheet" href="css/styles-bw.css">
```

## 📁 Cấu trúc thư mục

```
portfolio/
├── index.html              # Pink Theme (mặc định)
├── index-bw.html           # Black & White Theme
├── css/
│   ├── styles.css          # Pink Theme CSS
│   └── styles-bw.css       # Black & White Theme CSS
├── js/
│   └── script.js           # JavaScript (dùng chung)
└── assets/
    ├── images/             # Thư mục ảnh
    └── README.md
```

## 🎨 So sánh Theme

| Tính năng | Pink Theme | Black & White Theme |
|-----------|------------|---------------------|
| Màu chính | Hồng gradient | Đen thuần |
| Border radius | 15px (bo tròn) | 0px (vuông) |
| Hiệu ứng ảnh | Không filter | Grayscale → Color |
| Shadow | Màu hồng nhạt | Màu đen nhạt |
| Phong cách | Hiện đại, sáng tạo | Tối giản, chuyên nghiệp |

## 📝 Tùy chỉnh màu sắc

### Pink Theme (styles.css)
```css
:root {
    --primary-color: #d946ef;      /* Hồng chính */
    --secondary-color: #ec4899;    /* Hồng phụ */
    --accent-color: #f472b6;       /* Hồng nhạt */
}
```

### Black & White Theme (styles-bw.css)
```css
:root {
    --primary-color: #000000;      /* Đen */
    --secondary-color: #1a1a1a;    /* Xám đậm */
    --accent-color: #333333;       /* Xám */
}
```

## 🚀 Cách sử dụng

1. **Chọn theme** bạn thích (Pink hoặc Black & White)
2. **Mở file HTML** tương ứng trong trình duyệt
3. **Tùy chỉnh thông tin** cá nhân (tên, email, ảnh, v.v.)
4. **Deploy** lên GitHub Pages

## 💡 Gợi ý

- **Pink Theme**: Phù hợp cho portfolio sáng tạo, thiết kế, marketing
- **Black & White Theme**: Phù hợp cho portfolio lập trình, doanh nghiệp, chuyên nghiệp
- Bạn có thể tùy chỉnh màu sắc trong file CSS để tạo theme riêng

## 📞 Hỗ trợ

Nếu cần thay đổi màu sắc khác, chỉnh sửa biến `--primary-color` trong file CSS tương ứng.

---

**Chúc bạn có một portfolio đẹp! 🎉**

