<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		
		<?php 
			$database = [
				[
					"title" => "Строительство автомобильной дороги «Кобяй» близится к завершению",
					"short_text" => "Транспорт",
					"img" => "img/1.jpg",
					"users" => "user1"
				],
				[
					"title" => "В Нерюнгри за одну ночь произошли пожары в шести жилых домах. Предполагаемая причина во всех случаях — поджог",
					"short_text" => "Происшествия",
					"img" => "img/2.jpg",
					"users" => "user2"
				],
				[
					"title" => "Коронавирус в Якутии диагностирован еще у 94 человек",
					"short_text" => "Здоровье",
					"img" => "img/3.jpg",
					"users" => "user3"
				],
				[
					"title" => "Спасатели нашли пропавшего в Нюрбинском районе мужчину",
					"short_text" => "Происшествия",
					"img" => "img/4.jpg",
					"users" => "user4"
				],
				[
					"title" => "К 2021 году доллар может взять рекордную высоту за последние пять лет",
					"short_text" => "Экономика",
					"img" => "img/5.jpg",
					"users" => "user5"
				],
				[
					"title" => $_GET["title"],
					"short_text" => $_GET["text"],
					"img" => $_GET["img"],
					"users" => $_GET["user"]
				]
			];
		 ?>
	</div>
	<?php
		$connect = mysqli_connect("127.0.0.1","root", "", "blog");

		if($connect==false) {
			echo "the connection is lost ";
		} else{
			echo "the connection is ok ";
		}

		$query = mysqli_query($connect, "SELECT * FROM posts");
		if($query==false) {
			echo "the query is lost ";
		} else{
			echo "the query is ok ";
		}

		$result = $query->fetch_assoc();
		$result2 = $query->fetch_assoc();
		$result3 = $query->fetch_assoc();
		$result4 = $query->fetch_assoc();
	?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php
			 	$name = $_GET["name"];
			 	$password = $_GET["password"];
			 	if($password == 12345678){
			 		echo "Correct password";
			 	} else{
			 		echo "Incorrect password";
			 	}
			 	echo "<h1>" . "Добро Пожаловать, " . $name . "</h1>";

				echo "<h1 style='background-color:#eee; margin-top:5px;'>" . $result["title"] . "</h1>";
				echo "<p style='margin-left: 10px;'>" . $result["text"] . "</p>";
				echo "<img src='" . $result["img"] . "' class='w-100'>";
				echo "<a href='post1.php' style='font-size:25px;' class='badge badge-ligh'>" . "далее" . "</a>";
				echo "<p>". "Автор: " . $result["user"] . "</p>";

				echo "<h1 style='background-color:#eee; margin-top:5px;'>" . $result2["title"] . "</h1>";
				echo "<p style='margin-left: 10px;'>" . $result2["text"] . "</p>";
				echo "<img src='" . $result2["img"] . "' class='w-100'>";
				echo "<a href='post2.php' style='font-size:25px;' class='badge badge-ligh'>" . "далее" . "</a>";
				echo "<p>". "Автор: " . $result2["user"] . "</p>";

				echo "<h1 style='background-color:#eee; margin-top:5px;'>" . $result3["title"] . "</h1>";
				echo "<p style='margin-left: 10px;'>" . $result3["text"] . "</p>";
				echo "<img src='" . $result3["img"] . "' class='w-100'>";
				echo "<a href='post3.php' style='font-size:25px;' class='badge badge-ligh'>" . "далее" . "</a>";
				echo "<p>". "Автор: " . $result3["user"] . "</p>";

				echo "<h1 style='background-color:#eee; margin-top:5px;'>" . $result4["title"] . "</h1>";
				echo "<p style='margin-left: 10px;'>" . $result4["text"] . "</p>";
				echo "<img src='" . $result4["img"] . "' class='w-100'>";
				echo "<a href='post4.php' style='font-size:25px;' class='badge badge-ligh'>" . "далее" . "</a>";
				echo "<p>". "Автор: " . $result4["user"] . "</p>";
			 ?>
		</div>
	</div>
</body>
</html>