<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php
echo $_SESSION["email"];
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
?>

</body>
</html>