@extends('layouts.app2')
@section('content2')
    <div class="container">
        <h1>Customer List</h1>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customer</h4>
                    <table class="table table-striped">
                        <thead>
                        <th>Customer Name</th>
                        <th>Customer Email</th>
                        <th>Customer Password</th>
                        </thead>
                    <tbody>
                         @foreach($customers as $customer)
                            <tr>
                                <td><a href="/customer/{{$customer->id}}">{{$customer->name}}</a></td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->password}}</td>
                            </tr>
                         @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
