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
            <form action="{{route('delete_account',['id' => Auth::user()->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-decoration-none text-black btn btn-link px-0"><img src="/img/personal-objects.svg" alt="" class="me-2">Мои объекты</button>
            </form>
			<hr>
			<a href="#" class="text-decoration-none text-black"><img src="/img/perosonal-delete-account.svg" alt="" class="me-2">Удалить аккаунт</a>
			<hr>
			<a href="/sign_out" class="text-decoration-none text-black"><img src="/img/sign-out.svg" alt="" class="me-2">Выйти из аккаунта</a>
			<hr>
		</div>
		<div class="personal-info ms-2">
			<h2>Безопасность</h2>
			<table class="table caption-top">
				<caption>Сменить пароль</caption>
				<fo
                rm action="{{route('passsword_edit',['id'=>$info_user->id])}}" method="POST" id="Submit_Changes">
                    @csrf
					<tbody>
			  			<tr>
			  			  <td style="width: 10rem;">
			  			  	<label for="password">Новый пароль</label>
			  			  </td>
			  			  <td>
			  			  	<input type="password" name="password">
                            @error('password')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
			  			  </td>
			  			</tr>
			  			<tr>
			  			  <td style="width: 10rem;">
			  			  	<label for="password">Повторите пароль</label>
			  			  </td>
			  			  <td>
			  			  	<input type="password" name="confirm_password">
                            @error('confirm_password')
                                <div class="alert alert-danger" role="alert">{{$message}}</div>
                            @enderror
			  			  </td>
			  			</tr>
					</tbody>
				</form>
			</table>
            <button type="submit" class="btn btn-primary text-right" form="Submit_Changes">Принять изменения</button>
		</div>
	</div>
	<x-footer></x-footer>
</body>
</html>
