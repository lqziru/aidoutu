<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}">
</a>
<h1 class="mt20">{{ $user->name }}</h1>