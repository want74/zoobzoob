<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Действительные</h1>
    @foreach ($entries as $entry)
        @if (!$entry->tf)
            <p>{{$entry->address.', '.$entry->date.', '.$entry->dr.', '.$entry->target}}</p>
        @endif
    @endforeach
    <h1>История</h1>
    @foreach ($entries as $entry)
        @if ($entry->tf)
            <p>{{$entry->address.', '.$entry->date.', '.$entry->dr.', '.$entry->target}}</p>
        @endif
    @endforeach
</body>
</html>