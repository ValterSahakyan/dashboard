@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Projects') }}
                        <div class="float-right mr-2">
                            <a class="btn btn-primary" href="{{ route('posts.create') }}">Add New Post</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success_message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('success_message') }}</div>
                        @endif
                        @if(Session::has('error_message'))
                            <div class="alert alert-warning" role="alert">{{ Session::get('error_message') }}</div>
                        @endif
                        <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                          <tr>
                              <th>Author</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Type</th>
                              <th>Action</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->user->name }}</td>
                                <td>
                                  <img src="{{$post->image ? asset($post->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->type }}</td>
                                <td>
                                <a href="{{ url('/posts/show/' . $post->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ url('/posts/edit/' . $post->id) }}" class="btn btn-warning">Edit</a>
                              </td>
                                <td>
                                    <form action="{{ route('posts.delete', $post->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                       {{ $posts->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

