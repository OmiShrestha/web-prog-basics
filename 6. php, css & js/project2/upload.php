<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Image</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Upload Your Travel Image</h2>
        <form action="upload-handler.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Choose Image (JPG, PNG, max 2MB):</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
    </div>
</body>
</html>
