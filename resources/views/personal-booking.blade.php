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
	<div class="container d-flex mt-5">
		<div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 ">
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
		<div class="personal-info ms-4">
			<h2>Моя бронь</h2>
			<div class="personal-booking-info border rounded-1 mt-2 d-flex">
				<div class="col-md-4">
					<img src="/img/appartaments.webp" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="booking-information col-md-8 mx-3">
      				<div class="card-body" style="max-width: 90%;">
        				<p class="card-title fs-3 fw-bold ">Blue Gilroy Hotel <img src="/img/star.svg" class="ms-3 me-2" alt="">4,6<p class="location">Old town, Polish, Krakow</p></p>
        				<p class="truncate card-text">In the centre of Istanbul, located within a short distance of Taksim Square and Taksim Metro Station, Cihangir apart hotel offers free WiFi, air conditioning and household amenities such as a stovetop and kettle. Private parking is available on site. The apartment features 2 bedrooms, a flat-screen TV with satellite channels, an equipped kitchen with a dishwasher and a fridge, a washing machine, and 1 bathroom with a shower. Towels and bed linen are provided in the apartment.</p>
      				</div>
      				<div class="view-information ">
      					<a type="button" class="btn btn-outline-primary mt-2">Посмотреть информацию </a> <a type="button" class="btn btn-outline-danger mt-2">Отменить бронь</a>
      				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>