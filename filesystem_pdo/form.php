<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>圖片上傳</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">圖片名稱</label>
            <input type="text" name="name">
        </div>
        <br>
        <input type="file" name="img">
        <br>
        <br>
        <input type="submit" value="上傳">
    </form>
</body>
</html>