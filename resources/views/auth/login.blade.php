@extends('layouts.auth')

@section('form')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="intro-x mt-8">
        <x-input.input type="email" label="email" id="email"
            class="intro-x login__input input input--lg border border-gray-300 block" required />
        <x-input.input type="password" label="password" id="password"
            class="intro-x login__input input input--lg border border-gray-300 block" required />
    </div>
    <div class="intro-x flex text-gray-700 text-xs sm:text-sm mt-4">
        <div class="">
            <input class="input border mr-2" type="checkbox" name="remember" id="remember"
                {{ old('remember') ? 'checked' : '' }}>
            <label class="cursor-pointer select-none" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
    </div>
    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
        <x-button.submit label="login" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3" />
        <x-button.button label="register" route="{{ route('register') }}"
            class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0" />
    </div>
</form>
@endsection
