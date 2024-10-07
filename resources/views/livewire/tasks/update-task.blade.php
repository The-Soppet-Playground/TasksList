<div>
    @if ($is_visible)
        <form wire:submit="updateTask">
            <p>
                Title: <input type="text" wire:model="title" />
            </p>
            <p>
                Description:
                <input type="textarea" wire:model="description" />
            </p>
            <p>
                Done:
                <input type="checkbox" wire:model="is_done" />
            </p>
            <p>
                Comment:
                <input type="textarea" wire:model="comment" />
            </p>
            <livewire:components.button type="submit" label="Submit" />
            <livewire:components.button type="button" label="Delete" target="update-task.delete-task" />
        </form>
    @endif
</div>
