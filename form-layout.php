<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List - Add New Task</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <style>
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }
        .checkbox-container input {
            width: 1.25rem;
            height: 1.25rem;
        }
    </style>

</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center" style="background-image: url('background-dbms.jpg'); background-size: cover; background-position: center;">
    <main class="w-full max-w-md p-8 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">To-Do List Manager</h1>
        
        <div class="form-container">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Add a New Task</h2>
            
            <form id="taskForm" method="post" action="add-task.php" class="space-y-4">
                <div>
                    <label for="task_name" class="block mb-2 font-medium text-gray-700">Task Name</label>
                    <input
                        type="text"
                        id="task_name"
                        name="task_name"
                        placeholder="Enter task title"
                        required
                        maxlength="100"
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                
                <div>
                    <label for="t_description" class="block mb-2 font-medium text-gray-700">Description</label>
                    <textarea
                        id="t_description"
                        name="t_description"
                        placeholder="Provide task details"
                        required
                        maxlength="500"
                        rows="4"
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    ></textarea>
                </div>
                
                <div>
                    <label for="due_date" class="block mb-2 font-medium text-gray-700">Due Date</label>
                    <input
                        type="date"
                        id="due_date"
                        name="due_date"
                        required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                
                <div>
                    <label for="priority_level" class="block mb-2 font-medium text-gray-700">Priority Level</label>
                    <select
                        id="priority_level"
                        name="priority_level"
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                        <option value="Low">Low Priority</option>
                        <option value="Medium" selected>Medium Priority</option>
                        <option value="High">High Priority</option>
                    </select>
                </div>
                
                <div class="checkbox-container">
                    <input
                        type="checkbox"
                        id="t_status"
                        name="t_status"
                        class="form-checkbox text-blue-600"
                    >
                    <label for="t_status" class="text-gray-700">Mark as Completed</label>
                </div>
                
                <button 
                    type="submit" 
                    name="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-md hover:bg-blue-600 transition duration-300 flex items-center justify-center"
                >
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create Task
                </button>
            </form>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('taskForm');
            const taskNameInput = document.getElementById('task_name');
            const descriptionInput = document.getElementById('t_description');
            const dueDateInput = document.getElementById('due_date');

            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            dueDateInput.setAttribute('min', today);

            form.addEventListener('submit', function(event) {
                // Reset previous error states
                taskNameInput.classList.remove('border-red-500');
                descriptionInput.classList.remove('border-red-500');
                dueDateInput.classList.remove('border-red-500');

                let hasError = false;

                // Validate Task Name
                if (taskNameInput.value.trim() === '') {
                    taskNameInput.classList.add('border-red-500');
                    hasError = true;
                }

                // Validate Description
                if (descriptionInput.value.trim() === '') {
                    descriptionInput.classList.add('border-red-500');
                    hasError = true;
                }

                // Validate Due Date
                const selectedDate = new Date(dueDateInput.value);
                const todayDate = new Date();
                
                if (selectedDate < todayDate) {
                    dueDateInput.classList.add('border-red-500');
                    hasError = true;
                }

                if (hasError) {
                    event.preventDefault();
                    alert('Please fill out all required fields correctly.');
                }
            });
        });
    </script>
</body>
</html>