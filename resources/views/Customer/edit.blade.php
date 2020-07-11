@extends('layouts.app2')
@section('content2')
    <div class="container">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12 mt-5 ml-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title text-center">Customer Update</h1>
                                      <form action="/customer/edit" method="post">

    @csrf
    <input type="hidden" value="{{$customers->id}}" name="id">
    <div class="form-group">
<label for="name">Customer Name</label>
<input  class="form-control" type="text" name="name" id="name" value="{{old('name')??$customers->name??""}}"></div>
    <div class="form-group">
<label for="email">Customer Email</label>
<input  class="form-control"type="text" name="email" id="email" value="{{old('email')??$customers->email??""}}"></div>
    <div class="form-group">
<label for="password">Customer Password</label>
<input class="form-control" type="password" name="password" id="password" value="{{old('password')??$customers->password??""}}"></div>
<input type="submit" value="Update">
</form>
</body>
</html>
    </div>
@endsection
