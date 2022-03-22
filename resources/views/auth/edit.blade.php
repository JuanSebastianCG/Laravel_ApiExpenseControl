@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center>
                        {{ __('Editar Usuario') }}
                    </center>
                </div>

                <div class="card-body">
                    {{-- {!! Form::open(['route' => 'expenses.store', 'method'=>'post']) !!} --}}
                    {!! Form::model($user, ['method' => 'PUT', 'route' => ['account.update', $user -> id]]) !!}
                    {{-- <form method="PUT" action="{{ route('account.update') }}"> --}}
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user-> name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo eletrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user-> email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-3 offset-md-4">
                                <center>
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Confirmar cambios') }}
                                    </button>
                                </center>
                            </div>

                    {{-- </form> --}}
                    {!! Form::close() !!}

                    {!! Form::open(['route' => ['account.destroy', $user->id], 'method' => 'delete']) !!}

                        <div class="col-md-8 offset-md-4">
                            <center>
                                <button type="warning" class="btn btn-danger">
                                    {{ __('Eliminar Perfil') }}
                                </button>
                            </center>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
