
    @extends('layout')
@section('content')
<form action="/createsubmit" method="POST">
@csrf  
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name" id="name">
  </div>
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