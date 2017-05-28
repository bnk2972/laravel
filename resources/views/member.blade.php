@extends('layout')
@section('body')
    <div>
        <h3>Member</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Full Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $res)
            <tr>
                <td>{{ $res->memberID }}</td>
                <td>{{ $res->name }} {{ $res->surname }}</td>
                <td>{{ $res->address }}</td>
                <td>{{ $res->phone }}</td>
                <td><a href="#" class="btn btn-danger">delete</bottom></a>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection