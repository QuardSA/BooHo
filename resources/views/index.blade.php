<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<x-link></x-link>
</head>
<body>
	<x-headerindex></x-headerindex>
	<main>
		<div class="container">
			<h1 class="mt-5">Найдите жильё для новой поездки</h1>
			<h2 class="">Ищите предложения на отели и дома</h2>
{{-- Поиск --}}
			<div class="search mx-auto mt-5"> 
				{{-- <form action="" class="d-flex">
					<div class="search-form">
						<input type="text">
					</div>
					<div class="date-form">
						<input type="date">
					</div>	
					<div class="duration-form">
						<button type="button"></button>
					</div>	
				</form> --}}
			</div>
{{-- Основной блок --}}
			<div class="info">
				<h3 class="mt-4">Популярные направления</h2>

				<div class="mt-3 d-flex gap-5">
					<div class="country position-relative">
						<img src="/img/France.webp" alt="">
						<div class="country-name fs-5 position-absolute text-white fw-bold">Франция</div>
					</div>
				</div>

				<div class="mt-3 d-flex gap-1">
					<div class="country-small">
						<div class="country-small position-relative">
							<img src="/img/France.webp" alt="">
							<div class="country-small-name position-absolute text-white fw-bold">Франция</div>
						</div>
					</div>
				</div>
				<h3 class="mt-4">Дома которые точно понравятся</h2>
				<div class="mt-3 d-flex gap-1">
					<div class="card" style="width: 20rem; height:22rem rounded-3">
						<img src="/img/appartaments.webp" class="card-img-top" style=" height:12rem" alt="">
						<div class="card-body">
						  <p class="title fs-5">Apparthotel stare Miasto<p class="location">Old town, Polish, Krakow</p></p>
						  <p class="feedback fs-6">2471 отзыв</p>
						  <p class="price fs-5 text-end">От 10000 руб.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</main>
<x-footer></x-footer>
</body>
</html>