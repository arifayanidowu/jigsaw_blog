@extends('_layouts.master')

@section('title')
    HomePage    
@endsection

@section('body')

<h1 class="light">Generated URL</h1>
<ul>
@foreach ($posts as $post)
    <li>
        <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
    </li>
@endforeach
</ul>

<h1 class="light">Reddit /r/aww</h1>

<ul>
    @foreach ($reddit as $post)
        <li>
            <a href="{{ $post->getUrl() }}">{{ $post->title }}</a>
        </li>
    @endforeach
</ul>

@endsection
