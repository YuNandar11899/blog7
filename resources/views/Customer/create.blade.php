@extends('layouts.app2')
@section('content2')
    <div class="container">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12 mt-5 ml-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center">Customer Add</h1>
                            <form class="forms-sample" action="/customeradd" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Customer Name:</label>
                                    <input class="form-control" type="text" name="name" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Customer Email:</label>
                                    <input class="form-control" type="text" name="email" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Customer Password:</label>
                                    <input class="form-control" type="password" name="password" id="password">

                                </div>
                                <input type="submit" value="Add">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
