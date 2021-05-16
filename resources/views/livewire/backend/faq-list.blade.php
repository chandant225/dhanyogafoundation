<x-box class="border-0 rounded shadow-sm">
    <div class="mb-3">
        @if($sortMode)
        <button wire:click.prevsent="$set('sortMode', false)" class="btn btn-primary">Done</button>
        @else
        <button wire:click.prevsent="$set('sortMode', true)" class="btn btn-primary">Arrange Order</button>
        @endif
    </div>
    @if ($sortMode)
    <div wire:sortable="updateFaqPosition">
        @forelse($faqs as $faq)
        <div class="card" wire:sortable.item="{{ $faq->id }}" wire:key="faq-{{ $faq->id }}">
            <div class="card-body d-flex">
                <button wire:sortable.handle type="button" class="btn btn-link"><i class="fas fa-arrows-alt"></i></button>
                <div class="ml-4 align-self-center">
                    {{ $faq->question }}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div id="accordion">
        @forelse($faqs as $faq)
        <div class="card">
            <div class="card-header" id="faq-heading-{{ $faq->id }}">
                <h5 class="mb-0">
                    <button class="btn btn-link @if($loop->iteration != '1') collapsed @endif" data-toggle="collapse" data-target="#faq-{{ $faq->id }}" aria-controls="faq-{{ $faq->id }}" @if($loop->iteration == 1) aria-expanded="true" @else aria-expanded="false" @endif>
                        {{ $faq->question }}
                    </button>
                </h5>
            </div>
            <div id="faq-{{ $faq->id }}" class="collapse @if($loop->iteration == 1) show @endif" aria-labelledby="faq-heading-{{ $faq->id }}" data-parent="#accordion">
                <div class="card-body">
                    <p>
                        {{ $faq->answer }}
                    </p>
                    <div class="d-flex">
                        <a class="btn btn-sm btn-success mr-2" href="{{ route('backend.faqs.edit', $faq) }}">Edit</a>
                        <form action="{{ route('backend.faqs.destroy', $faq) }}" onsubmit="return confirm('Are you sure to delete? This action is irreversible.')" method="POST" class="form-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger" href="{{ route('backend.faqs.edit', $faq) }}">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h2 class="h3-responsive text-center font-italic">No items found</h2>
        @endforelse
    </div>
    @endif

</x-box>
