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
    <div class="container mt-5 d-flex flex-wrap justify-content-center gap-1">
        <div class="filter-settings rounded-2 d-flex flex-column border py-2 mb-2">
            <form action="">
                <div class="filter-position d-flex flex-column gap-1">
                    Страна
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Россия</option>
                        <option value="1">ЮАР</option>
                        <option value="2">Япония</option>

                    </select>
                </div>
                <div class="filter-position d-flex flex-column gap-1">
                    Категория
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Дом</option>
                        <option value="1">Отель</option>
                    </select>
                </div>
                <hr>
                <div class="filter-position d-flex flex-column gap-1">
                    Цена за сутки
                    <input type="checkbox" class="btn-check" id="До 15 000 р" autocomplete="off">
                    <label class="btn btn-outline-primary" for="До 15 000 р">До 15 000 р</label>

                    <input type="checkbox" class="btn-check" id="15 000 - 50 000 р" autocomplete="off">
                    <label class="btn btn-outline-primary" for="15 000 - 50 000 р">15 000 - 50 000 р</label>

                    <input type="checkbox" class="btn-check" id="от 50 000р" autocomplete="off">
                    <label class="btn btn-outline-primary" for="от 50 000р">от 50 000р</label>
                </div>
                <hr>
                <div class="filter-position d-flex flex-column gap-1">
                    Тип размещения
                    <input type="checkbox" class="btn-check" id="OB" autocomplete="off">
                    <label class="btn btn-outline-primary" for="OB">OB</label>
                    <input type="checkbox" class="btn-check" id="BB" autocomplete="off">
                    <label class="btn btn-outline-primary" for="BB">BB</label>
                    <input type="checkbox" class="btn-check" id="HB" autocomplete="off">
                    <label class="btn btn-outline-primary" for="HB">HB</label>
                    <input type="checkbox" class="btn-check" id="AI" autocomplete="off">
                    <label class="btn btn-outline-primary" for="AI">AI</label>
                </div>
                <hr>
                <div class="filter-position d-flex flex-column gap-1">
                    Общие удобства
                    <input type="checkbox" class="btn-check" id="Парковка" autocomplete="off">
                    <label class="btn btn-outline-primary" for="Парковка">Парковка</label>
                    <input type="checkbox" class="btn-check" id="Ресепшен 24 часа" autocomplete="off">
                    <label class="btn btn-outline-primary" for="Ресепшен 24 часа">Ресепшен 24 часа</label>
                    <input type="checkbox" class="btn-check" id="Ресепшен 24 часа" autocomplete="off">
                    <label class="btn btn-outline-primary" for="Ресепшен 24 часа">Ресепшен 24 часа</label>
                    <input type="checkbox" class="btn-check" id="Ресепшен 24 часа" autocomplete="off">
                    <label class="btn btn-outline-primary" for="Ресепшен 24 часа">Ресепшен 24 часа</label>
                </div>
                <hr>
                <div class="button d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-primary">Применить</button>
                </div>
            </form>
        </div>
        <div class="container d-flex flex-column flex-wrap gap-2 ms-5" style="max-width: 70% !important">
            @forelse ($hotels as $hotel)
                <div class="hotel-card border rounded-2 p-2 ">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="/storage/images/hotels/{{ $hotel->photo }}" class="img-thumbnail rounded-start"
                                alt="">
                        </div>
                        <div class="col-sm">
                            <p class="card-title fs-3 fw-bold ">{{ $hotel->title_object }}
                            <p class="location">{{ $hotel->title_object }}</p>
                            </p>
                            <p class="truncate3 card-text">{{ $hotel->description }}</p>
                        </div>
                        <div class="col-sm-4">
                            <p class="cost text-end me-4 fs-4">{{ $hotel->apartament_object->cost }} руб</p>
                            <p class="text-end me-4"><a href="{{ route('hotelcard', ['id' => $hotel->id]) }}"
                                    class="btn btn-outline-primary">Наличие мест</a>
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="3">Больше нет товаров</td>
                </tr>
            @endforelse
        </div>
        {{ $hotels->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
    <x-footer></x-footer>
</body>

</html>
