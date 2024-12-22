@extends('layouts.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input</h3>
                <p class="text-subtitle text-muted">Give textual form controls like input upgrade with custom styles,
                    sizing, focus states, and more.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            @if (Session::has('message'))
                <div class="container">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <div class="alert-icon">
                            <i class="far fa-fw fa-bell"></i>
                        </div>
                        <div class="alert-message">
                            <strong> {{ session('message') }}</strong>
                        </div>

                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="container">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        @foreach ($errors->all() as $error)
                            <div class="alert-icon">
                                <i class="far fa-fw fa-bell"></i>
                            </div>
                            <div class="alert-message">
                                <strong> {{ $error }}</strong>
                            </div>

                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>
            <form method="POST" action="{{ route('post.approve', $post->id) }}">
                @method('PUT')
                @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Ticker Item</label>
                            <input name="body" value="{{$post->body}}" type="text" class="form-control" id="body" placeholder="Enter ticker Item">
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Category</label>
                            <select class="form-select" name="category" id="basicSelect">
                               @foreach ( $categories as $category )
                               <option value="{{ $category->id }}" @if($post->category->id === $category->id) selected='selected' @endif>{{ $category->name }}</option>
                               @endforeach
                            </select>
                        </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Status</label>
                            <select class="form-select" name="status" id="basicSelect">
                               <option value="pending" @if($post->status === 'pending') selected='selected' @endif>Pending</option>
                               <option value="published" @if($post->status === 'published') selected='selected' @endif>Published</option>
                            </select>
                        </div>
                        </div>

                    </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <a href="{{ route('posts.index') }}" style="background-color: rgb(53, 54, 55) !important;"
                            class="btn btn-primary">Cancel</a>
                    </div>
                    <div class="mb-3 col-md-1">
                        <button style="background-color: rgb(37, 38, 38) !important;" type="submit"
                            class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>



</div>
@endsection
@section('javascript')
@endsection
