@extends('layouts.app')

@section('title', 'Register')


@section('content')

<div class="container d-flex justify-content-center">
  <div class=" pb-10 py-4">
    <div class="card m-4 p-4 shadow border-0">
      <x-form :action="route('register')" buttonText="Register" enctype="multipart/form-data" class="" style="min-width: 400px">
        <div class="mb-4">
          <x-input name="name" type="text" label="Name" placeholder="Alp Arslan" required />
        </div>
        <div class="mb-4">
          <x-input name="username" type="text" label="User Name" placeholder="some_name" required />
        </div>
        <div class="mb-4">
          <x-input name="email" type="email" label="Email Address" placeholder="alp.arslan@mail.com" required />
        </div>
        <div class="mb-4">
          <x-input name="phone" type="text" label="Phone Number" placeholder="+8801234567890" />
        </div>
        <div class="mb-4">
          <x-input name="password" type="password" label="Password" placeholder="password" required />
        </div>
        <div class="w-50 text-left mb-4">
          <label class="checkbox-wrap checkbox-primary mb-0 d-flex align-items-center">
            <input type="checkbox" name="is_admin" class="mr-2">
            <span class="ms-2">Is This User an Admin?</span>
          <span class="checkmark"></span>
          </label>
        </div>
      </x-form>

    </div>
  </div>
</div>
@endsection
