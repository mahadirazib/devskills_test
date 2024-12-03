@extends('layouts.app')

@section('content')
  <main class="mt-4 max-w-xl mx-auto space-y-8 px-2 md:px-0 min-h-screen">
    <div class="container text-center p-12 border rounded-lg">

      <h1 class="text-3xl justify-center items-center my-4">Welcome to Home</h1>

      @if (auth()->user()->is_admin == true)
        <div>
          <a class="btn btn-success mb-4" href="{{ route('register') }}">Register Users</a>
        </div>
      @endif
      
    </div>
  </main>
@endsection
