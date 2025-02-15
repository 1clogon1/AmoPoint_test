<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка файла</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Загрузка файла .txt</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept=".txt" required>
        <button type="submit">Загрузить</button>
    </form>

    <div class="status">
        <?php if (isset($_GET['status'])): ?>
            <div class="circle <?php echo $_GET['status'] == 'success' ? 'green' : 'red'; ?>"></div>
        <?php endif; ?>
    </div>

    <?php if (isset($_GET['file'])): ?>
        <h3>Содержимое файла:</h3>
        <pre><?php include 'process.php'; ?></pre>
    <?php endif; ?>
</body>
</html>
