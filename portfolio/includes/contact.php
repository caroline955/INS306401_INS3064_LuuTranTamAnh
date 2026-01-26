<?php require_once '../config.php'; ?>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title">Liên hệ với tôi</h2>
        <p class="section-subtitle">Hãy kết nối và cùng nhau tạo ra giá trị</p>
        
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Địa chỉ</h4>
                        <p><?php echo $personal_info['location']; ?></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Điện thoại</h4>
                        <p><?php echo $personal_info['phone']; ?></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-details">
                        <h4>Email</h4>
                        <p><?php echo $personal_info['email']; ?></p>
                    </div>
                </div>
                
                <div class="contact-social">
                    <h4>Mạng xã hội</h4>
                    <div class="social-links">
                        <?php foreach ($social_links as $platform => $url): ?>
                            <a href="<?php echo $url; ?>" target="_blank">
                                <i class="fab fa-<?php echo $platform; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <form id="contactForm" action="process_contact.php" method="POST">
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Tên của bạn" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email của bạn" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Chủ đề" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" rows="5" placeholder="Tin nhắn của bạn" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Gửi tin nhắn
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

