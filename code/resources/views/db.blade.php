@extends('layout')
@section('title', 'Database')
@section('content')
<p>&nbsp;</p>
<h5>Database access</h5>
<div class="row">
    <div class="col-12">
    <p>&nbsp;</p>
    <table class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->first_name}}</td>
            <td>{{ $student->last_name}}</td>
        </tr>     
        @endforeach       
    </table>
    </div>
    <div class="col-12 text-center">
        <a href="/" class="btn btn-primary main-button">Back to home</a>
    </div>
</div>
@endsection