<html>
<head>
<title>Palindrome Program</title>
</head>
<body>
<form method="post" action="index.php">
<input type="text" name="number" value="" />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
if(isset($_POST['number'])) {
$input = $_POST['number'];
$reverse = strrev($input);
if($reverse == $input) {
echo $input . ' is a palindrome';
}
else{
echo $input. ' is not a palindrome';
}
}
?>
</body>
</html>