<div>
    @if (!empty($task))
        <div>
            <p>{{ $task->title }}</p>
            <p>{{ $task->description }}</p>
            <p>
                Done: <input type="checkbox" @if ($task->is_done) checked @endif
                    value="Done" disabled>
            </p>
        </div>
        <button type="button" wire:click="updateTask">Update</button>
    @endif
</div>
