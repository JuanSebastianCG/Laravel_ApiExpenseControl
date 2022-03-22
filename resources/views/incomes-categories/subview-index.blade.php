<div class="card mb-2">
    <div class="card-body">
        <div class="container-fluid">
            @if (Auth::id() === 1 || Auth::id() === 2)
                <div class="row align-items-center">
                    <div class="col-10">
                        <h5 class="card-title">{{ $incomeCategory->categoryName }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $incomeCategory->created_at}}</h6>

                    </div>

                    <div class="col-1 ">
                        <a href="{{ route('incomesCategories.edit', $incomeCategory->) }}" class = "btn btn-info" title="Editar Categoria">
                            <i class="fa-solid fa-pen-to-square" ></i>
                        </a>
                    </div>
                    <div class="col-1">
                        {!! Form::open(['route' => ['incomesCategories.destroy', $incomeCategory-> id ], 'method' => 'delete']) !!}

                            {!! Form::button('<i class="fa-solid fa-trash-can float-right"></i>', [
                                'type' => 'submit',
                                'title' => "Remover Categoria",
                                'class' => 'btn btn-danger',
                                'onclick' => "return confirm('¿Está seguro?')"
                            ]) !!}
                        {!! Form::close() !!}
                    </div>


                </div>


            @else
            <h5 class="card-title">{{ $incomeCategory->categoryName }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $incomeCategory->created_at}}</h6>

            @endif

        </div>


    </div>
</div>
