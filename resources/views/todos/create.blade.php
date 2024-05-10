@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Todo</div>

                    <div class="card-body">
                        <form action="{{ route('todos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select name="status" class="form-control" required>
                                    <option value="Todo">Todo</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Complete">Complete</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection