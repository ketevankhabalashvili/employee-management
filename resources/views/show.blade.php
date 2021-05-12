@extends('layout')

@section('container')

    <div class="container mt-5">
        <form>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class="form-control" value="{{ $employee->name }}" placeholder="name" disabled>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Surname:</strong>
                        <input type="text" class="form-control" value="{{ $employee->surname }}" placeholder="surname" disabled>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-check">

                        <input type="checkbox" class="form-check-input" value="" {{ ($employee->is_hired == 1 ? 'checked' : '')}} id="exampleCheck1" disabled>
                        <strong class="form-check-label" for="exampleCheck1">Is_hired:</strong>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <a class="btn btn-primary" href="{{ route('list') }}"> Back</a>
                </div>
            </div>

        </form>
    </div>

@endsection
