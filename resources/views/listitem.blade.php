@extends('layout')
@section('body')
    <div>
        <h3>item3</h3>
    </div>
    <table class="table-striped">
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th>#</th>
                </tr>
            </thead>
            @foreach($result as $res)
                <tr>
                    <td>{{ $res->productID }}</td>
                    <td>{{ $res->productNAME }}</td>
                    <td>{{ $res->detail }}</td>
                    <td>{{ $res->amount }}</td>
                    <td>{{ $res->price }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection