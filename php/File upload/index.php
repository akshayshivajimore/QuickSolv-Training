<html>
  <head>

  <title>Image Upload</title>
  <style>
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 10vh;
    }
  </style>
</head>
<body>

<form action="submit.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload">
  
  <input type="submit" name="submit" value="Upload">
</form>

<form action="submit.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload">
  
  <input type="submit" name="submit" value="Upload">
</form>

<form action="submit.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload">
  
  <input type="submit" name="submit" value="Upload">
</form>

</body>
</html>