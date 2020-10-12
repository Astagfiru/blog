<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
</head>
<body>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<div class="col-12" style="">
			<?php
				$database = [
				[
					"title" => "Строительство автомобильной дороги «Кобяй» близится к завершению",
					"short_text" => "Транспорт",
					"img" => "img/1.jpg",
					"users" => "user1"
				]
			]
			?>
			<?php
				$connect = mysqli_connect("127.0.0.1","root", "", "blog");
				$query = mysqli_query($connect, "SELECT * FROM full_posts");
				$result = $query->fetch_assoc();

				echo "<h1 style='background-color:#eee; margin-top:5px;'>" . $result["title"] . "</h1>";
				echo "<p style='margin-left: 10px;'>" . $result["text"] . "</p>";
				echo "<img src='" . $result["img"] . "' class='w-100'>";
				echo "<p style='margin-left: 10px;'>" . $result["text"] . "</p>";
				echo "<p>". "Автор: " . $result["user"] . "</p>";
			?>
		</div>
	</div>
</body>
</html>



