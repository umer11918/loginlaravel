@extends('layout')
@section('content')
<h1>
    List page</h1>

    <div>
        <u1>
            @foreach($user as $u)
            <li>
            <span style =" width:100px; 
            display: inline-block">{{$u->id}}
</span>
                <span style =" width:200px; 
            display: inline-block" >{{$u->name}}
</span><span style =" width:200px; 
            display: inline-block">{{$u->email}}
</span>
            </li>
            @endforeach
</div>

@endsection