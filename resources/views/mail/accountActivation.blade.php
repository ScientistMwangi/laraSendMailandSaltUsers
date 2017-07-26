@extends('layouts.masterMail')
@section('content')
<h4>Hi {{$username}}! Thank You for Registering. </h4>
<p>Please click the link below to Activate your Account.</p>
<a id="link" href="#">Acivate Account</a>
@stop