<?php 

include ("config.php");

if (isset($_POST["contact"])) { // Check press or not Post Comment Button
	$name = @$_POST["nama"];
	$email = @$_POST["email"];
	// $phone = @$_POST["phone"];
	$message = @$_POST["message"];

	$sql = "INSERT INTO contact (name, email, message)
			VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Message added successfully.')</script>";
	} else {
		echo "<script>alert('Message does not add.')</script>";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smarket - Success</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <!-- ICON -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="text-center d-flex justify-content-center align-item-center">
		<h1 class="title-text-big">SUCCESS</h1>
		<a href="home.html">Back</a>
	</div>
</body>
</html>