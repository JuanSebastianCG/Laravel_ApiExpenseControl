<div class="mb-2">
    <div class="card">
        <div class="card-body">
            <div class="row">
            @if($collection instanceof App\Models\Income)
                <h4 class="card-subtitle mb-2 text-muted">Ingresos</h6>
            @elseif($collection instanceof App\Models\Expense)
                <h4 class="card-subtitle mb-2 text-muted">Gastos</h6>
            @endif
                {{-- <p class="card-text">{{ $collection->name}}</p> --}}
                <p class="card-text">Valor: ${{ $collection->value }}</p>
                <h6 class="card-subtitle mb-2 text-muted">{{ $collection->created_at}}</h6>
            </div>
        </div>
    </div>
</div>
