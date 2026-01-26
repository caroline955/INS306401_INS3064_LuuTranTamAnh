<?php require_once '../config.php'; ?>

<!-- Skills Section -->
<section id="skills" class="skills">
    <div class="container">
        <h2 class="section-title">Kỹ năng chuyên môn</h2>
        <p class="section-subtitle">Các kỹ năng và công cụ tôi thành thạo</p>
        
        <div class="skills-grid">
            <?php foreach ($skills as $category => $skill_list): ?>
                <div class="skill-category">
                    <h3>
                        <?php if ($category == 'Project Management'): ?>
                            <i class="fas fa-tasks"></i>
                        <?php elseif ($category == 'Business Analysis'): ?>
                            <i class="fas fa-chart-line"></i>
                        <?php else: ?>
                            <i class="fas fa-bullhorn"></i>
                        <?php endif; ?>
                        <?php echo $category; ?>
                    </h3>
                    <div class="skill-items">
                        <?php foreach ($skill_list as $skill): ?>
                            <div class="skill-item">
                                <div class="skill-info">
                                    <span><?php echo $skill['name']; ?></span>
                                    <span><?php echo $skill['level']; ?>%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: <?php echo $skill['level']; ?>%"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

