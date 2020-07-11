@extends('layouts.app2')
@section('content2')
    <div class="container">
        <div class="col-md-6 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow">
                <div class="col-12 mt-5 ml-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center">Post Detail</div>
                            Title:{{$posts->title}}<p></p>
                            Content:{{$posts->content}}<p></p>
                            Customer name:{{$posts->customer->name}}<p></p>
                            Customer email:{{$posts->customer->email}}<p></p>
                            Image::<img src="{{asset('storage/'.$posts->image)}}">
                            <div class="row mt-2">
                                <div class="col-sm-6 mt-2 ">
                                    <form action="/posts/{{$posts->id}}" id="delete-task" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href= "/posts/{{$posts->id}}/edit">
                                        <button class="btn btn-success col-sm-5 ">Update</button>
                                    </a>
                                    <button type="'submit" class="btn btn-danger col-sm-5 " form="delete-task">Delete</button>

                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
