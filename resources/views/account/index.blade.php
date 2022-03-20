@extends('layouts.app')

@section('content')



<div class="container">

@include('layouts.subview-form-errors')
    <!-- vista -->
    <h4 >Usuario {{ $user->name}}</h4>
    <div class="container">
    <!-- campos -->

        <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <form class="d-flex" >

                    <input min="{{date('Y-m-d',$user->created_at)}}" max="{{ date('Y-m-d') }}" name="startDate" id="startDate" type="date" class="form-control" placeholder="fecha de inicio" value="{{date('Y-m-d',$user->created_at)}}"/>
                    <input min="{{date('Y-m-d',$user->created_at)}}" max="{{ date('Y-m-d') }}" name="endDate" id="endDate" type="date" class="form-control" placeholder="fecha de finalizacion" value="{{ date('Y-m-d') }}"/>

                    <select class="form-control status_id" id="movement" name="status_view">
                    <option value="0" >-Ingresos y Gastos-</option>
                    <option value="1">ingresos</option>
                    <option value="2">gastos</option>
                    </select>

                    <select class="form-control status_id" id="category" name="category">
                    <option value="0" >-Sin categoria-</option>
                    </select>
                    <button class="btn btn-outline-success" type="submit">filtrar</button>
                </form>
            </div>
        </nav>

    <!-- lista de ingresos y gastos -->
        <div id="campo">
            @forelse($collections as $collection)

            <div class="card "  >
            <div class="card-body  ">

                <div class="row">
                @if($collection instanceof App\Models\Income)
                    <h6 class="card-subtitle mb-2 text-muted">Ingresos</h6>
                    <p class="card-text">{{ $collection->income_category_id }}</p>

                @elseif($collection instanceof App\Models\Expense)
                    <h6 class="card-subtitle mb-2 text-muted">Gastos</h6>
                    <p class="card-text">{{ $collection->expense_category_id }}</p>
                @endif

                    <p class="card-text">{{ $collection->value }}</p>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $collection->created_at->diffForHumans()}}</h6>

                    </div>
                </div>
            </div>

            @empty
            <div class="card mb-2" >
                <div class="alert alert-info" role="alert">
                    El usuario no tiene movimientos
                </div>
            </div>
            @endforelse
        </div>
  <!--------------->

    </div>

    @include('account.js')


@endsection
