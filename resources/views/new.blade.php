@extends('layout')

@section('container')
    <div class="container mt-5">
    <form action="{{ route('add') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surname:</strong>
                    <input type="text" name="surname" class="form-control" placeholder="surname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1">
                    <input type="hidden" name="is_hired" value="">
                    <strong class="form-check-label" for="exampleCheck1">Is_hired:</strong>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-danger" href="{{ route('list') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            if($("#exampleCheck1").is(":checked")) {
                console.log('checked');
                $("input[name='is_hired']").val(1)
            } else {
                console.log('not checked');
                $("input[name='is_hired']").val(0)
            }

            $(document).on('change', '.checkbox', function() {
                if(this.checked) {
                    console.log('checked');
                    $("input[name='is_hired']").val(1)
                } else {
                    console.log('not checked');
                    $("input[name='is_hired']").val(0)
                }
            });

        });
    </script>
@endsection
