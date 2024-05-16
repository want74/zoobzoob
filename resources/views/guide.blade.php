@extends('layouts/app')
@section('content')  <!-- Content -->
    @foreach($results as $result)
        @foreach(explode('?v=', $result->youtube_url) as $url)
    @endforeach
    <div class="bg-[#EEF2FF] w-full flex overflow-y-auto">
        <div class="mx-auto w-[70%] my-3">
            <div class="flex h-[500px]">
                    <iframe class="w-full" height="500" src="https://www.youtube.com/embed/{{$url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h1 class="text-4xl font-bold text-[#323855] my-4">{{$result->name}}</h1>
            <div class="bg-white rounded-[12px] p-[10px]">
                <p class="text-xl font-bold text-[#323855]">{{$result->description}}</p>
            </div>
        </div>
    </div>
    @endforeach
@endsection
