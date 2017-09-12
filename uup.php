<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("EnglishWord000.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("EnglishWord000.txt"));
fclose($myfile);
?>

</body>
</html>
