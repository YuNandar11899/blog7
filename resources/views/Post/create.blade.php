@extends('layouts.app2')
@section('content2')
    <div class="container">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12 mt-5 ml-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center">Post Create</h1>
                            <form class="forms-sample" action="/posts" method="post" enctype="multipart/form-data">
                               @csrf
                               @include('post.form')
                                <div class="row mt-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-danger btn-block">Cancel</button>
                                    </div>
                                </div>

                             </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection
