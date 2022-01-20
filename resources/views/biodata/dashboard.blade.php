@extends('template')
@section('content')
<div class="jumbotron mt-3">
    <h1 class="display-4">Dashboard {{ucfirst(trans(Auth::user()->role))}}</h1>
    <p>Hi, {{Auth::user()->name}}</p>
</div>

<div class="container">
    @can('role','admin')
        <h1>Applicant Table</h1>
    @endcan
    @can('role',['aplicant'])
        <button type="button" class="btn btn-primary">Create Biodata</button>
    @endcan
</div>
@endsection