@extends('layouts/master')

@section('content')
<h1>user 3 session</h1>
<?php echo 'user ID= '.request('user');?>
@endsection