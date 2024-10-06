<div>
    <form wire:submit="save">
        <label for="title">Title</label>
        <input type="text" id="title" wire:model="title" />
        <label for="description">Description</label>
        <input type="text" id="description" wire:model="description" />
        <button>Submit</button>
    </form>
</div>
