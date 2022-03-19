@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <h3 style="color: black" class="text-dark display-6 ">
                {{ $user-> name }}
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <br>

            <h4 style="color: black" class="text-dark">
                Saldo actual:
            </h4>

            <h4 style="color: black" class="text-dark ">
                $
            </h4>
        </div>

        <div class="col-9">
            <br>

            <h4 style="color: rgb(40, 148, 49)" >
                Ingresos: $
            </h4>

            <h4 style="color: rgb(179, 38, 38)" >
                Egresos: $
            </h4>

            <br><br>
        </div>

        <div class="row">
            <div class="col-2">
                <label for="start" class="h5">Fecha de inicio</label>
                <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
            </div>

            <div class="col-2">
                <label for="start" class="h5">Fecha final:</label>
                <input type="date" id="start" name="trip-start"value="2018-07-22" min="2018-01-01" max="2018-12-31">
                <br><br>
            </div>

            <div class="col-4">

            </div>

            <div class="col-2">
                <label for="orderBy" class="h5">Ordenar</label>
                <select name="orderBy" class="form-select">
                    <option value="1">Fecha de realización</option>
                    <option value="2">Categorías</option>
                </select>
            </div>

            <div class="col-2">
                <label for="orderBy" class="h5">Tipo</label>
                <select name="orderBy" class="form-select">
                    <option value="1">Todos</option>
                    <option value="2">Ingreso</option>
                    <option value="3">Egreso</option>
                </select>
            </div>

        </div>

        <div class="row">
            @forelse($collections as $collection)

                @include('account.subview-Movements')

            @empty
                <div class="alert alert-danger" role="alert">
                    El usuario no tiene movimientos
                </div>
            @endforelse
        </div>
    </div>

    <br><br><br><br><br><br>
</div>
@endsection
