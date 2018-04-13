<style>
.dropdown{position:relative;}
.dropdown-menu{
    background:#666;   
    margin:0;
    padding:0;
    min-width: 100px;
    position:absolute;left:0;top:2em;z-index:999;

 }
.dropdown:hover .dropdown-menu{display:block;}
.dropdown-menu li{list-style:none;padding:5px;}
.divider{height:0;overflow:hidden;border-top:1px solid #eee;}
</style>
<div class="section line-b lh bg-drak c-white">
    <div class="row center w1200 pt10 pb10">
        <div class="x-20">
            <a href="/" class="fs18 b">爱斗图-Aidoutu</a>
        </div>
        <div class="fr pt2">
            <ul class="nav fl">
              @if (Auth::check())
                <li><a href="#">用户列表</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{ Auth::user()->name }} <b class="caret"></b>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                    <li><a href="#">编辑资料</a></li>
                    <li class="divider"></li>
                    <li>
                      <a id="logout" href="#">
                        <form action="{{ route('logout') }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                        </form>
                      </a>
                    </li>
                  </ul>
                </li>
              @else
                <li><a href="{{ route('help') }}">帮助</a></li>
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('signup') }}">signup</a></li>
              @endif
            </ul>
        </div>
    </div>
</div>