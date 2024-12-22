@extends('layouts.app')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ticker  Items</h3>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                All Posts
                <a class="btn btn-primary" href="{{route('posts.create') }}" >Add a New Post <i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
												<div class="table-responsive">
                <table class="table table-responsive" id="table1">
                    <thead>
                        <tr>
                            <th> #</th>
                            <th>Ticker Item</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (request()->query("filter") === 'pending' )
                        @foreach ($pending_posts as $post )
                          <tr>
                            <td> @if (Auth::user()->role ==='administrator')
                                <a href="{{route('post.approval',$post->id )}}">Approve/Edit</a>

                            @elseif (Auth::user()->role ==='editor')
                            <a href="{{route('post.approval',$post->id )}}">Approve/Edit</a>
                            @else
                            <a href="{{route('posts.edit',$post->id )}}">Edit</a>
                            @endif </td>
                            <td>{{$post->body}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{$post->user->name}}</td>
                            <td>
                                @if ($post->status === 'published')
                                <span class="badge bg-success">{{$post->status}}</span>
                                @else
                                <span class="badge bg-info">{{$post->status}}</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        @elseif (request()->query("filter") === 'published' )
                        @foreach ($published_posts as $post )
                        <tr>
                          <td> @if (Auth::user()->role ==='administrator')
                              <a href="{{route('post.approval',$post->id )}}">Approve/Edit</a>

                          @elseif (Auth::user()->role ==='editor')
                          <a href="{{route('post.approval',$post->id )}}">Approve/Edit</a>
                          @else
                          <a href="{{route('posts.edit',$post->id )}}">Edit</a>
                          @endif </td>
                          <td>{{$post->body}}</td>
                          <td>{{$post->category->name}}</td>
                          <td>{{$post->user->name}}</td>
                          <td>
                              @if ($post->status === 'published')
                              <span class="badge bg-success">{{$post->status}}</span>
                              @else
                              <span class="badge bg-info">{{$post->status}}</span>
                              @endif
                          </td>
                      </tr>
                      @endforeach

                      @else
                      @foreach ($posts as $post )
                        <tr>
                          <td> @if (Auth::user()->role ==='administrator')
                              <a href="{{route('post.approval',$post->id )}}">Approve/Edit</a>

                          @elseif (Auth::user()->role ==='editor')
                          <a href="{{route('post.approval',$post->id )}}">Approve/Edit</a>
                          @else
                          <a href="{{route('posts.edit',$post->id )}}">Edit</a>
                          @endif </td>
                          <td>{{$post->body}}</td>
                          <td>{{$post->category->name}}</td>
                          <td>{{$post->user->name}}</td>
                          <td>
                              @if ($post->status === 'published')
                              <span class="badge bg-success">{{$post->status}}</span>
                              @else
                              <span class="badge bg-info">{{$post->status}}</span>
                              @endif
                          </td>
                      </tr>
                      @endforeach
                      @endif

                    </tbody>
                </table>
            </div>
        </div>
</div>


    </section>
    <!-- Basic Tables end -->
</div>
@endsection
@section('javascript')
<script src="assets/vendors/jquery/jquery.min.js"></script>
<script src="assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
<script src="assets/vendors/fontawesome/all.min.js"></script>
<script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
</script>
@endsection
