@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Careers') }}
                        <div class="float-right mr-2">
                            <a class="btn btn-primary" href="{{ route('careers.create') }}">Add New Career</a>
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
                              <th>Deadline</th>
                              <th>Location</th>
                              <th>Level</th>
                              <th>Term</th>
                              <th>Action</th>
                              <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($careers as $career)
                            <tr>
                              <td>{{ $career->title }}</td>
                              <td>{{ $career->deadline }}</td>
                              <td>{{ $career->location }}</td>
                              <td>
                                  @if($career->level)
                                      {{ strtoupper($career->level)}}
                                  @endif
                              </td>
                              <td>
                                  @if($career->term)
                                      {{ strtoupper(str_replace('_', ' ', $career->term))}}
                                  @endif
                                 </td>
                              <td>
                                <a href="{{ url('/careers/show/' . $career->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ url('/careers/edit/' . $career->id) }}" class="btn btn-warning">Edit</a>
                              </td>
                                <td>
                                    <form action="{{ route('careers.delete', $career->id ) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $careers->links() }}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('javascript')

@endsection

