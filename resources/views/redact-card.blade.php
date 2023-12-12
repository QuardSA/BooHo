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
            <form id="add_card" action="create-card/add" method="POST" class="d-flex ms-2 flex-column">
                @csrf
                <div class="mb-3">
                    <label for="Title-booking" class="form-label">Название</label>
                    <input type="text" class="form-control" id="Title-booking" name="title_booking">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea class="form-control" id="description" rows="3" style="resize: none"></textarea>
                </div>
                <h4>Услуги и удобства</h4>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Завтрак</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Парковка</label>
                </div>
                <h4 class="mt-3">Условия размещения</h4>
                <div class="">
                    <label for="check-in" class="form-label">Заезд</label>
                    <input type="text" class="form-control" id="check-in" name="check-in" style="max-width: 20rem;">
                </div>
                <div class="">
                    <label for="check-out" class="form-label">Выезд</label>
                    <input type="text" class="form-control" id="check-out" name="check-out"
                        style="max-width: 20rem;">
                </div>
                <h4 class="mt-3">Укажите город и адресс</h4>
                <div class="">
                    <label for="city" class="form-label">Город</label>
                    <input type="text" class="form-control" id="city" name="city" style="max-width: 20rem;">
                </div>
                <div class="">
                    <label for="adress" class="form-label">Адресс</label>
                    <input type="text" class="form-control" id="adress" name="adress" style="max-width: 20rem;">
                </div>
                <h4 class="mt-3">Фотографии</h3>
                    <div class="mb-3">
                        <label for="fileupload" class="form-label">Выберите фотографии</label>
                        <input class="form-control" type="file" id="fileuploud" name="photo" multiple
                            style="max-width: 20rem">
                    </div>
                    <hr>
                    <div id="apartmentsContainer">
                        <div class="apparteaments">
                            <h4 class="mt-3">Добавть аппартаменты</h4>
                            <label for="title" class="form-label">Название</label>
                            <input type="text" class="form-control" id="title" name="title_appartaments[]"
                                style="max-width: 20rem;">
                            <label for="price" class="form-label">Цена</label>
                            <input type="text" class="form-control" id="price" name="price_appartaments[]"
                                style="max-width: 20rem;">
                            <div class="mb-3">
                                <label for="fileupload" class="form-label">Выберите фотографию</label>
                                <input class="form-control" type="file" id="fileupload" name="photo_apartaments[]"
                                    style="max-width: 20rem">
                            </div>
                            <label for="peopleCount" class="form-label">Количество людей</label>
                            <input type="number" class="form-control" id="peopleCount" name="count_people[]"
                                style="max-width: 20rem;">
                        </div>
                    </div>

            </form>
            <button class="btn btn-outline-primary d-block mt-3"onclick="addApartment()">Добавить
                аппартаменты</button>
            <button type="submit" form="add_card"
                class="btn btn-outline-primary m-auto my-3 align-self-left">Редактировать</button>

        </div>
    </div>
    <x-footer></x-footer>
    <script>
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
    </script>
</body>

</html>
