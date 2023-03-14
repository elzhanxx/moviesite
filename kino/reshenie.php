<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="description" content="Кино мы смотрим здесь" />
	<link rel="stylesheet" href="/kino/assets/css/style.css" />
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
				
				<h1>Решение уйти</h1>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/ANFvsaeH_Nc?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>					<div class="info_film_page">
					<span class="label">рейтинг: </span><span class="value">7.4 / 10</span>
					<span class="label">год: </span><span class="value">2022</span>
					<span class="label">режиссер: </span><span class="value">Парк Чан-вук</span>
				</div>
				<hr>	
				<h2>Описание Решение уйти</h2>
				<div class="descriptions_film">
					<img width="100" src="assets/img/reshenie.png">
					Детектив, расследующий смерть мужчины в горах, в конце концов встречает и испытывает чувства к таинственной жене мертвого человека в ходе своего упорного расследования.				</div>
				<h2>Отзывы об Решение уйти</h2>

				<div class="send">
				<?php
				  $page_id = 152;
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
				    <input type="hidden" name="page_id" value="152" />
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