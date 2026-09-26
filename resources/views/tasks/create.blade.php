<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container">

    <h1>Add New Task</h1>

    <p>Create a new task and set its due date.</p>

    <div class="form-card">

        <form action="{{ route('tasks.store') }}" method="POST">

            @csrf

            <label>Task Name:</label>
            <input type="text" name="task_name" required>

            <label>Description:</label>
            <textarea name="description"></textarea>

            <label>Due Date:</label>
            <input type="date" name="due_date">

            <button type="submit" class="add-button">
                Add Task
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