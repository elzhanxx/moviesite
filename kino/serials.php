<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="description" content="Кино мы смотрим здесь" />
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="main">
		
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href="/kino/index.php">КиноЗдесь</a></h1>
					<h2>Кино смотрим здесь</h2>
				</div>
			</div>
			
			<div class="menubar">
				
				<ul class="menu">
					<li><a href="index.php">Главная</a></li>	
					<li><a href="films.php">Фильмы</a></li>
					<li class="selected"><a href="serials.php">Сериалы</a></li>
					<li><a href="ratings.php">Рейтинг фильмов</a></li>
					<li><a href="contacts.php">Контакты</a></li>
				</ul>

			</div>

		</div>

			
		<div class="site_content">
			
			<div class="sidebar_container">
				
				<div class="sidebar">
					<h2>Поиск</h2>
					<form method="post" action="#" id="search_form" >
						<input type="search" name="search_field" placeholder="ваш запрос" />
						<input type="submit" class="btn" value="найти" />
					</form>
				</div>

				<div class="sidebar">
				<?php
           		if($_COOKIE['user']==''):
           		?>
						 <h2>Вход</h2>
						<form method="post" action="/kino/php/auth.php" id="login">
						<input type="text" name="login" placeholder="логин" />
						<input type="password" name="pass" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
							<span><a href="#">забыли пароль?</a></span> | <span><a href="/kino/registration.php">регистрация</a></span>
					</div>
					</form>
				<?php else:?>
					<img width="50px" src="assets/img/free-icon-user-2550260.png">
					<p>Привет, <?=$_COOKIE['user']?>. <br>Добро пожаловать к нам на сайт!
				<form class="exit" method="post" action="exit.php">
					<input class="btn" type="submit" value="Выйти">
				</form>
            <?php endif;?>
				</div>

				<div class="sidebar">
					<h2>Новости</h2>
					<span>04.03.2023</span>
					<p>"На западном фронте без перемен" набрал больше 150 миллионов часов просмотров на Netflix</p>
					<a href="https://thecity.m24.ru/news/7272">читать</a>
				</div>

				<div class="sidebar">
					<h2>Рейтинг фильмов</h2>
					<ul>
						<li><a href="vse.php">Всё везде и сразу</a><span class="rating_sidebar">8.1</span></li>
						<li><a href="zapad.php">На Западном фронте</a><span class="rating_sidebar">8.0</span></li>
						<li><a href="ptitsa.php">Лакричная пицца </a><span class="rating_sidebar">7.5</span></li>
						<li><a href="reshenie.php">Решение уйти</a><span class="rating_sidebar">7.4</span></li>
					</ul>
				</div>

			</div>

			<div class="content">
				
				<div class="info_film">
					<img src="assets/img/dead.png">
					<p>После зомби-апокалипсиса многие выжившие борются за выживание. В поисках безопасности и уклонения от нежити они вынуждены бороться с соперничающими группами и трудным выбором.</p>
					<div class="button"><a href="dead.php">Смотреть</a></div>
				</div>

				<div class="info_film">
					<img src="assets/img/silicon.png">
					<p>Ричард, программист, создает приложение под названием Pied Piper и пытается найти для него инвесторов. Тем временем пять других программистов изо всех сил пытаются оставить свой след в Силиконовой долине.</p>
				<div class="button"><a href="silicon.php">Смотреть</a></div>
				</div>

				<div class="info_film">
					<img src="assets/img/breakingbad.png">
					<p>Уолтер Уайт, учитель химии, обнаруживает, что у него рак, и решает заняться бизнесом по производству метамфетамина, чтобы погасить свои медицинские долги. Его приоритеты начинают меняться, когда он становится партнером Джесси.</p>
					<div class="button"><a href="breakingbad.php">Смотреть</a></div>
				</div>

				<div class="info_film">
					<img src="assets/img/xfiles.png">
					<p>Теоретик заговора Фокс Малдер и реалист Дана Скалли делают все возможное в качестве специальных агентов ФБР, чтобы расследовать и докопаться до сути необъяснимых паранормальных явлений.</p>
					<div class="button"><a href="xfiles.php">Смотреть</a></div>
				</div>

		</div>




	</div>
	<div class="footer">
		<p>
			<a href="index.php">Главная</a> |
			<a href="films.php">Фильмы</a> | 
			<a href="serials.php">Сериалы</a> |
			<a href="ratings.php">Рейтинг фильмов</a> |
			<a href="contacts.php">Контакты</a>
		</p>
		<p>Elzhan Industries 2023</p>
	</div>

	</div>
	
</body>
</html>