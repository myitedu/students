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

// Fetch blog details by ID
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM blogs WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $blog = $result->fetch_assoc();
    } else {
        echo "<p>Blog not found.</p>";
        exit;
    }
} else {
    echo "<p>Invalid blog ID.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">View Blog</h1>
    <div class="card">
        <div class="card-header">
            <h2><?php echo htmlspecialchars($blog['title']); ?></h2>
        </div>
        <div class="card-body">
            <p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>
        </div>
        <div class="card-footer text-muted">
            <small>Created on: <?php echo $blog['created_at']; ?></small>
        </div>
    </div>
    <a href="index.php" class="btn btn-secondary mt-4">Back to Blogs</a>
</div>
</body>
</html>
<?php
$conn->close();
?>
