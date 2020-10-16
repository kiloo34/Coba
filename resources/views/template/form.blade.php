@extends('layouts.myview')

@section('content')
<x-material.title />
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-12">
        {{-- grid grid-cols-12 gap-6 mt-5 --}}
        <div class="intro-y box">
            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                <h2 class="font-medium text-base mr-auto">
                    Input 
                </h2>
                {{-- tunggu sampe kelaar --}}
            </div>
            <div class="intro-y box p-5">
                @yield('form')
            </div>
        </div>
    </div>
</div>
@endsection