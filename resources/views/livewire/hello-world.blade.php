<div>
    <input type="text" wire:model.lazy="name">
    <input type="checkbox" wire:model="loud">
    <select multiple wire:model="greeting">
        <option value="Hi">Hi</option>
        <option value="Hello">Hello</option>
        <option value="Good bye">Good bye</option>
    </select>

    {{ implode(', ', $greeting) }} {{ $name }}

    @if ($loud)
        !!!
    @endif

    <button wire:click="resetName">Reset</button>
</div>
