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
    <div class="container d-flex mt-5 flex-wrap">
		<div class="personal-settings rounded-1 d-flex flex-column border py-3 px-4 mb-3">
			<a href="/personal-data" class="text-decoration-none text-black"><img src="/img/personal-data.svg" alt="" class="me-2">Персональные данные</a>
			<hr>
			<a href="/personal-security/{{Auth::user()->id}}" class="text-decoration-none text-black"><img src="/img/personal-security.svg" alt="" class="me-2">Безопаснсть</a>
			<hr>
			<a href="/personal-booking" class="text-decoration-none text-black"><img src="/img/personal-booking.svg" alt="" class="me-2">Моя бронь</a>
			<hr>
            <a href="/personal-objects" class="text-decoration-none text-black"><img src="/img/personal-objects.svg"
                alt="" class="me-2">Мои объекты</a>
			<hr>
            <form action="{{route('delete_account',['id' => Auth::user()->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-decoration-none text-black btn btn-link px-0 py-0"><img src="/img/perosonal-delete-account.svg" alt="" class="me-2">Удалить аккаунт</button>
            </form>
			<hr>
			<a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
			<hr>
		</div>
        <div class="personal-info ms-2">
            <h2>Моя бронь</h2>
            <div class="all-personal-objects">
                @foreach ($cart as $item)

                <div class="card mb-2" style="max-width: 40rem;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="/img/appartaments.webp" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <p class="card-title fs-3 fw-bold ">{{ $item->title_object }}
                                <p class="location">{{ $item->title_object }}</p>
                                </p>
                                <p class="truncate2 card-text">{{ $item->description }}</p>
                                <p class="fw-semibold fs-4">{{ $item->apartament_object->cost }} р</p>
                                <form action="{{ route('remove.from.cart', ['id' => $item->id]) }}" method="post">
                                    @csrf
                                <button type="submit" class="btn btn-outline-danger mt-2">Отменить</button>
                            </form>


                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
