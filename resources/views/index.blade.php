@extends('layout')

@section('container')


    <div class="container mt-5 ">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('new') }}"> Add</a>
            <a class="btn btn-warning"  href="{{ route('home') }}"> Home</a>
        </div>
        <br>
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @if($employees->count() == 0)

            <td colspan="4" class="text-center">   employees not registered yet. </td>

        @else
            @foreach($employees as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->surname }}</td>
                <td>
                    <form action="{{ route('hire',$item->id) }}" method="POST" style ='float: left; padding: 2px;'>
                        @csrf
                        @if($item->is_hired == 1)
                            <input type="hidden" name="is_hired" value="0">
                            <button type="submit" class="btn btn-secondary">Hired</button>
                        @else
                            <input type="hidden" name="is_hired" value="1">
                            <button type="submit" class="btn btn-secondary">Not hired</button>
                        @endif
                    </form>
                    <form action="{{ route('delete',$item->id) }}" method="POST" style ='float: left; padding: 2px;'>

                        <a class="btn btn-info" href="{{ route('show',$item->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('edit',$item->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $employees->links() }}
    </div>
    <p>
        show {{$employees->count()}} item from  {{ $employees->total() }}.
    </p>
    </div>
@endsection
