<?php include "load/blog_details.php"; ?>

<div class="container my-5">
    <!-- Heading -->
    <h1 class="text-center display-4 fw-bold text-danger mb-4"><?= htmlspecialchars($category_name) ?></h1>

    <!-- Image -->
    <div class="text-center mb-4">
        <img src="<?= $category_image ?>" 
             alt="<?= htmlspecialchars($category_name) ?>" 
             class="img-fluid rounded shadow category-image">
    </div>

    <!-- Content -->
    <div class="blog-content">
        <p class="fs-5 lh-lg text-muted"><?= nl2br(htmlspecialchars($category_content)) ?></p>
    </div>
</div>
