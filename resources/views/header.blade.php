<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            @forelse ($menu as $item)
                <li>
                    <a href="{{ route(`${item}`) }}">{{$item}}</a>
                </li>
            @empty
                <h3>No menu</h3>
            @endforelse
        </ul>
    </header>
</body>
</html>