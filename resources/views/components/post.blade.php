@props(['post' => $post])

<div class="mb-4">
  <a href="{{route('users.posts', $post->user)}}" class=" font-medium">{{ $post->user->name }} </a> <span class="text-sm font-light text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
  <p class="mb-2">{{$post->body}}</p>



  @can('delete', $post)
    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
      @csrf
      <button type="submit" class="text-blue-500" > Delete </button>
    </form>
  @endcan


  <div class="flex items-center">
    @auth
    @if(!$post->likedBy(auth()->user()))
    <form action="{{ route('posts.likes', $post->id) }}" method="post" class="mr-1">
      @csrf
      <button type="submit" class="text-blue-500" > Like </button>
    </form>
    @else
    <form action="{{ route('posts.notlikes', $post->id) }}" class="mr-1" method="post">
      @csrf
      <button type="submit" class="text-blue-500" > Dislike </button>
    </form>
    @endif




    @endauth
    <span>{{$post->likes->count()}} {{ Str::plural('like', $post->likes->count()) }}</span>
  </div>




 </div>