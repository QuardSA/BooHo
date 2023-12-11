<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<x-link></x-link>
</head>
<body>
	<x-header></x-header>
	<div class="container d-flex mt-5 flex-wrap">
		<div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3">
			<a href="/personal-data" class="text-decoration-none text-black"><img src="/img/personal-data.svg" alt="" class="me-2">Персональные данные</a>
			<hr>
			<a href="/personal-security" class="text-decoration-none text-black"><img src="/img/personal-security.svg" alt="" class="me-2">Безопаснсть</a>
			<hr>
			<a href="/personal-booking" class="text-decoration-none text-black"><img src="/img/personal-booking.svg" alt="" class="me-2">Моя бронь</a>
			<hr>
			<a href="/personal-objects" class="text-decoration-none text-black"><img src="/img/personal-objects.svg" alt="" class="me-2">Мои объекты</a>
			<hr>
			<a href="#" class="text-decoration-none text-black"><img src="/img/perosonal-delete-account.svg" alt="" class="me-2">Удалить аккаунт</a>
			<hr>
			<a href="#" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
			<hr>
		</div>
		<div class="personal-info ms-2">
			<h2>Персональные данные</h2>
			<table class="table">
			<tbody>
			  <tr>
			    <td style="width: 10rem;">Фамилия</td>
			    <td>Смирнов</td>
			  </tr>
			  <tr>
			    <td>Имя</td>
			    <td>Алексей</td>
			  </tr>
			  <tr>
			    <td>Отчество</td>
			    <td>Андреевич</td>
			  </tr>
			  <tr>
			    <td>Почта</td>
			    <td>aldm1989@inbox.ru</td>
			  </tr>
			</tbody>
			</table>
		</div>
	</div>
	<x-footer></x-footer>
</body>
</html>