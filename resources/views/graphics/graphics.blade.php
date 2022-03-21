@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <h3 style="color: black" class="text-dark display-4 ">
                Gráficas de ingresos y egresos.
            </h3>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <h3 style="color: black" class="text-dark display-6 text-center">
                    Ingresos
                </h3>
                <canvas id="incomeDiv" width="200" height="200"></canvas>
            </div>

            <div class="col-6">
                <h3 style="color: black" class="text-dark display-6 text-center">
                    Egresos
                </h3>
                <canvas id="expenseDiv" width="200" height="200"></canvas>
            </div>
        </div>
    </div>


    @include('graphics.graphicsJs')
@endsection

