<div>
    @if (!empty($task))
        <div>
            <p>{{ $task->title }}</p>
            <p>{{ $task->description }}</p>
            <p>
                @if ($task->is_done)
                    <input type="checkbox" checked value="Done">
                @else
                    <input type="checkbox" value="Done">
                @endif
            </p>
        </div>
    @endif
</div>
