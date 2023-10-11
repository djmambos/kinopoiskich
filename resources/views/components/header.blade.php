@php use Illuminate\Support\Facades\Auth; @endphp
<header class="h-16 bg-[#7c5daf] flex items-center justify-between">
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <div class="flex justify-between items-center ml-32">
        <img src="logo.png" alt="" class="h-12">
        <h1 class="text-3xl text-white font-medium ml-5">Кинопоискич</h1>
    </div>
    <div class="auth text-base text-white font-medium mr-32">
        @if (Auth::check())
            <a href="{{ route('dashboard') }}">Профиль</a>
        @else
            <ul>
                <li>
                    <a href="{{ route('login') }}">Войти</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Зарегистрироваться</a>
                </li>
            </ul>
        @endif
    </div>
</header>
