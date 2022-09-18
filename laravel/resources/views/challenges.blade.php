@extends('layouts/app')
@section('content')
<h1>Challenges</h1>
@for($i=0; $i<count($challenges); $i++)
    
    <div>
        <h2>{{$challenges[$i]->name}}</h1>
        <p>{{$challenges[$i]->description}}</p>
        <p>{{$cntDoneChallenge[$i]}}/{{$cntChallenge[$i]}}</p>
    </div>
@endfor
<h1>Tasks</h1>
@for($i=0; $i<count($tasks); $i++)
    <form action = "/challenges/update"  method="post">@csrf
        <input name="taskId" value="{{$tasks[$i]->id}}" style="display: none">
        <button>
            <h2>{{$tasks[$i]->name}}</h1>
            <p>{{$tasks[$i]->description}}</p>
            @if ($doneTask[$tasks[$i]->id])
                <p>Выполнено</p>
            @else
                <p>Не выполнено</p>
            @endif
        </button>
</form>
@endfor
@endsection
