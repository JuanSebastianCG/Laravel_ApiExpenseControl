@extends('layouts.app')

@section('content')

<div class="container">
    <!-- vista -->
    <h4 >Usuario {{ $user->name}}</h4>
    <h4 >incomes</h4>
        @forelse($expenses as $expense)

            @include('account.subview-Movements')

        @empty
        <div class="card mb-2" >
            <div class="alert alert-info" role="alert">
                El usuario no tiene movimientos
            </div>
        </div>
        @endforelse
        <h4 >expenses</h4>

    <div class="mt-3">

    </div>
</div>




@endsection
