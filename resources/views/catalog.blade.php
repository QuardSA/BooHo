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
    <div class="container mt-5 d-flex">
        <div class="filter-settings rounded-2 d-flex flex-column border py-2">
            <form action="">
                <div class="filter-position">
                    Цена за сутки
                </div>
                <hr>
                <div class="filter-position">
                    Тип размещения
                </div>
                <hr>
                <div class="filter-position">
                    Общие удобства
                </div>
                <hr>
                <div class="filter-position">
                    Удобства в номере
                </div>
            </form>
        </div>
        <div class="container d-flex flex-column flex-wrap gap-2 ms-5">
            <div class="hotel-card border rounded-2 p-2 " >
                <div class="row">
                    <div class="col-sm-3">
                      <img src="/img/appartaments.webp" class="img-thumbnail rounded-start" alt="">
                    </div>
                    <div class="col-sm">
                        <p class="card-title fs-3 fw-bold ">Blue Gilroy Hotel<p class="location">Old town, Polish, Krakow</p></p>
                        <p class="truncate3 card-text">In the centre of Istanbul, located within a short distance of Taksim Square and Taksim Metro Station, Cihangir apart hotel offers free WiFi, air conditioning and household amenities such as a stovetop and kettle. Private parking is available on site. The apartment features 2 bedrooms, a flat-screen TV with satellite channels, an equipped kitchen with a dishwasher and a fridge, a washing machine, and 1 bathroom with a shower. Towels and bed linen are provided in the apartment.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="cost text-end me-4 fs-4">43 333 руб.</p>
                        <p class="text-end me-4"><a href="/hotelcard" class="btn btn-outline-primary">Наличие мест</a></p>
                    </div>
                  </div>
            </div>
            <div class="hotel-card border rounded-2 p-2" >
                <div class="row">
                    <div class="col-sm-3">
                      <img src="/img/appartaments.webp" class="img-thumbnail rounded-start" alt="">
                    </div>
                    <div class="col-sm">
                        <p class="card-title fs-3 fw-bold ">Blue Gilroy Hotel<p class="location">Old town, Polish, Krakow</p></p>
                        <p class="truncate3 card-text">In the centre of Istanbul, located within a short distance of Taksim Square and Taksim Metro Station, Cihangir apart hotel offers free WiFi, air conditioning and household amenities such as a stovetop and kettle. Private parking is available on site. The apartment features 2 bedrooms, a flat-screen TV with satellite channels, an equipped kitchen with a dishwasher and a fridge, a washing machine, and 1 bathroom with a shower. Towels and bed linen are provided in the apartment.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="cost text-end me-4 fs-4">43 333 руб.</p>
                        <p class="text-end me-4"><a href="/hotelcard" class="btn btn-outline-primary">Наличие мест</a></p>
                    </div>
                  </div>
            </div>
            <div class="hotel-card border rounded-2 p-2" >
                <div class="row">
                    <div class="col-sm-3">
                      <img src="/img/appartaments.webp" class="img-thumbnail rounded-start" alt="">
                    </div>
                    <div class="col-sm">
                        <p class="card-title fs-3 fw-bold ">Blue Gilroy Hotel<p class="location">Old town, Polish, Krakow</p></p>
                        <p class="truncate3 card-text">In the centre of Istanbul, located within a short distance of Taksim Square and Taksim Metro Station, Cihangir apart hotel offers free WiFi, air conditioning and household amenities such as a stovetop and kettle. Private parking is available on site. The apartment features 2 bedrooms, a flat-screen TV with satellite channels, an equipped kitchen with a dishwasher and a fridge, a washing machine, and 1 bathroom with a shower. Towels and bed linen are provided in the apartment.</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="cost text-end me-4 fs-4">43 333 руб.</p>
                        <p class="text-end me-4"><a href="/hotelcard" class="btn btn-outline-primary">Наличие мест</a></p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>
</html>