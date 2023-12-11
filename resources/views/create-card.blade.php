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
        <h3>Разместите своё объявление</h3>
        <div class="form-container">
            <form action="" class="d-flex ms-2 flex-column">
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
                    <input type="text" class="form-control" id="check-in" name="title_booking"
                        style="max-width: 20rem;">
                </div>
                <div class="">
                    <label for="check-out" class="form-label">Выезд</label>
                    <input type="text" class="form-control" id="check-out" name="title_booking"
                        style="max-width: 20rem;">
                </div>
                <h4 class="mt-3">Фотографии</h3>
                <div class="mb-3">
                    <label for="fileupload" class="form-label">Выберите фотографии</label>
                    <input class="form-control" type="file" id="fileuploud" multiple style="max-width: 20rem">
                </div>
                    <button type="button" class="btn btn-outline-primary m-auto">Разместить объявление</button>
            </form>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
