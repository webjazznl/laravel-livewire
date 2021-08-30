<div>
    @foreach ($contacts as $contact )
    <div>
        @livewire('say-hi', ['name' => $contact->name], key($contact->id))

    </div>
    @endforeach
    <div>
    <button wire:click="$refresh">Refresh</button> {{now()}}
    <button wire:click.preventDefault="refreshChildren">Refresh Children</button>
    </div>

</div>
