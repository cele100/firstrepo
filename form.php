<html>
<body>

<form action="first.php" method="get">
    Name:<input type="text" name="name">
    <input type="submit">
</form>
<br>
<?php echo $_GET["name"]?>
</body>
</html>