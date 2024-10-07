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
        <livewire:components.button type="button" label="Update" target="tasks.update-task" />
    @endif
</div>
