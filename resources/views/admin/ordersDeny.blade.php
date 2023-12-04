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
    <div class="container mt-5 d-flex">
      <div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 ">
        <a href="/admin/ordersNew" class="text-decoration-none text-black"><img src="/img/Orders.svg" alt="" class="me-2">Запросы</a>
        <hr>
        <a href="/admin/ordersDeny" class="text-decoration-none text-black"><img src="/img/Deny.svg" alt="" class="me-2">Отклонено</a>
        <hr>
        <a href="/admin/ordersAcces" class="text-decoration-none text-black"><img src="/img/Accept.svg" alt="" class="me-2">Принято</a>
        <hr>
        <a href="/admin/moderator-create" class="text-decoration-none text-black"><img src="/img/Add_moderator.svg" alt="" class="me-2">Добавить модератора</a>
        <hr>
        <a href="/admin" class="text-decoration-none text-black"><img src="/img/all_moderators.png" alt="" class="me-2">Список модераторов</a>
        <hr>
        <a href="#" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
        <hr>
      </div>
        <div class="personal-info ms-4">
            <h2>Отклонённые заявки</h2>
            <table class="table table-bordered align-middle">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Фамлия</th>
                  <th scope="col">e-mail</th>
                  <th scope="col">Объект</th>
                  <th scope="col">Статус заявки</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Иван</td>
                  <td>Иванов</td>
                  <td>alexwd@mail.ru</td>
                  <td><a href="" class="text-decoration-none">Blue Gilroy Hotel</a></td>
                  <td class="text-danger fw-bold">Отклонено</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</body>
</html>