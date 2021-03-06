<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif
        <div class="content">
            <ul>
            @foreach($users as $user)
                <li>
                    {{ $user->name }}
                    <ul>
                    @foreach($user->posts as $post)
                        <li>{{ $loop->parent->iteration }}.{{ $loop->iteration }}. {{ $post->title }}</li>
                        @foreach(['one', 'Two', 'three'] as $number)
                                <li>{{ $loop->parent->parent->iteration }}.{{ $loop->parent->iteration }}.{{ $loop->iteration }}. {{ $number }}</li>
                        @endforeach
                    @endforeach
                    </ul>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
