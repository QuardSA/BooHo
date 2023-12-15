<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #fff;">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/LOGO.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @guest
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/catalog">Каталог</a>
                    </li>
                </ul>
                <div class="buttoms_auth_reg">
                    <a href="/registration" class="">Регистрация</a>
                    <a href="/authorization" class="ms-2">Авторизация</a>
                </div>
                @endguest
                @auth
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/catalog">Каталог</a>
                    </li>
                </ul>
                <div class="nav-item dropdown">
                    <button class="nav-link" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="icon-excel"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/personal-data">Настройки</a></li>
                        
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/sign_out">Выйти из аккаунта</a></li>
                    </ul>
                </div>
                <?php
                if(auth()->user()->Role === 1)
                { ?>
                    <li><a class="dropdown-item" href="/admin">Админ</a></li>
                <?php }   
                ?> 
                @endauth

            </div>
        </div>
    </nav>
</body>
