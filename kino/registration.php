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
					<li><a href="films.php">Фильмы</a></li>
					<li class="selected"><a href="serials.php">Сериалы</a></li>
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
			<h1>Форма регистрации</h1>
                    <form action="php/reg.php" method="post">
                        <input type="text" class="control" name="login" id="login" placeholder="Введите логин">
                        <br>
                        <input type="text" class="control" name="name" id="login" placeholder="Введите имя">
                        <br>
                        <input type="password" class="control" name="pass" placeholder="введите пароль">
                        <button class="btn-success" type="submit">Зарегистрироваться</button>
                    </form>
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