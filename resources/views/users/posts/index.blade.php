@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
     <div class="w-8/12 bg-white p-6 rounded-lg">
      @if ($posts->count())
      @foreach ($posts as $post)
       <x-post :post="$post" />
      @endforeach
      @else
      there is no posts
      @endif
     </div>
    </div>
@endsection