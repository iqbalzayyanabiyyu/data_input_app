<?php 

include ("config.php");

if (isset($_POST["submit"])) { // Check press or not Post Comment Button
	$nama = @$_POST["nama"]; // Get Name from form
	$email = @$_POST["email"]; // Get Email from form
	date_default_timezone_set("Asia/Bangkok");
	$datetimes = date("Y-m-d H:i:s");
	$comment = @$_POST["comment"]; // Get Comment from form

	$sql = "INSERT INTO data_user (nama, email, datetimes, comment)
			VALUES ('$nama', '$email', '$datetimes', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smarket - Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <!-- ICON -->
    <link rel="shortcut icon" href="../images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
	<section class="h-100 w-100" style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;
			">
		<div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
			<div>
                <div class="d-flex justify-content-between align-items-start hero">
                    <!-- Left Column -->
                    <div class="flex-lg-grow-1 d-flex flex-column align-items-lg-start align-items-center">
						<h1 class="title-text-big">
							Komentar
						</h1>
						<a href="../template/home.html" class="btn btn-primary">Back</a>
						<?php 

						$sql = "SELECT * FROM data_user ORDER BY datetimes DESC";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {

						?>
						<div class="card my-3 text-start"">
							<div class="card-body">
								<!-- <h5>
									<?php echo "Date ".$row["tanggal"]." | "."Time ".$row["waktu"]; ?>
								</h5> -->
								<h5><?php echo $row["datetimes"]; ?></h5>
								<h3 class="card-title"><?php echo $row["nama"]; ?></h3>
								<h5 class="card-subtitle mb-2 text-muted">
									<a href="mailto:<?php echo $row["email"]; ?>"><?php echo $row["email"]; ?></a>
								</h5>
								<p class="card-text"><?php echo $row["comment"]; ?></p>
							</div>
						</div>
						<?php

							}
						}
						
						?>
                    </div>
                </div>
            </div>
		</div>
	</section>

	<section class="comments h-100 w-100 mt-5 header-3-3 container-xxl mx-auto p-0">
		
	</section>

	<!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>