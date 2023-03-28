@extends('layouts.app')

@section('content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif



                    <div class="col-lg-12   col-lg-offset-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ __('Users List') }}</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>

        <tr>
        <th scope="col">FIRSTNAME</th>
        <th scope="col">LASTNAME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">ACTION</th>
        </tr>
        </thead>
       <tbody>

    @foreach($users as $user)
        <tr>
        <td>{{$user->Firstname}}</td>      
        <td>{{$user->Lastname}}</td>                                
        <td>{{$user->email}}</td>
        
        <td><span>
            <a href="{{route('edit',$user->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a>
<br>
            <a href="{{route('delete',$user->id)}}" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-close color-danger"></i></a>
            </span> </td>
        </tr> 
    @endforeach

    </tbody>
                                    </table>

                                    <a href="{{url('home')}}" class="color:white">  <button type="button" class="btn btn-primary">  {{ __('Back') }}
                                </button> </a>

                                </div>
                            </div>
                        </div>
                    </div>



@endsection
