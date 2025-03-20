<?php include "load/blog_details.php"; ?>

<div class="container my-5">
    <h1 class="text-center display-4 fw-bold"><?= $category_name ?></h1>
    <div class="text-center">
        <img src="<?= $category_image ?>" alt="<?= $category_name ?>" class="img-fluid rounded shadow mb-4">
    </div>
    <div class="blog-content">
        <p class="fs-5 lh-lg"><?= nl2br($category_content) ?></p>
    </div>
</div>

