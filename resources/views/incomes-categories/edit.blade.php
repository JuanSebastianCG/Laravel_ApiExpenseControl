@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.subview-form-errors')
        <div class="row">
            <div class="col s8">
                <br><br><br><br><br>

                <div class="row text-center">
                    <h3 style="color: black" class="text-dark display-4 ">
                        Editar una
                    </h3>
                    <h3 style="color: black" class="text-dark display-4 ">
                        categoría de ingresos.
                    </h3>
                </div>

                <br>

                {!! Form::model($incomeCategory, ['method' => 'PUT', 'route' => ['incomesCategories.update' , $incomeCategory-> id ]]) !!}

                    @include('incomes-categories.subview-category-fields')

                    <div class="container">
                        <center>
                            <button type="submit" class="btn btn-success btn-lg">   Editar   </button>
                        </center>
                    </div>

                {!! Form::close() !!}

            </div>

            <div class="col s4 text-center">
                <br><br><br>
                <img src="https://cdn-icons-png.flaticon.com/512/2273/2273264.png" class="img-fluid rounded" alt="..." width="400px" height="200px">
            </div>
        </div>

        <br><br><br><br><br><br><br><br>
    </div>
@endsection
