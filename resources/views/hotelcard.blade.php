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
    <div class="container mt-3">
        @foreach ($hotelcard as $hotel)


        <div class="img">
            <img src="/img/{{$hotel->photo}}" alt="" style="max-width: 62%">
        </div>
        <div class="info-hotel-card d-flex position-relative">
            <div class="info" style="max-width: 65%;">
                <p class="description">
                    {{$hotel->description}}
                </p>
                <h3 class="text-dark fw-semibold">Услуги и удобства</h3>
                <div class="services-amenities__body d-flex flex-wrap">
                    <section class="services-amenities__item">
                        <ul class="services-amenities__list">
                            <p class="fs-3 fw-semibold m-0">Общее</p>
                            <li class="services-amenities__list-item list-group-item fs-5 fw-medium my-2"><img
                                    src="/img/Bookmark.svg">{{$hotel->service_object->title_service}} </li>
                        </ul>
                    </section>
                </div>
                <div class="conditions mt-3">
                    <h3 class="text-dark fw-semibold">Условия размещения</h3>
                    <div class="conditions-body">
                        <h4 class="text-dark fw-semibold">Заезд</h4>
                        <p>С {{$hotel->placement_object->title_placement}}</p>
                        <h4 class="text-dark fw-semibold">Заезд</h4>
                        <p>С {{$hotel->check_in}}</p>
                        <h4 class="text-dark fw-semibold">Отъезд</h4>
                        <p>С {{$hotel->check_out}}</p>
                    </div>
                </div>
                <div class="room">
                    <h3 class="text-dark fw-semibold"> Наличие мест:</h3>
                    @foreach ($hotel_apart as $apartament)


                    <div class="room-body">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/img/{{$apartament->photo}}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title fw-semibold">{{$apartament->title_apartaments}}</h5>
                                        <p class="card-text fs-5">
                                            {{$apartament->count_people}} человека
                                        </p>
                                        <p class="card-text fs-semibold fs-4 text-end">
                                            {{$apartament->cost}} руб
                                        </p>
                                        <p class="text-end"><a href="" class="btn btn-secondary">Выбрать номер</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="main-info-hotel border ms-4 shadow p-3 mb-5 bg-body-tertiary rounded"
                style="max-height: 10rem; width:30%;">
                <p class="text-dark fw-semibold fs-5">{{$hotel->title_object}}</p>
                <p class="text-dark fw-light">{{$hotel->address}}</p>
            </div>
        </div>
        @endforeach
    </div>
    <x-footer></x-footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>
