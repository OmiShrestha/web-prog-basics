<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadDir = 'images/uploads/';
    $allowedTypes = ['image/jpeg', 'image/png'];
    $maxSize = 2 * 1024 * 1024; // 2MB

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
        die("Image upload failed.");
    }

    $file = $_FILES['image'];
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);

    if (!in_array($file['type'], $allowedTypes)) {
        die("Only JPG or PNG files are allowed.");
    }

    if ($file['size'] > $maxSize) {
        die("File too large. Max 2MB allowed.");
    }

    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    $newFileName = uniqid() . '.' . $ext;
    $targetPath = $uploadDir . $newFileName;

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        echo "<h3>Image Uploaded Successfully!</h3>";
        echo "<p>Title: $title</p>";
        echo "<p>Description: $description</p>";
        echo "<img src='$targetPath' class='img-responsive' style='max-width:400px'>";
        echo "<br><a href='list.php' class='btn btn-primary'>Go to Gallery</a>";

        // Save uploaded image metadata to uploads.json
        $uploadsFile = 'uploads.json';
        $uploadedImages = file_exists($uploadsFile) ? json_decode(file_get_contents($uploadsFile), true) : [];

        $uploadedImages[] = [
            'title' => $title,
            'description' => $description,
            'filename' => $newFileName
        ];

        file_put_contents($uploadsFile, json_encode($uploadedImages, JSON_PRETTY_PRINT));
    } else {
        echo "Failed to save uploaded image.";
    }
} else {
    echo "Invalid request.";
}
?>
