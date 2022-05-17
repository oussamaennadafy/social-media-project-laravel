@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
     <div class="w-8/12">

      
      <div class="p-6 bg-gray-100 rounded-lg mb-4 w-8/12">
      <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
      <p>Posted {{ $posts->count() }} {{ Str::plural('Post', $posts->count()) }} And Received 
       {{ $user->receivedLikes->count() }} Likes</p>
     </div>
     
     
     
     
     <div class="w-8/12 bg-white p-6 rounded-lg">
       @if ($posts->count())
       @foreach ($posts as $post)
       <x-post :post='$post' />

       @if ($posts->count() - ) 
       <hr class="mx-6 my-4">
       @endif

       @endforeach
        @else
        <p>{{ $user->name}} does not have any posts</p>
        @endif
       </div>
       
      </div>
      </div>
@endsection