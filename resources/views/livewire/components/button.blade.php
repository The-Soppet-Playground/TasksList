<button type="{{$type}}" @if ($type === 'button') wire:click="doDispatch" @endif   class="py-2 px-8 border border-black">{{$label}}</button>
