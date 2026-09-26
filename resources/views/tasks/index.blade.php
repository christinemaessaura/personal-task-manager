<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <h1>Personal Task Manager</h1>

    <p>Keep track of your tasks and deadlines.</p>

    <a href="{{ route('tasks.create') }}" class="add-button">
        + Add New Task
    </a>

    <h2>My Tasks</h2>

    @if ($tasks->count() > 0)

        @foreach ($tasks as $task)

            <div class="task-card">

                <h3>{{ $task->task_name }}</h3>

                <p>{{ $task->description }}</p>

                <p class="status">
                    Status: {{ $task->status }}
                </p>

                <p>
                    Due Date: {{ $task->due_date }}
                </p>

                <div class="task-actions">

                    <a href="{{ route('tasks.edit', $task->id) }}"
                       class="edit-button">
                        Edit
                    </a>

                    <form action="{{ route('tasks.destroy', $task->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="delete-button"
                                onclick="return confirm('Are you sure you want to delete this task?')">
                            Delete
                        </button>

                    </form>

                    <form action="{{ route('tasks.status', $task->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('PATCH')

                        <button type="submit" class="status-button">
                            Mark as {{ $task->status === 'Pending' ? 'Completed' : 'Pending' }}
                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    @else

        <p>No tasks yet.</p>

    @endif

</div>

</body>
</html>