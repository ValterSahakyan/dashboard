@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('The Numbers') }}
                        <div class="float-right mr-2">
                            <a class="btn btn-primary" href="{{ route('numbers.create') }}">Add New Number</a>
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
                              <th>Title</th>
                              <th>Percent</th>
                              <th>Description</th>
                              <th>Action</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($numbers as $number)
                            <tr>
                              <td>{{ $number->title }}</td>
                              <td>{{ $number->percent }}</td>
                              <td>{!! $number->description !!}</td>
                              <td>
                                <a href="{{ url('/numbers/show/' . $number->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ url('/numbers/edit/' . $number->id) }}" class="btn btn-warning">Edit</a>
                              </td>
                                <td>
                                    <form action="{{ route('numbers.delete', $number->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $numbers->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

