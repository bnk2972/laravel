@extends('layout')
@section('body')
    <div>
        <h3>item1</h3>
    </div>
    <table class="table table-striped">
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Amount</th>
                    <th>Price</th>
                    <th colspan="2">#</th>
                </tr>
            </thead>
            @foreach($result as $res)
                <tr>
                    <td>{{ $res->productID }}</td>
                    <td>{{ $res->productNAME }}</td>
                    <td>{{ $res->detail }}</td>
                    <td>{{ $res->amount }}</td>
                    <td>{{ $res->price }}</td>
                    <td>
                        <a href="#" class="btn btn-primary">edit</button>
                    </td>
                    <td>
                        <form action="/item/delete/{{ $res->productID }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection