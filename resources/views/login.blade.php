@extends('layout')
@section('content')
<h1>
    Login Page 
</h1>

<form action="/loginsubmit" method="POST">
@csrf  
<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection