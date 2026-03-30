-- 1. Tạo Database
CREATE DATABASE student_management
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE student_management;

-- 2. Tạo table classes trước (vì students sẽ tham chiếu đến bảng này)
CREATE TABLE classes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(100)
);

-- 3. Tạo table students
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mssv VARCHAR(20) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20),
    class_id INT, -- Sử dụng class_id thay vì class dạng text để chuẩn hóa dữ liệu
    gpa DECIMAL(3,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (class_id) REFERENCES classes(id)
);