<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		//var answer2 = parseInt(Math.random() * 100);
		var tryCount = 0;
		var tryCount1 = 0;
		var maxTryCount = 7;

		function readInt(userAnswer){
			var number = document.getElementById(userAnswer).value;
			return parseInt(number);}
			// return +document.getElementById("userAnswer").value;

		function write(text){
			document.getElementById("info").innerHTML = text;}

		function hide(id){
			document.getElementById(id).style.display = "none";}

		function check(userAnswer,userAnswer1, answer, name){
			if(userAnswer == answer){
				write('<b>Поздравляю,  '+name+', вы выйграли!</b>');
				hide("button"); hide("button1");
				hide("userAnswer"); hide("userAnswer1");} 
			else if(tryCount >= maxTryCount){
				write(name+', Вы проиграли');
				hide("button");
				hide("userAnswer");} 
			else if(userAnswer > answer){write(name+', Вы ввели слишком большое число<br>Попробуйте еще раз. Введите число от 0 до 100');} 
			else if(userAnswer < answer){write(name+', Вы ввели слишком маленькое число<br>Попробуйте еще раз. Введите число от 0 до 100');}
		}

		function guess(){
			tryCount++;
			var userAnswer = readInt('userAnswer');
			check(userAnswer,"userAnswer1", answer, 'Игрок 1')
		}

		function guess1(){
			tryCount1++;

			var userAnswer1 = readInt('userAnswer1');
			check(userAnswer1,"userAnswer", answer, 'Игрок 2')
			
		}

	</script>
</head>
<body>

<div class="content">
<?php  
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка для двоих</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100</p>
				<input type="text" placeholder="Поле для ответа первого игрока" id="userAnswer">
				<br>
				<input type="text" placeholder="Поле для ответа второго игрока" id="userAnswer1">
				<br>
				<a href="#" onClick="guess();" id="button">Начать Игрок 1</a>
				<a href="#" onClick="guess1();" id="button1">Начать Икрок 2</a>			
			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Max & Y Co
<div>


</body>
</html>