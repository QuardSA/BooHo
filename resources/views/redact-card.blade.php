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
        <h3>Редактируйте своё объявление</h3>
        <div class="form-container">
            <form id="add_card" enctype="multipart/form-data"
                action="/editCards/{{ $object->id }}?apart={{ $object->apartament_object->id }}" method="POST"
                class="d-flex ms-2 flex-column">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="Title-booking" class="form-label">Название</label>
                    <input type="text" class="form-control" id="Title-booking" name="title_object"
                        value="{{ $object->title_object }}">
                    @error('title_object')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" rows="3" style="resize: none" name="description">{{ $object->description }}</textarea>
                    @error('description')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title_categories }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <h4>Услуги и удобства</h4>
                <div class="f">
                    <select class="form-select" aria-label="Default select example" name="service">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title_service }}</option>
                        @endforeach
                    </select>
                    @error('service')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <h4 class="mt-3">Условия размещения</h4>
                <div class="">
                    <label for="check-in" class="form-label">Заезд</label>
                    <input type="time" class="form-control" id="check-in" name="check_in" style="max-width: 20rem;"
                        value="{{ $object->check_in }}">
                    @error('check_in')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="check-out" class="form-label">Выезд</label>
                    <input type="time" class="form-control" id="check-out" name="check_out" style="max-width: 20rem;"
                        value="{{ $object->check_out }}">
                    @error('check_out')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="Placement" class="form-label">Тип размещения</label>
                    <select class="form-select" aria-label="Default select example" name="placement"
                        style="max-width:20rem">
                        @foreach ($placements as $placement)
                            <option value="{{ $placement->id }}">{{ $placement->title_placement }}</option>
                        @endforeach
                    </select>
                    @error('title_placement')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <h4 class="mt-3">Укажите город, страну и адресс</h4>
                <div class="">
                    <label for="Country" class="form-label">Страна</label>
                    <select class="form-select" aria-label="Default select example" name="country"
                        style="max-width:20rem">
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->title_countries }}</option>
                        @endforeach
                    </select>
                    @error('country')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="city" class="form-label">Город</label>
                    <input type="text" class="form-control" id="city" name="city" style="max-width: 20rem;"
                        value="{{ $object->city }}">
                    @error('city')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="">
                    <label for="adress" class="form-label">Адресс</label>
                    <input type="text" class="form-control" id="adress" name="address"
                        style="max-width: 20rem;" value="{{ $object->address }}">
                    @error('address')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <h4 class="mt-3">Фотографии</h4>
                <div class="mb-3">
                    <label for="fileupload" class="form-label">Выберите фотографию</label>
                    <input class="form-control" type="file" id="fileuploud" name="photo_hotel"
                        style="max-width: 20rem">
                    @error('photo')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <hr>
                <div id="apartmentsContainer">
                    <div class="apparteaments">
                        <h4 class="mt-3">Редактировать аппартаменты</h4>
                        <label for="title" class="form-label">Название</label>
                        <input type="text" class="form-control" id="title" name="title_apartaments"
                            value="{{ $object->apartament_object->title_apartaments }}" style="max-width: 20rem;">
                        @error('title_apartaments')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" class="form-control" id="price" name="cost"
                            value="{{ $object->apartament_object->cost }}" style="max-width: 20rem;">
                        @error('cost')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                        <div class="mb-3">
                            <label for="fileupload" class="form-label">Выберите фотографию</label>
                            <input class="form-control" type="file" id="fileupload" name="photo_apart"
                                style="max-width: 20rem">
                            @error('photo')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="peopleCount" class="form-label">Количество людей</label>
                        <input type="number" class="form-control" id="peopleCount" name="count_people"
                            value="{{ $object->apartament_object->count_people }}" style="max-width: 20rem;">
                        @error('count_people')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </form>
            {{-- <button class="btn btn-outline-primary d-block mt-3"onclick="addApartment()">Добавить
                аппартаменты</button> --}}
            <button type="submit" form="add_card"
                class="btn btn-outline-primary m-auto my-3 align-self-left">Редактировать</button>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible mt-3">
                    <div class="alert-text">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <x-footer></x-footer>
    {{-- <script>
        function addApartment() {
            // Находим контейнер, в который будем добавлять новые аппартаменты
            var container = document.getElementById('apartmentsContainer');

            // Создаем новый блок аппартаментов
            var newApartment = document.createElement('div');
            newApartment.className = 'apparteaments';

            // Копируем HTML-код из первого блока аппартаментов
            newApartment.innerHTML = container.querySelector('.apparteaments').innerHTML;

            // Добавляем новый блок аппартаментов в контейнер
            container.appendChild(newApartment);
        }
    </script> --}}
</body>

</html>
