<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>КиноЗдесь</title>
	<meta name="description" content="Кино мы смотрим здесь" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style1.css">
	<script src="script.js"></script>
	<script src="mylibrary.js"></script>
</head>
<body>
<div class="preloader">
        <div class="preloader-text">Загрузка...</div>
    </div>
	<div class="main">				

		<div class="header">		
				<div class="logotype">
					<img src="logotype.png" alt="logo">
				</div>
			<div class="logo">

				<div class="logo_text">
					<h1 data-tr="header"><a href="/kino/index.php"></a></h1>
					<h2 data-tr="logo"></h2>
				</div>

			</div>
			
			<div class="menubar">
				
				<ul class="menu">
					<li class="selected"><a data-tr="main" href="#"></a></li>	
					<li><a data-tr="films" href="films.php"></a></li>
					<li><a  data-tr="serials" href="serials.php"></a></li>
					<li><a data-tr="ratings" href="ratings.php"></a></li>
					<li><a data-tr="contacts" href="contacts.php"></a></li>
					<li><a data-tr="drop" href="drop.php"></a></li>
				</ul>

			</div>

		</div>

			
		<div class="site_content">
			<div class="sidebar_container">
				<div class="sidebar">
					<h2 data-tr="search"></h2>	
					<form method="post" action="php/search.php" id="search_form" >
						<input type="search" name="search_field" placeholder="ваш запрос" />
						<input type="submit" class="btn" value="найти" />
					</form>
				</div>

				<div class="sidebar">				
				<?php
				error_reporting(0);
				ini_set('display_errors', 0);
           		if($_COOKIE['user']==''):
           		?>
						 <h2 data-tr="enter"></h2>
						<form method="post" action="/kino/php/auth.php" id="login">
						<input type="text" name="login" placeholder="логин" />
						<input type="password" name="pass" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
						<span><a data-tr="registration" href="/kino/registration.php">регистрация</a></span>
					</div>
					</form>
				<?php else:?>
						<img width="50px" src="assets/img/free-icon-user-2550260.png">
					
                <p>Привет, <?=$_COOKIE['user']?>. <br><p>Добро пожаловать к нам на сайт!
				<form class="exit" method="post" action="exit.php">
					<input class="btn" type="submit" value="Выйти">
				</form>
            <?php endif;?>
		</div>

				<div class="sidebar">
				<h2 data-tr="news">Новости</h2>
					<span>04.03.2023</span>
					<p data-tr="new">"На западном фронте без перемен" набрал больше 150 миллионов часов просмотров на Netflix</p>
					<a data-tr="read" href="https://thecity.m24.ru/news/7272">читать</a>
				</div>

				<div class="sidebar">
					<h2 data-tr="ratings">Рейтинг фильмов</h2>
					<ul>
					<li><a data-tr="vse" href="vse.php">Всё везде и сразу</a><span class="rating_sidebar">8.1</span></li>
						<li><a data-tr="zapad" href="zapad.php"></a><span class="rating_sidebar">8.0</span></li>
						<li><a data-tr="ptitsa" href="ptitsa.php"></a><span class="rating_sidebar">7.5</span></li>
						<li><a data-tr="reshenie" href="reshenie.php"></a><span class="rating_sidebar">7.4</span></li>
					</ul>
				</div>

			</div>
			<div class="content">
			<button id="ru">RU</button>
			<button id="en">ENG</button>
			<button id="kk">KAZ</button>
				<h1 data-tr="films">Фильмы</h1>

				<div class="films_block">
					<a href="vse.php"><img class="animate" src="assets/img/vse.png"></a>
					<a href="zapad.php"><img class="animate" src="assets/img/zapad.png"></a>
					<a href="ptitsa.php"><img class="animate" src="assets/img/ptitsa.png"></a>
					<a href="reshenie.php"><img class="animate" src="assets/img/reshenie.png"></a>
					<p data-tr="welcome">Лучшие фильмы на нашем сайте!</p>
				</div>

				<h1 data-tr="serials">Сериалы</h1>

				<div class="films_block">
					
					<a href="dead.php"><img class="animate" src="assets/img/dead.png"></a>
					<a href="silicon.php"><img class="animate"src="assets/img/silicon.png"></a>
					<a href="breakingbad.php"><img class="animate" src="assets/img/breakingbad.png"></a>
					<a href="xfiles.php"><img class="animate" src="assets/img/xfiles.png"></a>
					<p data-tr="atmosphere">Обожаемые сериалы 21 века!</p>
				</div>
			</div>
		</div>
	<footer><div class="footer">
		<p>
			<a data-tr="main" href="index.php">Главная</a> |
			<a data-tr="films" href="films.php">Фильмы</a> | 
			<a data-tr="serials" href="serials.php">Сериалы</a> |
			<a data-tr="ratings" href="ratings.php">Рейтинг фильмов</a> |
			<a data-tr="contacts" href="contacts.php">Контакты</a>
		</p>
		<p>Elzhan Industries 2023</p>
	</div>
</footer>
	</div>
	<script src="language.js"></script>

</body>
</html>