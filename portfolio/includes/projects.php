<?php require_once '../config.php'; ?>

<!-- Projects Section -->
<section id="projects" class="projects">
    <div class="container">
        <h2 class="section-title">Dự án tiêu biểu</h2>
        <p class="section-subtitle">Các dự án tôi đã thực hiện thành công</p>
        
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <div class="project-image">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <div class="project-overlay">
                            <a href="<?php echo $project['demo_link']; ?>" class="project-link" target="_blank">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <a href="<?php echo $project['github_link']; ?>" class="project-link" target="_blank">
                                <i class="fas fa-info-circle"></i>
                            </a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <div class="project-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="tag"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

