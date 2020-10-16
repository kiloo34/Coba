@extends('layouts.myview')

@section('content')
<x-material.title />
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
        @yield('intro')
    </div>

    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table id="dt" class="table table-report -mt-2">
            @yield('table')
        </table>
    </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/DataTables/css/dataTables.bootstrap4.css') }}">
@endpush

@push('js')
    <script src="{{ asset('plugins/DataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/DataTables/js/dataTables.bootstrap4.min.js') }}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(function() {
            $('#dt').DataTable({});
        });
    </script>
@endpush

@prepend('js')
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
@endprepend