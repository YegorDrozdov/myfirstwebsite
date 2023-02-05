<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		const compareRandom = ( ) => Math.random() - 0.5;

		const randomInteger = ( min, max ) => Math.round(min - 0.5 + Math.random() * (max - min + 1));

		function generatePassword() {
		    var arr = [];
		    arr = arr.concat([0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']); 
		    arr = arr.concat(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '@', '#', '$', '%', '?', '-', '+', '=', '~']);

		    arr.sort(compareRandom);

		    var password = '';
		    var passLenght = document.querySelector('#passLenght').value;

		    for (let i = 0; i < passLenght; i++) {password += arr[randomInteger(0, arr.length - 1)];}

	    	document.querySelector('#result').textContent = password;
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

			<h1>Генератор паролей</h1>

			<div class="box">
				<p>Выберите цифрой длинну желаемого пароля: <input id="passLenght" type="number" step="1" min="4" max="20" value="7" /></p>
				<p>Ваш пароль: <span id="result"></span></p>
				<a href="#" onClick="generatePassword();" id="button">Сгенерировать пароль</a>		
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