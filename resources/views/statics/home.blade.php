@extends("layout.main")

@section("body")
  <div class="w-80 bg-light p20 center fs18 radius tc">
    <h1 class="fs36">Hello Laravel</h1>
    <p class="fs20">
      你现在所看到的是 <a class="fs20 c-blue" href="https://laravel-china.org/courses/laravel-essential-training-5.1">Laravel 入门教程</a> 的示例项目主页。
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p class="mt20">
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
    </p>
  </div>
@endsection