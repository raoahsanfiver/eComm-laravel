@extends('master')
@section('content')

<div class="container">
    <div class="row justify-content-center py-5">
        <div class="col-md-4">


            <div class="card">
                <div class="card-header">
                  Login
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           
                        </div>
                        <div class="form-group py-3">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
        
                </div>
              </div>
            
        </div>
    </div>
</div>
@endsection