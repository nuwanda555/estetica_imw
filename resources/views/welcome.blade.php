@extends("layouts.app2")


@section("contenido")
    <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
                    Estetica
                </h2>
                <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    Estetica es una empresa dedicada a la estetica facial.
                </p>
                <a class="btn btn-success" href="{{route('clientes.index')}}">Clientes</a>
                <a class="btn btn-success" href="{{route('proveedores.index')}}">Proveedores</a>

            </div>
        </div>
    </div>
@endsection
