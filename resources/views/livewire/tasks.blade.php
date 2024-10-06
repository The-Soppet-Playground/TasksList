<div>
    <ul>
        @foreach ($tasks as $t)
            <li><button wire:click="setTask({{ $t->id }})">{{ $t->title }}</button></li>
        @endforeach
    </ul>

    {{-- Like modal for tasks view --}}
    @if ($task)
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
