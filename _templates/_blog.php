<?php require "load/db.php";

$sql = $conn->prepare("SELECT id, category_name, category_content, category_image FROM category");
$sql->execute();
$result = $sql->get_result();
?>

<section id="blogs" class="container my-5">
    <h2 class="text-center mb-4">Latest Travel Blogs</h2>
    
    <div class="row">
        <?php if ($result->num_rows > 0) { 
            while ($row = $result->fetch_assoc()) { ?>
                <div class="col-md-4 p-lg-3">
                    <div class="card">
                        <img src="<?= htmlspecialchars($row['category_image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['category_name']) ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($row['category_name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars(mb_strimwidth($row['category_content'], 0, 43, "...")) ?></p>
                            <a href="category.php?category_name=<?= $row['category_name'] ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
        <?php }
        } else { ?>
            <p class="text-center">No data found</p>
        <?php } ?>
    </div>
</section>

<?php $conn->close(); ?>
