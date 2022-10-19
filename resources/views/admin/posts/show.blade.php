@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>{{$post->title}}</h1>
            <h4>{{ $post->slug }}</h4>
            <ul class="d-flex">
                <li> {{ $post->created_at }}</li>
                <li class="ml-5">{{ $post->updated_at }}</li>
            </ul>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            <a href="{{ route('admin.posts.create') }}" type="button" class="btn btn-primary btn-sm">Nuovo Post</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <p>
                {{ $post->content }}
                {{-- Se fosse stato in html  si sarebbe scritto così {!! $post->content !!} --}}
            </p>
        </div>
    </div>
</div>
@endsection

