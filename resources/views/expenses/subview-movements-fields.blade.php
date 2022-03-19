<div class="container">
    <div class="mb-3">
        <label for="value" class="h5">Valor del movimiento.</label>
        {!! Form::number('value', null, ['class' => "form-control", 'rows' => 3]) !!}
    </div>

    <div class="mb-3">
        <label for="expense_category_id" class="h5">Categoría.</label>
        <select name="expense_category_id" class="form-select">
            @forelse ($categories as $category)
                <option value="{{ $category -> id }}">{{ $category -> categoryName }}</option>
            @empty
                <option>No hay categorías</option>
            @endforelse
        </select>
    </div>
    
</div>
