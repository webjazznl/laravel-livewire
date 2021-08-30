<div>
    @foreach ($contacts as $contact )
    <div>
        @livewire('say-hi', ['name' => $contact->name], key($contact->id))
        <button wire:click="removeContact({{$contact->id}})">Remove</button> {{now()}}
    </div>
    @endforeach

    <button wire:click="$refresh">Refresh</button> {{now()}}


</div>
