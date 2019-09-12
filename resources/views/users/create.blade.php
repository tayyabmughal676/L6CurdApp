@extends('users.layouts.master')

@section('content')
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
           <form action="/users" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
            <input id="" name="name" value="{{old('name')}}" placeholder="Name" class="form-control" type="text" >
            </div>  
            <div class="form-group">
                   <label for="">Email</label>
                   <input id="" name="email"  placeholder="Email" class="form-control" type="email" >
               </div>
               <div class="form-group">
                   <label for="">Password</label>
                   <input id="" name="password"  placeholder="Password" class="form-control" type="password" >
               </div>

                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input id="" name="password_confirmation"   placeholder="Confirm Password" class="form-control" type="password" >
                </div>

               <div class="form-check form-check-inline">
                   <input id="" class="form-check-input" type="checkbox" name="" value="true">
                   <label for="" class="form-check-label">Remember</label>
               </div>
               <br>
               <br>
               <button  class="btn btn-primary ">Login</button>
           </form>
           
           @if ($errors->count())
           <div class="alert alert-danger" role="alert">
               @foreach ($errors->all() as $error)
               {{$error}} <br>
               @endforeach
           </div>
           @else
           <div class="alert alert-danger" >
                <strong>{{request('status')}}</strong>
            </div> 
           @endif
        </div>
    </div>
</div>
@endsection