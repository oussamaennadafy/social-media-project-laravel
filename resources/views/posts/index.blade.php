@extends('layouts.app')

@section('content')
 <div class="flex justify-between flex-col">
  <div class="w-8/12 bg-white p-6 rounded-lg mb-10 mx-auto">
   <form action="{{route('posts.form')}}" method="POST" class="mb-4">
    @csrf
   <div class="mb-4">
    <label for="body" class="sr-only">body</label>
    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-50 border w-full p-4 rounded-lg outline-none resize-none @error('body')
    border-red-500 @enderror" placeholder="ask any question...  "></textarea>
    @error('body')
        <div class="text-red-500 mt-2 text-sm">
         {{ $message }}
        </div>
    @enderror
   </div>

   <div>
       <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">post</button>
   </div>
   </div>
   </form>
   <div class="w-8/12 bg-white p-6 rounded-lg mb-10 mx-auto">
    <h2 class="text-2xl font-bold text black p-6">What’s New</h2>
      @if ($posts->count())
      @foreach ($posts as $post)
      <div class="border-2 border-gray-100 bg-gray-50 p-6 mb-3 rounded-lg">
        <x-post :post='$post' />
      </div>
       @endforeach
       @else
       there is no posts
       @endif

  </div>
  </div>
 </div>
@endsection