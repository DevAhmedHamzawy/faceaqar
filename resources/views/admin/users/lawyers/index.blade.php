@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <a href="{{ route('lawyers.create') }}" class="btn btn-primary" style="float:right">Create lawyer</a>
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
                            @forelse ($lawyers as $lawyer)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $lawyer->name  }}</td>
                                    <td>{{ $lawyer->img }}</td>
                                    <td>
                                        <a href="{{ route('lawyers.show', $lawyer->name) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('lawyers.edit', $lawyer->name) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('lawyers.destroy', $lawyer->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                    No lawyers Added
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