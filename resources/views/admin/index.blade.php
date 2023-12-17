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
    <div class="container mt-5 d-flex flex-wrap ">
      <div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3" style="max-height: 13rem">
        <a href="/admin/moderator-create" class="text-decoration-none text-black"><img src="/img/Add_moderator.svg" alt="" class="me-2">Добавить модератора</a>
        <hr>
        <a href="/admin/index" class="text-decoration-none text-black"><img src="/img/all_moderators.png" alt="" class="me-2">Список модераторов</a>
        <hr>
        <a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
        <hr>
      </div>
        <div class="personal-info ms-2">
            <h2>Все модераторы</h2>
            <table class="table table-bordered align-middle">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Имя</th>
                  <th scope="col">Фамлия</th>
                  <th scope="col">Отчество</th>
                  <th scope="col">e-mail</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @forelse ($moderators as $moderator)
                <tr>
                  <td>{{$moderator ->id}}</td>
                  <td>{{$moderator ->name}}</td>
                  <td>{{$moderator ->surname}}</td>
                  <td>{{$moderator ->patronymic}}</td>
                  <td>{{$moderator ->email}}</td>
                  <td class="fw-bold "><a href="/admin/index/{{$moderator ->id}}/moderator-edit" class="text-success text-decoration-none">Редактировать</a></td>

                  <form action="{{route('delete_moder',['id' => $moderator->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                <td class=""><button type="submit" class="btn btn-danger">Удалить</button></td>

                </form>
                </tr>
                @empty
                <tr>
                    <td colspan="3">There are no users.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
            {{ $moderators->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</body>
</html>
