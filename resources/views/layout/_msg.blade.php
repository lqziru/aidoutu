@foreach(['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="bg-green mt10 mb10 p10 c-green">
        {{ session()->get($msg)}}
        </div>
    @endif
@endforeach