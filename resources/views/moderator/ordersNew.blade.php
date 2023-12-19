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
        <a href="/moderator/OrdersNew" class="text-decoration-none text-black"><img src="/img/Orders.svg" alt="" class="me-2">Запросы</a>
        <hr>
        <a href="/moderator/ordersDeny" class="text-decoration-none text-black"><img src="/img/Deny.svg" alt="" class="me-2">Отклонено</a>
        <hr>
        <a href="/moderator/ordersAcces" class="text-decoration-none text-black"><img src="/img/Accept.svg" alt="" class="me-2">Принято</a>
        <hr>
        <a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
        <hr>
      </div>
        <div class="personal-info ms-2">
            <h2>Все заявки</h2>
            <div class="all-personal-objects">
                @forelse ($orders as $order)
              <div class="card mb-2" style="max-width: 40rem;">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="/storage/images/hotels/{{$order->object_order->photo}}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <p class="card-title fs-3 fw-bold ">{{$order->object_order->title_object}}<p class="location">{{$order->object_order->country_object->country}}{{$order->object_order->city}}{{$order->object_order->address}}</p></p>
                      <p class="truncate2 card-text">{{$order->object_order->description}}</p>
                      <a type="button" class="btn btn-success mt-2" href="/moderator/ordersNew/{{$order->id}}/order_Success_button">Принять</a>
                      <a type="button" class="btn btn-danger mt-2" href="/moderator/ordersNew/{{$order->id}}/order_Deny_button">Отклонить</a>
                    </div>
                  </div>
                </div>
              </div>
                @empty
                <p class="text text-danger">Больше нет заявок</p>
                @endforelse
            </div>
        </div>
    </div>
</body>
</html>
