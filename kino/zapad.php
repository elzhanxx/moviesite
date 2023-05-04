<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="description" content="Кино мы смотрим здесь" />
	<link rel="stylesheet" href="assets/css/style1.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="main">
		
		<div class="header">
		<div class="logotype">
					<img src="logotype.png" alt="logo">
				</div>
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
					<li><a href="drop.php">Выгрузка</a></li>
				</ul>

			</div>

		</div>

			
		<div class="site_content">
			
			<div class="sidebar_container">
				
				<div class="sidebar">
					<h2>Поиск</h2>
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
						 <h2>Вход</h2>
						<form method="post" action="/kino/php/auth.php" id="login">
						<input type="text" name="login" placeholder="логин" />
						<input type="password" name="pass" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
						<span><a href="/kino/registration.php">регистрация</a></span>
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
				
				<h1>На западном фронте без перемен</h1>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/NUT9jl7lg3A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>				<div class="info_film_page">
					<span class="label">рейтинг: </span><span class="value">8.0 / 10</span>
					<span class="label">год: </span><span class="value">2022</span>
					<span class="label">режиссер: </span><span class="value">Эдвард Бергер</span>
				</div>
				<hr>	
				<h2>Описание На западном фронте без перемен</h2>
				<div class="descriptions_film">
					<img width="100" src="assets/img/zapad.png">
					Война вспыхивает в Германии в 1914 году. Пауль Боймер и его одноклассники быстро зачисляются в армию, чтобы служить своей родине. Как только они призваны, первые кадры с поля боя показывают им реальность войны.
				</div>
				<h2>Отзывы об На западном фронте без перемен</h2>

				<div class="reviews">
					<div class="review_name">Raya_t</div><div class="review_text">Фильм обязателен к просмотру. Особенно сейчас. Особенно молодым парням.</div>
				</div>

				<div class="reviews">
					<div class="review_name">Harizmaa</div><div background-color="transparent" class="review_text">Фильм шикарный. Давно я такого не смотрел 10/10</div>
				</div>
				<div class="send">
				<?php
				  $page_id = 151;
				  $mysqli = new mysqli("localhost", "root", "", "registration");
				  $result_set = $mysqli->query("SELECT * FROM `comments` WHERE `page_id`='$page_id'"); 
				  while ($row = $result_set->fetch_assoc()) {
					print_r('<div class="reviews">');
					print_r('<div class="review_name">');
					print_r($row["name"]);					
					print_r('</div>');
					print_r('<div class="review_text">');
					print_r($row["text_comment"]);
					print_r('</div>');
					print_r('</div>');
				    echo "<br/>";
				  }
				?>	
				<form name="comment" action="/kino/php/comment.php" method="post">
				  <p>Имя:
				    <input type="text" name="name" />
				  </p>
				  <p>Комментарий:
				    <br/>
				    <textarea name="text_comment" cols="300" rows="500"></textarea>
				    <input type="hidden" name="page_id" value="151" />
				    <input type="submit" value="Отправить" />
				  </p>
				</form>
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