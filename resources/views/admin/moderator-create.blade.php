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
    <div class="container mt-5 d-flex flex-wrap">
        <div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3">
            <a href="/admin/moderator-create" class="text-decoration-none text-black"><img src="/img/Add_moderator.svg" alt="" class="me-2">Добавить модератора</a>
            <hr>
            <a href="/admin/index" class="text-decoration-none text-black"><img src="/img/all_moderators.png" alt="" class="me-2">Список модераторов</a>
            <hr>
            <a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
            <hr>
        </div>
        <div class="personal-info ms-2">
        <div class="form mx-auto text-center" style="width:29rem; max-height:9rem">
            <form action="/add_moderator" method="POST" class="d-flex flex-column gap-3" >
                @csrf
                <h3 class="fw-bold">Добавить модератора</h3>
                <input type="text" placeholder="Имя" name="name">
                @error('name')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <input type="text" placeholder="Фамилия" name="surname">
                @error('surname')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <input type="text" placeholder="Отчество" name="patronymic">
                @error('patronymic')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <input type="email" placeholder="Введите адрес электронной почты" name="email">
                @error('email')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <input type="password" placeholder="Введите пароль" name="password">
                @error('password')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <input type="password" placeholder="Повторите пароль" name="confirm_password">
                @error('confirm_password')
                <div class="alert alert-danger" role="alert">{{$message}}</div>
                @enderror
                <button type="submit" class="text-white">Добавить модератора</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>
