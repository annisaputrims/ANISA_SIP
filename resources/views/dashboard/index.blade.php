@extends('template.base')
@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<h1>Ini Dashboard</h1>
@endsection