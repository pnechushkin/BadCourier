<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container-fluid">
        <div class="container">
            <!-- Содержимое основной части -->
            <ul class="nav navbar-nav ">
                <!-- Ссылки -->
                <li><a href="/">Главная</a></li>
                @if(Auth::check())
                    <li><a href="/reviews">Последние</a></li>
                    <li><a href="/addreview">Добавить</a></li>
                    <li><a href="/find">Проверить</a></li>
                @endif
                    <!-- Выпадающий список -->
                    {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Раздел <span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="#">Ссылка</a></li>--}}
                    {{--<li><a href="#">Ссылка</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="#">Ссылка</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Войти</a></li>
                    <li><a href="{{ url('/register') }}">Регистрация</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выйти
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>