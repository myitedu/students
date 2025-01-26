<?php
// Database connection configuration
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "myitedu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch blogs from the database
$sql = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Blog Posts</h1>
    <a href="create_blog.php" class="btn btn-primary mb-4">Create New Blog</a>
    <div class="list-group">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <a href="view_blog.php?id=<?php echo $row['id']; ?>" class="list-group-item list-group-item-action">
                    <h5 class="mb-1"><?php echo htmlspecialchars($row['title']); ?></h5>
                    <p class="mb-1">Created on: <?php echo $row['created_at']; ?></p>
                </a>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No blogs found. Create a new blog!</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
<?php
$conn->close();
?>
