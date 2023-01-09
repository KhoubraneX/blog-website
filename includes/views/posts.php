<!-- Table item -->
<?php
while ($post = mysqli_fetch_assoc($result_posts)) {
    $post_id = $post["post_id"];
    $author_avatar = $post["avatar"];
    $post_name = $post["post_name"];
    $post_date = $post["post_date"];
    $post_author_name = $post["firstname"];
    $post_categorie = $post["name_categorie"];
    $post_status_name = $post["status_name"];
    $post_status_id = $post["status_id"];
    // date format
    $new_data_format = formatDate($post_date);
?>
<tr>
    <!-- Table data -->
    <td>
        <h6 class="course-title mt-2 mt-md-0 mb-0"><a href="#">
                <?php echo $post_name; ?>
            </a></h6>
    </td>
    <!-- Table data -->
    <td>
        <h6 class="mb-0"><a href="#">
                <?php echo $post_author_name ?>
            </a></h6>
    </td>
    <!-- Table data -->
    <td>
        <?php echo $new_data_format; ?>
    </td>
    <!-- Table data -->
    <td>
        <a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
            <?php echo $post_categorie; ?>
        </a>
    </td>
    <!-- Table data -->
    <td>
        <?php if ($post_status_id == 2) {
        echo "<span class='badge bg-success bg-opacity-10 text-success mb-2'>$post_status_name</span>";
    } ?>
        <?php if ($post_status_id == 3) {
        echo "<span class='badge bg-danger bg-opacity-10 text-danger mb-2'>$post_status_name</span>";
    } ?>
        <?php if ($post_status_id == 4) {
        echo "<span class='badge bg-warning bg-opacity-15 text-warning mb-2'>$post_status_name</span>";
    } ?>
    </td>
    <!-- Table data -->
    <td>
        <div class="d-flex gap-2">
            <form method="POST">
                <input hidden type="text" name="post-d-v" value="<?php echo $post_id; ?>">
                <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top"
                    type="submit" name="Delete"><i class="bi bi-trash"></i></button>
            </form>
            <a href="dashboard-post-edit.php?post=<?php echo $post_id; ?>" class="btn btn-light btn-round mb-0"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>
        </div>
    </td>
</tr>
<?php } ?>
<!-- Table item -->