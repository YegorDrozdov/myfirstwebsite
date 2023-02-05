<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
<?php  
	include "menu.php";
?>
	 
	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
		<figure>
			<img src="img/IMG_5856.png" title="Парни в масках - будущие программисты! Крайний - это я)))" alt="Хорошая фотка" width="480" height="380">
			<figcaption></figcaption>
		</figure>

		<div class="box_text">
			<p><b>Здравствуйте!</b></p>

			<p>Меня зовут <b><i>Егор</i></b>. Совсем недавно я решил изменить свою жизнь и увлекся программированием. Здесь я делаю свои превые шаги к успеху. И этот сайт - моя первая ступень к заветной цели.</p>

			<p>Если Вы увлекаетесь программированием, то я хотел бы для Вас отметить неплохую и <b>бесплатную </b>образовательную платформу<a href="https://stepik.org/course/58852/syllabus" target="_blank"><b>Stepik.org</b></a></p>

			<p>На этом же сайте Вы сможете сыграть в несколько игр, написанных мной в процессе обучения на <a href="https://geekbrains.ru"target="_blank"><b>IT-портале GeekBrains</b></a>.
				<!-- <br>Такие как:</p> -->
			
		</div>
		<!-- <?php  
				include "menu.php";
		?> -->
	</div>

</div>
<div class='footer'>
	Copyright &copy; <?php echo date("Y");?> Max & Y Co
</div>

</body>
</html>
