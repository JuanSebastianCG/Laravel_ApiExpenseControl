@extends('layouts.app')

@section('content')
    <div class="container">

    <div class="row col-6">
        <canvas id="incomeDiv" width="400" height="400"></canvas>
        <canvas id="expenseDiv" width="400" height="400"></canvas>
    </div>



    </div>
    @include('graphics.graphicsJs')
@endsection

