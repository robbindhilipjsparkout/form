@extends('layouts.app')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Update user</h1>
        <div class="lead">
            
        </div>
        
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
        
        <div class="container mt-4">
            <form method="post" action="{{ route('update', $user->id) }}">
               
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">FirstName</label>
                    <input value="{{ $user->Firstname }}" 
                        type="text" 
                        class="form-control" 
                        name="firstname" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">LastName</label>
                    <input value="{{ $user->Lastname }}" 
                        type="text" 
                        class="form-control" 
                        name="lastname" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
               

                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="{{route('show')}}" class="color:white">  <button type="button" class="btn btn-primary">  {{ __('Back') }}
                                </button> </a>
            </form>
        </div>

    </div>
@endsection
