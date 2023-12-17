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
    <main>
        <div class="container">
            <h1 class="mt-5">Найдите жильё для новой поездки</h1>
            <h2 class="">Ищите предложения на отели и дома</h2>
            {{-- Поиск --}}
            @php
                $curentDate = date('Y-m-d');
            @endphp
            <div class="search mx-auto mt-5 d-flex justify-content-center">
                <form action=""
                    class="search-form d-flex flex-wrap align-items-center justify-content-center gap-1 mx-1">
                    <div class="search-for">
                        <input type="text" placeholder="Город">
                    </div>
                    <div class="date-form">
                        <input type="date" min="{{ $curentDate }}">
                    </div>
                    <div class="search-form">
                        <input type="text" placeholder="Количество людей">
                    </div>
                    <button type="button" class="btn btn-primary py-1 my-1 px-2 fs-3">Найти</button>
                </form>
            </div>
            {{-- Основной блок --}}
            <div class="info ">
                <h3 class="mt-4">Популярные направления</h3>
                <div class="test mt-3 d-flex gap-2 flex-wrap justify-content-center">
                    @foreach ($countries as $country)
                        <div class="country position-relative">
                            <a href="/catalog">
                                <img src="/img/{{ $country->Photo }}" alt="">
                                <div class="country-name fs-5 position-absolute text-white fw-bold">
                                    {{ $country->Title_countries }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <h3 class="mt-4">Дома которые точно понравятся</h3>
                    <div class="mt-3 d-flex gap-4 flex-wrap justify-content-center">
                        @foreach ($objects as $object)
                            <div class="card shadow p-3  bg-body rounded" style="width: 18rem; height:22rem">
                                <a href="/hotelcard" class="text-decoration-none text-black">
                                    <img src="/img/" class="card-img-top" style=" height:12rem"
                                        alt="">
                                    <div class="card-body">
                                        <p class="title fs-5 ">{{$object->Title_object}}
                                        <p class="location">{{$object->country_object->Title_countries}},{{$object->Address}}</p>
                                        </p>
                                        <p class="price fs-5 text-end">От 10000 руб.</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
            </div>

        </div>
    </main>
    <x-footer></x-footer>
</body>

</html>
