@extends('master')
@section('title')
    full-name
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body bg-info">
                        <form action="{{route('get-full-name')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">FirstName</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="first_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">LastName</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="last_name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly class="form-control" value="{{isset($fullName)? $fullName:''}}">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-success float-right " value="Get Full Name"/>
                                </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

