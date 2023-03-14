<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Фильмы</title>
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
					<li class="selected"><a href="films.php">Фильмы</a></li>
					<li><a href="serials.php">Сериалы</a></li>
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
					<img src="assets/img/vse.png">
					<h2>Всё везде и сразу</h2>
					<p>Китайская иммигрантка должна соединить разные версии себя, чтобы остановить того, кто намеревается навредить мультивселенной.</p>
					<div class="button"><a href="vse.php">Смотреть</a></div>
				</div>

				<div class="info_film">
					<img src="assets/img/zapad.png">
					<h2>На западном фронте без перемен</h2>
					<p>Германия, 1914 год. Пауль Боймер зачислен в армию, чтобы служить. Первые кадры с поля боя показывают ему ад на земле.</p>
					<div class="button"><a href="zapad.php">Смотреть</a></div>
				</div>

				<div class="info_film">
					<img src="assets/img/ptitsa.png">
					<h2>Лакричная пицца</h2>
					<p>1973 год, долина Сан-Фернандо. Алане 25, она не занята ничем и будущего не ждёт.Гэри старается стать её бойфрендом,постоянно втягивая Алану в проблемы.</p>
					<div class="button"><a href="ptitsa.php">Смотреть</a></div>
				</div>

				<div class="info_film">
					<img src="assets/img/reshenie.png">
					<h2>Решение уйти</h2>
					<p>Детектив, расследующий смерть мужчины в горах, в конце концов встречает и испытывает чувства к таинственной жене мертвого человека в ходе своего упорного расследования.</p>
					<div class="button"><a href="reshenie.php">Смотреть</a></div>
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
		<p>wh-db.com 2015</p>
	</div>

	</div>
	
</body>
</html>