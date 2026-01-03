@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-warning">
        Edit Task
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Priority</label>
                <select name="priority" class="form-select">
                    <option value="Low" {{ $task->priority=='Low'?'selected':'' }}>Low</option>
                    <option value="Medium" {{ $task->priority=='Medium'?'selected':'' }}>Medium</option>
                    <option value="High" {{ $task->priority=='High'?'selected':'' }}>High</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-select">
                    <option value="Pending" {{ $task->status=='Pending'?'selected':'' }}>Pending</option>
                    <option value="Completed" {{ $task->status=='Completed'?'selected':'' }}>Completed</option>
                </select>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

@endsection
