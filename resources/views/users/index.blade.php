@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{{ $row->id }}}</td>
                        <td>{{{ $row->name }}}</td>
                        <td>{{{ $row->email }}}</td>
                        <td><a href="{{{ url('users/'.$row->id.'/edit') }}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{route('users.destroy',[base64_encode($row->id)])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection