@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <a href="{{ route('tickets.create') }}" class="btn btn-primary" style="float:right">Create ticket</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            @forelse ($tickets as $ticket)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $ticket->user->user_name  }}</td>
                                    <td>{{ $ticket->img }}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#form">
                                            See Modal with Form
                                        </button>  
                                    </td>
                                </tr>
                            </tbody>
                            <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header border-bottom-0">
                                      <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        @forelse ($payment as $k => $v)
                                            {{ $k }} : {{ $v }}
                                        @empty
                                         not existed
                                        @endforelse
                                       
                                    </div>
                                </div>
                            </div>
                            @empty
                                <li class="list-group-item">
                                    No tickets Added
                                </li>
                            @endforelse
                        </table>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection