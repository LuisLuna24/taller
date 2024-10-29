<div>
    <header class="bg-white dark:bg-gray-800 fixed w-full">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 flex justify-between items-center py-4">
            <div>
                <a href="/">Logo</a>
            </div>
            <div>
                @if (Auth::check())
                    <a href="{{ route('dashboard') }}">Panel</a>
                @else
                    <div class="flex gap-5">
                        <a class=" bg-amber-600 px-3 py-2 rounded-md hover:bg-amber-500 transition duration-300 ease-in-out" href="{{ route('login') }}">Login</a>
                        <a class=" bg-amber-600 px-3 py-2 rounded-md hover:bg-amber-500 transition duration-300 ease-in-out" href="{{ route('register') }}">Register</a>
                    </div>
                @endif
            </div>
        </div>
    </header>
</div>
