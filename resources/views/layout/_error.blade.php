@if(count($errors)>0)
    <div class="p10 c-red bg-red">
        发现{{ count($errors) }}个错误: 
        <ol>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ol>
    </div>
@endif