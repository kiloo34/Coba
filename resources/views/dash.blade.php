@extends('layouts.myView')
@section('content')

<x-material.title opt="false" :title="$title" />
<!-- BEGIN: General Report -->
<div class="col-span-12 xxl:col-span-9 grid grid-cols-12 gap-6">
    <div class="col-span-12 mt-8">
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <x-material.info-box data-feather='server' label="Kriteria" count="6" />
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <x-material.info-box data-feather='alert-triangle' label="Jumlah Peternak" count="21" />
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <x-material.info-box data-feather='alert-triangle' label="Jumlah Post Artikel" count="2" />
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <x-material.info-box data-feather='alert-triangle' label="Alternatif" count="1" />
            </div>
        </div>
    </div>
</div>
<!-- END: General Report -->

@endsection
