<!-- resources/views/todos/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Todo</div>

                    <div class="card-body">
                        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" value="{{ $todo->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control" required>{{ $todo->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" class="form-control" required>
                                    <option value="Todo" {{ $todo->status == 'Todo' ? 'selected' : '' }}>Todo</option>
                                    <option value="In Progress" {{ $todo->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="Complete" {{ $todo->status == 'Complete' ? 'selected' : '' }}>Complete</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
