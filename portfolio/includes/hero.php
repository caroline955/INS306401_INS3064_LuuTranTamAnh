<?php require_once '../config.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Xin chào, tôi là <span class="highlight"><?php echo $personal_info['name']; ?></span></h1>
                <p class="hero-subtitle"><?php echo $personal_info['title']; ?></p>
                <p class="hero-description">
                    <?php echo $personal_info['description']; ?>
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">Xem dự án</a>
                    <a href="#contact" class="btn btn-secondary">Liên hệ</a>
                </div>
                <div class="social-links">
                    <?php foreach ($social_links as $platform => $url): ?>
                        <a href="<?php echo $url; ?>" target="_blank">
                            <i class="fab fa-<?php echo $platform; ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-container">
                    <img src="assets/images/profile.jpg" alt="<?php echo $personal_info['name']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>

