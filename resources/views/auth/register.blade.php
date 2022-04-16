@extends('layouts.app')

@section('content')
 <div class="flex justify-center">
  <div class="w-4/12 bg-white p-6 rounded-lg">
   <form action="{{ route('register') }}" method="POST">
    @csrf
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="name">name</label>
     <input 
     type="text" name="name" id="name" placeholder=" Name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">
     @error('name')
         <div class="text-red-500 mt-2vtext-sm ">
          {{ $message }}
         </div>
     @enderror
    </div>
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="username">username</label>
     <input 
     type="text" name="username" id="username" placeholder=" username" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}">
    </div>
    @error('username')
       <div class="text-red-500 mt-3">
        {{ $message }}
       </div>
     @enderror
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="email">email</label>
     <input 
     type="email" name="email" id="email" placeholder=" email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">
    </div>
    @error('email')
       <div class="text-red-500 mt-3">
        {{ $message }}
       </div>
    @enderror
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="password">password</label>
     <input 
     type="password" name="password" id="password" placeholder="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"">
    </div>
    @error('password')
       <div class="text-red-500 mt-3">
        {{ $message }}
       </div>
     @enderror
    {{-- //////////////////////////////////// --}}
    <div class="mb-4">
     <label class="sr-only" for="password_confirmation">password again</label>
     <input 
     type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg"">
    </div>
    {{-- //////////////////////////////////// --}}
    <div>
     <button type="submit" class="bg-blue-500 w-full px-4 py-3 rounded font-medium text-white ">
      Register
     </button>
    </div>
   </form>
  </div>
 </div>
@endsection