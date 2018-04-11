@extends("layout.main")

@section('title', '帮助')

@section("body")
<style>


form label{display:block;margin-bottom:5px;}
form input{display:block;width:100%;padding:10px;}
</style>
<div class="border radius center w-40">
  <div>
    <h5 class="bg-light p20 mb5">注册</h5>
    <div class="p10">
      <form method="POST" action="{{ route('users.store') }}">
          {{ csrf_field() }}
           @include('layout._error')
          <div class="mt10">
            <label for="name">名称：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="mt10">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="mt10">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="mt10">
            <label for="password_confirmation">确认密码：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
          </div>

          <div class="mt20">
              <button type="submit" class="btn btn-primary w-20">注册</button>
          </div>
      </form>
    </div>
  </div>
</div>

@endsection