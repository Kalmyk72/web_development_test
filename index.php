<!doctype html>
<html>

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<link  href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="script.js"></script>
<div>
<header id = "top">
<a href="/"><img src="" alt="logo"></a> <div id="phone"> 8 800 100 5005<br>+7 (3452)522 000 </div>
</header>
</div>
<div class="menu">
<nav>
<ul>
<li><a href = "">Кредитные карты</a></li>
<li><a href = "">Вклады</a></li>
<li><a href = "">Дебетовая карта</a></li>
<li><a href = "">Страхование</a></li>
<li><a href = "">Друзья</a></li>
<li><a href = "">Интернет-банк</a></li>
</ul>
</nav>
</div>

<div class="brcr">
<ul >
 <li><a href="#">Главная</a></li>
 <li><a href="#">Вклады</a></li>
 <li class="active">Калькулятор</li>
</ul>
</div>
<br>
<br>
<br>
<br>

<header id = "mainHead">Калькулятор</header>
<br>
<br>
<br>
<form name ="main">
<div class = "Calc_menu"form="main">

<label for ="Дата оформления вклада">Дата оформления вклада</label><input type ="text" name="data" form="main" id ="datepicker"><br>
<label>Сумма вклада</label><input type = "text" id="summ" form="main" min="1000" max="3000000"> <input type="range" id = "slider" min="1000" max="3000000" form="main"><br>
<label>Срок вклада</label><select form="main">
<option selected value ="s1">1 год</option>
<option value = "s2">2 года</option>
<option value = "s3">3 года</option>
<option value = "s4">4 года</option>
<option value = "s5">5 лет</option>
</select><br>
<label>Пополнение вклада</label><input type="radio" checked> Нет<input type="radio">Да<br>
<label>Сумма пополнения вклада</label><input type = "text" id="summadd"form="main" min="1000" max="3000000"> <input type="range" id = "slider" min="1000" max="3000000"form="main">
<br>
<button form="main" id="submit">Рассчитать</button> <label id="summn"> </label>
</div>
</form>

<div class = "foot_menu">
<footer>
<nav>
<ul>
<li><a href = "">Кредитные карты</a></li>
<li><a href = "">Вклады</a></li>
<li><a href = "">Дебетовая карта</a></li>
<li><a href = "">Страхование</a></li>
<li><a href = "">Друзья</a></li>
<li><a href = "">Интернет-банк</a></li>
</ul>
</nav>
</footer>
</div>

</body>

</html>
