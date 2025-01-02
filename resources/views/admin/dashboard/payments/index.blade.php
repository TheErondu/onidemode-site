@extends('layouts.admin.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <h3>Manage Payments</h3>
        <p class="text-subtitle text-muted">Configure all your site settings</p>
    </div>
    @if (Session::has('message'))
        <div class="alert alert-success">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong>
            @endforeach
        </div>
    @endif
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Site Settings</h4>
        </div>
        <form method="POST" action="{{ route('admin.settings.update') }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-lg">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Amount</th>
                                <th>Reference</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($payments as $payment)
                            <tr>
                                <td class="col-3">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold ms-3 mb-0">{{$payment->participant->first_name}} {{$payment->participant->last_name}}</p>
                                    </div>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{$payment->participant->email}}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{$payment->amount}}</p>
                                </td>
                                <td class="col-auto">
                                    <p class=" mb-0">{{$payment->reference}}</p>
                                </td>
                                <td class="col-auto">
                                    <p style="@if ($payment->status == "success")
                                        color:green;
                                    @else
                                         color:red;
                                    @endif font-weight:bold;" class=" mb-0">{{$payment->status}}</p>
                                </td>
                            </tr>
                            @empty
                            <h6>No Data to Display...</h6>
                            @endforelse
                        </tbody>
                    </table>
                </div>
               
            </div>
        </form>
    </div>
</section>
@endsection
