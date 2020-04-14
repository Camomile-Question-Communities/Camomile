<?php
include 'conf.php';
 ?>
<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?=$SITE_NAME?></title>
</head>
<body>

<?php
?>
	<div class="container">
		<!-- Content here -->
		<div class="row align-items-end">
			<div class="col">
				<h1><img src="favicon.ico" height="64"><?=$SITE_NAME?></h1>
			</div>
			<div class="col col-lg-4">
				<button type="button" class="btn btn-primary btn-md">Войти</button>
				<button type="button" class="btn btn-secondary btn-md">Подписаться</button>
				<button type="button" class="btn btn-success">Задать вопрос</button>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" href="#">Новые</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Охотник За Наградой</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Старые</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Случайные</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Поиск...</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Мои Избранные</a>
					</li>
				</ul>
			</div>
			
		</div>
		<div class="row min-vh-100">
			<div class="col col-lg-8">
			  Body...
			</div>
			<div class="col col-lg-4">
				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						<h1 class="display-4">Реклама</h1>
						<p class="lead">Этот блок содержит рекламу РСЯ. Пожалуйста настройте его.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
			  
			</div>
		</div>
		<div class="row justify-content-end">
			<div class="col-4">
			  <?=$LANG_POWERED_BY?> <img src="favicon.ico" height="16">Camomile
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<html>