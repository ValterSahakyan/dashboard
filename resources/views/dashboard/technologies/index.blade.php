@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Technologies') }}
                        <div class="float-right mr-2">
                            <a class="btn btn-primary" href="{{ route('technologies.create') }}">Add New Technology</a>
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
                              <th>Image</th>
                              <th>Name</th>
                              <th>Discovery</th>
                              <th>Action</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($technologies as $technology)
                            <tr>
                              <td>
                                  <img src="{{$technology->image ? asset('storage/uploads/technologies/'.$technology->image) : asset('/assets/img/default.png')}}" width="100px" height="100px" alt="image">
                              </td>
                              <td>{{ $technology->name }}</td>
                              <td>{{ $technology->discovery }}</td>
                              <td>
                                <a href="{{ url('/technologies/show/' . $technology->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ url('/technologies/edit/' . $technology->id) }}" class="btn btn-warning">Edit</a>
                              </td>
                                <td>
                                    <form action="{{ route('technologies.delete', $technology->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                            {{ $technologies->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

