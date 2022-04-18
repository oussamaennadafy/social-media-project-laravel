@extends('layouts.app')

@section('content')
 <div class="flex justify-center">
  <div class="w-8/12 bg-white p-6 rounded-lg">
   <form action=" {{ route('posts') }} " method="POST" class="mb-4">
    @csrf
   <div class="mb-4">
    <label for="body" class="sr-only">body</label>
    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg outline-none resize-none @error('body')
    border-red-500 @enderror" placeholder="how do you feel"></textarea>
    @error('body')
        <div class="text-red-500 mt-2 text-sm">
         {{ $message }}
        </div>
    @enderror
   </div>

   <div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">post</button>
   </div>
   </form>
   @if ($posts->count())
     @foreach ($posts as $post)
     <div class="mb-4">
      <a href="" class=" font-medium">{{ $post->user->name }} </a> <span class="text-sm font-light text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
      <p class="mb-2">{{$post->body}}</p>

      <div class="flex items-center">
        <form action="" method="post" class="mr-1">
          @csrf
          <button type="submit" class="text-blue-500" > Like </button>
        </form>
        <form action="" method="post" class="mr-1">
          @csrf
          <button type="submit" class="text-blue-500" > Dislike </button>
        </form>
        <span>{{$post->likes->count()}} {{ Str::plural('like', $post->likes->count()) }}</span>
      </div>




     </div>


     @endforeach
     @else
     there is no posts
     @endif

  </div>
 </div>
@endsection