<?php require_once '../config.php'; ?>

<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <h2 class="section-title">Dịch vụ chuyên môn</h2>
        <p class="section-subtitle">Các lĩnh vực tôi có thể hỗ trợ bạn</p>
        
        <div class="services-grid">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="<?php echo $service['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

