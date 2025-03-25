<?php include "load/blog.php"; ?>

<section id="blogs" class="container my-5">
    <h2 class="text-center mb-4">Latest Travel Blogs</h2>
    
    <div class="row">
        <?php if ($result->num_rows > 0) { 
            // Loop through each blog category and display it
            while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-4 p-lg-3">
                    <div class="card">
                        <!-- Display category image -->
                        <img src="<?= htmlspecialchars($row['category_image']) ?>" 
                             class="card-img-top" 
                             alt="<?= htmlspecialchars($row['category_name']) ?>">
                        <div class="card-body">
                            <!-- Display category name -->
                            <h5 class="card-title"><?= htmlspecialchars($row['category_name']) ?></h5>
                            <!-- Display truncated category content -->
                            <p class="card-text"><?= htmlspecialchars(mb_strimwidth($row['category_content'], 0, 43, "...")) ?></p>
                            <!-- Link to category page -->
                            <a href="blog-details/<?= $row['category_name'] ?>" 
                               class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
        <?php }
        } else { ?>
            <!-- Display message if no data is found -->
            <p class="text-center">No data found</p>
        <?php } ?>
    </div>
</section>
