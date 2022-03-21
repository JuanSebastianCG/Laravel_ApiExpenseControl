@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Categorias de Ingresos</h1>
@forelse ($incomesCategories as $incomeCategory)
    @include('incomes-categories.subview-index')
@empty
    <div class="alert alert-info" role="alert">
        No hay categorias de Ingresos
    </div>
@endforelse


</div>

@endsection
