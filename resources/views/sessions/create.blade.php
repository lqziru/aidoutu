@extends("layout.main")

@section('title', '注册')

@section("body")
<style>
form label{display:block;margin-bottom:10px;}
form input[type=text], form input[type=password]{padding:5px;width:100%;line-height:20px;}
</style>
<div class="w-30 center p10 border radius bg-light">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="fs20 b">登录</div>
    </div>
    <div class="panel-body">
      @include('layout._error')
      @include('layout._msg')
      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="mt20">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="mt20">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="mt20">
            <input type="checkbox" name="remember"> 记住我
          </div>
          <div class="mt20">
              <button type="submit" class="btn btn-primary w-20">登录</button>
          </div>
      </form>

      <div class="mt20 pt10 line-t">还没账号？<a href="{{ route('signup') }}">现在注册！</a></div>
    </div>
  </div>
</div>
@endsection