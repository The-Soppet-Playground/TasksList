<div class="flex flex-row justify-center align-center w-full">
    <div class="flex flex-row justify-center align-center w-1/2">
        <form wire:submit="save" class="flex flex-col">
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" wire:model="title" />
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" id="description" wire:model="description" />
            </div>
            <livewire:components.button type="submit" label="Submit" />
        </form>
    </div>
</div>
