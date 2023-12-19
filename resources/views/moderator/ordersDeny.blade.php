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
      <div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3" style="max-height:16.5rem;">
        <a href="/moderator/ordersNew" class="text-decoration-none text-black"><img src="/img/Orders.svg" alt="" class="me-2">Запросы</a>
        <hr>
        <a href="/moderator/ordersDeny" class="text-decoration-none text-black"><img src="/img/Deny.svg" alt="" class="me-2">Отклонено</a>
        <hr>
        <a href="/moderator/ordersAcces" class="text-decoration-none text-black"><img src="/img/Accept.svg" alt="" class="me-2">Принято</a>
        <hr>
        <a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
        <hr>
      </div>
        <div class="personal-info ms-2">
            <h2>Отклонённые заявки</h2>
            @forelse ($orders as $order)


            <table class="table table-bordered align-middle">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Объект</th>
                  <th scope="col">Статус заявки</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->object_order->title_object}}</td>
                  <td class="text-danger fw-bold">Отклонено</td>
                </tr>
              </tbody>
            </table>
            @empty
            <td>Больше нету отклонённых заявок</td>
            @endforelse
        </div>
    </div>
</body>
</html>
