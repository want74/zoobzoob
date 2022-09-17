@extends('layouts/app')
@section('content')
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
@endsection