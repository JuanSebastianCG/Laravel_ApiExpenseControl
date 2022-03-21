@extends('layouts.app')

@section('content')
    @include('layouts.subview-form-errors')

    <div class="container">
        <div class="row">
            <div class="col-6">
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
                    $ {{ $salary }}
                </h4>
            </div>

            <div class="col-9">
                <br>

                <h4 style="color: rgb(40, 148, 49)" >
                    Ingresos: $ {{ $SumIncomes }}
                </h4>

                <h4 style="color: rgb(179, 38, 38)" >
                    Egresos: $ {{ $SumExpenses }}
                </h4>

                <br><br>
            </div>

            <form>
                <div class="row">
                    <div class="col-2">
                        <label for="start" class="h5">Fecha de Inicio:</label>
                        <input min="{{date('Y-m-d',strtotime($user->created_at))}}" max="{{ date('Y-m-d') }}" name="startDate" id="startDate" type="date" class="form-control" placeholder="fecha de inicio" value="{{date('Y-m-d',strtotime($user->created_at))}}"/>
                    </div>

                    <div class="col-2">
                        <label for="start" class="h5">Fecha final:</label>
                        <input min="{{date('Y-m-d',strtotime($user->created_at))}}" max="{{ date('Y-m-d') }}" name="endDate" id="endDate" type="date" class="form-control" placeholder="fecha de finalizacion" value="{{ date('Y-m-d') }}"/>
                        <br><br>
                    </div>

                    {{-- Tipo de movimiento --}}
                    <div class="col-2">
                        <label for="orderBy" class="h5">Tipo</label>
                        <select class="form-control status_id" id="movement" name="status_view">
                            <option value="0" >Todo</option>
                            <option value="1">Ingreso</option>
                            <option value="2">Egreso</option>
                        </select>
                    </div>

                    {{-- Categoría --}}
                    <div class="col-2">
                        <label for="category" class="h5">Categoría</label>
                        <select class="form-control status_id" id="category" name="category">
                            <option value="0" >-Sin categoria-</option>
                        </select>
                    </div>

                    <div class="col-2 ">
                        <br>
                        <button class="btn" type="submit">
                            <i class="fa-2x fa-solid fa-magnifying-glass" style="color:rgb(47, 48, 47)"></i>
                        </button>
                    </div>
                </div>
            </form>

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
    @include('account.js')
@endsection

