@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome') }}   {{ Auth::user()->name }}  {{ __('!') }} 

                     <div class="m-6 space-x-3 text-center space-y-3">
                    @can('isAdmin')

                    
                    <a href="{{route('show')}}" > <button type="button" class="btn btn-primary"> {{ __(' Users List') }} </button></a> 
                    <a href="{{route('create')}}"><button type="button" class="btn btn-primary"> {{ __('Create User') }} </button></a>

                    @endcan

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
