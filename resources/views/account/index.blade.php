@extends('layouts.app')

@section('content')



<div class="container">
    <!-- vista -->
    <h4 >Usuario {{ $user->name}}</h4>
    <div class="container">
    <!-- fecha -->
    <label for="start">fecha de incial:</label>
        <input type="date" id="start" name="trip-start"
        value="2018-07-22"
        min="2018-01-01" max="2018-12-31">

        <label for="start">fecha Final:</label>
        <input type="date" id="start" name="trip-start"
        value="2018-07-22"
        min="2018-01-01" max="2018-12-31">


    </div>


    <!-- drop -->
    <span>Vista</span>
    <select style="width: 200px" class="movement" id="movement">
        <option value="0" >-Ingresos y Gastos-</option>
        <option value="1">ingresos</option>
        <option value="2">gastos</option>
    </select>

    <span>Categoria</span>
    <select style="width: 200px" class="category" id="category">
        <option value="0" disabled="true" selected="true">-Todos-</option>


    </select>

    @forelse($collections as $collection)

    @include('account.subview-Movements')

    @empty
    <div class="card mb-2" >
        <div class="alert alert-info" role="alert">
            El usuario no tiene movimientos
        </div>
    </div>
    @endforelse

    <div class="mt-3">

        </div>
    </div>

    @include('account.js')


@endsection
