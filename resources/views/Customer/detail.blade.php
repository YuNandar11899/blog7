@extends('layouts.app2')
@section('content2')

        <div class="container">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12 mt-5 ml-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title text-center">Customer Detail</div>

                                <p class="text-center">Name:{{$customers->name}}</p>
                                <p class="text-center"> Email:{{$customers->email}}</p>
                                <p class="text-center">Password:{{$customers->password}}</p>
                                <div class="row">
                                    <div class="col">
                                        <a href= "/customer/edit/{{$customers->id}}">
                                            <button class="btn btn-success btn-block">Update</button>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="/customer/delete/{{$customers->id}}">
                                            <button  class="btn btn-danger btn-block" onclick="del({{$customers->id}})">Delete</button>
                                        </a>
                                    </div>
                                </div>


                                <script>
                                    function del(id) {
                                        let con = confirm("Are you sure to delete");
                                        if (con) {
                                            location.href = '/customer/delete' + id;
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
