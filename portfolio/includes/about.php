<?php require_once '../config.php'; ?>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <h2 class="section-title">Giới thiệu về tôi</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="assets/images/about.jpg" alt="About <?php echo $personal_info['name']; ?>">
            </div>
            <div class="about-text">
                <h3>Project Manager | Business Analyst | Marketing Specialist</h3>
                <p>
                    Với hơn 5 năm kinh nghiệm trong lĩnh vực quản lý dự án, phân tích kinh doanh và marketing, 
                    tôi đã thành công trong việc dẫn dắt các dự án phức tạp, tối ưu hóa quy trình kinh doanh 
                    và xây dựng chiến lược marketing hiệu quả.
                </p>
                <p>
                    Tôi tin rằng sự kết hợp giữa tư duy chiến lược, phân tích dữ liệu và kỹ năng giao tiếp 
                    là chìa khóa để tạo ra giá trị bền vững cho doanh nghiệp và khách hàng.
                </p>
                
                <div class="about-info">
                    <div class="info-item">
                        <i class="fas fa-user"></i>
                        <div>
                            <strong>Tên:</strong>
                            <span><?php echo $personal_info['full_name']; ?></span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong>
                            <span><?php echo $personal_info['email']; ?></span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Địa chỉ:</strong>
                            <span><?php echo $personal_info['location']; ?></span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-graduation-cap"></i>
                        <div>
                            <strong>Học vấn:</strong>
                            <span><?php echo $personal_info['education']; ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="certifications">
                    <h4><i class="fas fa-certificate"></i> Chứng chỉ chuyên môn:</h4>
                    <ul>
                        <?php foreach ($certifications as $cert): ?>
                            <li><?php echo $cert; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <a href="assets/resume.pdf" class="btn btn-primary" download>
                    <i class="fas fa-download"></i> Tải CV
                </a>
            </div>
        </div>
    </div>
</section>

