<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <h1>Edit Task</h1>

    <p>Update your task details below.</p>

    <div class="form-card">

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">

            @csrf
            @method('PUT')

            <label>Task Name:</label>
            <input type="text" name="task_name" value="{{ $task->task_name }}" required>

            <label>Description:</label>
            <textarea name="description">{{ $task->description }}</textarea>

            <label>Status:</label>
            <select name="status">

                <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>
                    Pending
                </option>

                <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>
                    Completed
                </option>

            </select>

            <label>Due Date:</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}">

            <button type="submit" class="add-button">
                Update Task
            </button>

        </form>

        <br>

        <a href="{{ route('tasks.index') }}" class="back-button">
            ← Back to Tasks
        </a>

    </div>

</div>

</body>
</html>