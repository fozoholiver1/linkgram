@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
<img src="{{ asset('images/desart.jpg') }}" alt="" class=" rounded-circle w-75 ">
    </div>
    
    <div class="col-9 pt-5 ">
        <div class="d-flex justify-content-between align-items-baseline"> 
            <h1> {{$user->username}} </h1> 
            <a href="/p/create">Add new post</a>
    
    </div>
        

<div class="d-flex">
    
    <div class="pr-5"> <strong> {{$user->posts->count()}} </strong>posts</div>
    <div class="pr-5"> <strong>23k </strong>followers</div>
    <div class="pr-5"> <strong> 564</strong> folowing</div>
    
</div>

<div class="pt-4 font-weight-bold"> {{$user->profile->title}}</div>

<div>  {{$user->profile->description}}</div>

<div class="">
<a href="www.linkweb.ga"> {{$user->profile->url ?? 'no url yet' }}</a></div>

</div>
</div>

<div class="row">
@foreach($user->posts as $post)   <!-- src="/storage/{{ $post->image}}" -->
<div class="col-4 pt-5">
<img src="/storage/{{ $post->image}}" alt="change your browser" class=" w-100 pb-4">
</div>
@endforeach
</div>

</div>

@endsection


