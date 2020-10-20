@extends('layouts.myView')

@section('content')
<x-material.title opt="" :title="$title" :link="$link" />
<div class="grid grid-cols-12 gap-6 mt-5">
    @yield('list')
</div>
@endsection
