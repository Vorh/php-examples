
<!DOCTYPE html>
<html>
<body>

<?php
echo readfile("../resources/web.txt");
?>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload time" name="submit">
</form>

</body>
</html>

