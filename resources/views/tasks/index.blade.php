@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="mb-0">My Tasks</h3>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">
        + Add Task
    </a>
</div>

{{-- Success message --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body p-0">
        <table class="table table-bordered table-hover mb-0">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th style="width: 220px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        {{-- Priority Badge --}}
                        <td>
                            <span class="badge
                                @if($task->priority === 'High') bg-danger
                                @elseif($task->priority === 'Medium') bg-warning text-dark
                                @else bg-success
                                @endif">
                                {{ $task->priority }}
                            </span>
                        </td>

                        {{-- Status Badge --}}
                        <td>
                            <span class="badge {{ $task->status === 'Completed' ? 'bg-success' : 'bg-secondary' }}">
                                {{ $task->status }}
                            </span>
                        </td>

                        {{-- Actions --}}
                        <td>
                            {{-- Mark as Completed --}}
                            @if($task->status === 'Pending')
                                <form action="{{ route('tasks.complete', $task) }}"
                                      method="POST"
                                      class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-success mb-1">
                                        Complete
                                    </button>
                                </form>
                            @endif

                            {{-- Edit --}}
                            <a href="{{ route('tasks.edit', $task) }}"
                               class="btn btn-sm btn-warning mb-1">
                                Edit
                            </a>

                            {{-- Delete --}}
                            <form action="{{ route('tasks.destroy', $task) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger mb-1"
                                        onclick="return confirm('Are you sure you want to delete this task?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted p-4">
                            No tasks found. Click <strong>Add Task</strong> to create one.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
