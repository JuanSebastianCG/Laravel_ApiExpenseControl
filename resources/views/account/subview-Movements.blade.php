<div class="card "  >
    <div class="card-body  ">

        <div class="row">

            <p class="card-text">{{ $expense->value }}</p>

            <h6 class="card-subtitle mb-2 text-muted">{{ $expense->created_at->diffForHumans()}}</h6>

        </div>
    </div>
</div>
