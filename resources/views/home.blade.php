@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if(auth()->user()->role === 1)
            @include('buyer.index')
            <h3 class="mt-4">Мои запросы</h3>
            @if(count($goods)  > 0)
                @include('goods.table')
            @endif

            <h3 class="mt-5 text-bg-warning">Создать запрос на товар</h3>
        @else

            @include('seller.index')
            <h3 class="mt-4">Мои товары</h3>
            @if(count($goods)  > 0)
                @include('goods.table')
            @endif

            <h3 class="mt-5 text-bg-success">Запросы от покупателей, соответсвующие моим товарам</h3>
            @if(count($matching_requests)  > 0)
                @include('goods.matching_requests')
            @endif

            <h3 class="mt-5 text-bg-warning">Создать товар</h3>
        @endif

        @include('goods.form')

    </div>
@endsection
