<div>
    <div class="relative">
        <input  type="text" class="form-control"
            placeholder="Search..." wire:model="query" wire:click="queryClick" wire:keydown.escape="reset1"
            wire:keydown.arrow-up="decrementHighlight" wire:keydown.arrow-down="incrementHighlight"
            wire:keydown.enter="selectContact" {{$disabled}} />
        <br>
        <div wire:loading class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group"
            style="position: absolute">
            <div class="list-item">Searching...</div>
        </div>

        {{-- @if(!empty($query))
        <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div> --}}

        <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group" style="position: absolute; z-index: 9999;">
            @if(!empty($contacts))
            <button style="min-width: 200px; text-align: right;"
                    wire:click.prevent="reset1"
                    class="pl-1 list-item">
                    X
                </button>
            @foreach($contacts as $i => $contact)
            <button style="text-align: left;" wire:click="setData({{$contact['id'] }})"
                class="list-item btn {{ $highlightIndex === $i ? 'highlight' : '' }}">
                {{ $contact[$table_search_column] }} {{ $contact[$table_search_column1] ?? "" }}
            </button>
            @endforeach
            @else
            {{-- <div class="list-item">No results!</div> --}}
            @endif
        </div>
        {{-- @endif --}}
    </div>
</div>