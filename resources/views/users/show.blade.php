@extends("layout.main")

@section('title', '注册')

@section("body")
    <div class="w-80 center fs20 tc">
         @include('layout._msg')
         @include('layout._user_info', ['user'=>$user])
    </div>
@endsection