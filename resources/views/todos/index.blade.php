@extends('layouts.parent')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Todo List</div>

                    <div class="card-body">
                        <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Add Todo</a>

                        @if ($todos->isEmpty())
                            <div class="alert alert-info" role="alert">
                                No todos found.
                            </div>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($todos as $todo)
                                            <tr>
                                                <td>{{ $todo->title }}</td>
                                                <td>{{ $todo->description }}</td>
                                                <td>{{ $todo->status }}</td>
                                                <td>
                                                    <a href="{{ route('todos.edit', $todo->id) }}"
                                                        class="btn \ btn-primary"><i class="bi bi-pencil"></i></a>
                                                    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
