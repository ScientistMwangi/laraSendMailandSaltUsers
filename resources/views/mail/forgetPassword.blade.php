@extends('layouts.masterMail')
@section('content')

<h4>Hi {{$username}}</h4>

<p>
We've received a request to reset your password. If you didn't make the request,
just ignore this email. Otherwise,
<p> you can reset your password using the link below.<p>
</p>
<a id="link" href="#">Reset Password</a>
@stop