@extends('layout')
@section('body')
    <div>
        <h3>Product Type</h3>
    </div>
    <table class="table table-striped">
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">#</th>
                </tr>
            </thead>
            @foreach($result as $res)
                <tr>
                    <td>{{ $res->typeID }}</td>
                    <td>{{ $res->typeNAME }}</td>
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