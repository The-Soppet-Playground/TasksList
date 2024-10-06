<div>
    @if (!empty($tasks))
        <ul>
            @foreach ($tasks as $t)
                <li key="{{$t->id}}"><button wire:click="setTask({{ $t->id }})">{{ $t->title }}</button></li>
            @endforeach
        </ul>
    @endif
</div>
