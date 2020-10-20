@extends('layouts.auth')

@section('form')

<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="intro-x mt-8">
        <x-input.input type="text" label="name" id="name"
            class="intro-x login__input input input--lg border border-gray-300 block" required="true" />
        <x-input.input type="email" label="email" id="email"
            class="intro-x login__input input input--lg border border-gray-300 block" required="true" />
        <x-input.input type="password" label="password" id="password"
            class="intro-x login__input input input--lg border border-gray-300 block" required="true" />
        <x-input.input type="password" label="password confirmation" id="password"
            class="intro-x login__input input input--lg border border-gray-300 block" required="true" />
    </div>
    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
        <x-button.submit label="register" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3" />
        <x-button.button label="login" route="{{ route('login') }}"
            class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0" />
    </div>
</form>

@endsection
