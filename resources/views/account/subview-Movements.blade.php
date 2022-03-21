<div class="mb-2">
    <div class="card">
        <div class="card-body">
            <div class="row align-center">
                <div class="col-10">
                    @if($collection instanceof App\Models\Income)
                        <h4 class="card-subtitle mb-2 text-muted">Ingresos</h6>

                            <p class="card-text">{{ $collection->income_category_id }}</p>
                    @elseif($collection instanceof App\Models\Expense)
                        <h4 class="card-subtitle mb-2 text-muted">Gastos</h6>
                            <p class="card-text">{{ $collection->expense_category_id }}</p>
                    @endif
                    <p class="card-text">Valor: ${{ $collection->value }}</p>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $collection->created_at}}</h6>
                </div>

                <div class="col-2 align-right">
                    <center>
                    @if($collection instanceof App\Models\Income)
                        @if ($collection->user_id == Auth::id())
                            {!! Form::open(['route' => ['incomes.destroy', $collection->id], 'method' => 'delete']) !!}
                                <a href="{{ route('incomes.edit', $collection->id) }}" style="color:rgb(255, 255, 255)" class="btn btn-dark">
                                    <i class="fa-solid fa-pencil "></i>
                                </a>
                                {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                    'type' => 'submit',
                                    'tittle' => 'Remover post',
                                    'class' => 'btn btn-danger float-right',
                                    'onclick' => 'return confirm("¿Está seguro de querer eliminar este post?")',
                                    'width' => '30px'
                                ]) !!}
                            {!! Form::close() !!}
                        @endif
                    @elseif($collection instanceof App\Models\Expense)
                        @if ($collection->user_id == Auth::id())
                        {!! Form::open(['route' => ['expenses.destroy', $collection->id], 'method' => 'delete']) !!}
                            <a href="{{ route('expenses.edit', $collection->id) }}" style="color:rgb(255, 255, 255)" class="btn btn-dark">
                                <i class="fa-solid fa-pencil "></i>
                            </a>
                            {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                                'type' => 'submit',
                                'tittle' => 'Remover post',
                                'class' => 'btn btn-danger float-right',
                                'onclick' => 'return confirm("¿Está seguro de querer eliminar este post?")',
                                'width' => '30px'
                            ]) !!}
                        {!! Form::close() !!}
                        @endif
                    @endif
                </center>
                </div>





            </div>
        </div>
    </div>
</div>
