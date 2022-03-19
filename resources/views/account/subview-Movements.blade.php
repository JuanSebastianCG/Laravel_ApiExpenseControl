<div class="card "  >
    <div class="card-body  ">

        <div class="row">
        @if($collection instanceof App\Models\Income)
            <h6 class="card-subtitle mb-2 text-muted">Ingresos</h6>
        @elseif($collection instanceof App\Models\Expense)
            <h6 class="card-subtitle mb-2 text-muted">Gastos</h6>
        @endif
            <p class="card-text">{{ $collection->value }}</p>

            <h6 class="card-subtitle mb-2 text-muted">{{ $collection->created_at->diffForHumans()}}</h6>

        </div>
    </div>
</div>
