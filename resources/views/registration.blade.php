<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <x-link></x-link>
</head>
<body>
    <x-header></x-header>
    <div class="container mt-5">
        <div class="form mx-auto text-center">        
            <form action="" class="d-flex flex-column gap-3">
                @csrf
                <h3 class="fw-bold">Регистрация</h3>
                <input type="text" placeholder="Введите своё Имя" name="Name">
                <input type="text" placeholder="Введите свою Фамилию" name="Surname">
                <input type="text" placeholder="Введите свою Отчество" name="Patronymic">
                <input type="email" placeholder="Введите свой адрес электронной почты" name="Email">
                <input type="password" placeholder="Введите пароль" name="Password">
                <input type="password" placeholder="Подтверждение пароля" name="Confirm_Password">
                <button type="submit" class="text-white">Зарегистрироваться</button>
            </form>
            <hr>
            <p>Входя в аккаунт или создавая новый, вы соглашаетесь с нашими</p>
            <p><a href="">Правилами и условиями</a> и <a href="">Положением о конфиденциальности</a></p>
        </div>
    </div>
</body>
</html>