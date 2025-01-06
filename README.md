**TO-DO LIST APPLICATION**
Using PHP and MySQL
-A Dynamic To-Do List with Real-Time Updation

**Introduction**
The To-Do List Application is a web-based project designed to manage and organize daily tasks. It enables users to add, edit, delete, and mark tasks as completed. The project is built using PHP for server-side scripting and MySQL for database management, demonstrating how CRUD operations and database interaction are implemented in a real-world application.

**Objectives**
To develop a dynamic, database-driven application using PHP and MySQL.
To provide a platform for efficient task management.
To enhance understanding of web development and database integration.
To implement CRUD (Create, Read, Update, Delete) functionalities and ensure data persistence.

**Features**
Add Tasks: Users can create tasks by entering task details, such as name, description, due date and priority level.
View Tasks: Tasks are displayed dynamically, retrieved from the database.
Delete Tasks: Tasks can be permanently removed from the database.
Mark as Completed: Users can toggle the status of a task between pending and completed.
Responsive Design: The application is accessible on various devices, from desktops to mobile phones.

**Technologies Used**
**Front-End:**
HTML: For structuring the content.
CSS & Bootstrap: For styling and responsiveness.
**Back-End:**
PHP: For server-side processing and dynamic content rendering.
**Database:**
MySQL: For managing and storing task data.
Web Server:
XAMPP: For hosting the application locally during development.


**General Workflow**
The To-Do List Application performs three main actions: adding tasks, deleting tasks, and marking tasks as completed. Below is a simplified workflow with the SQL queries used at each step.
**Step 1: Adding a Task**
User Action: The user fills out a form with the task title, an optional description, due date and priority level(low, medium or high). Once completed, they click the "Create Task" button to submit the form.
Database Operation: An INSERT query is executed to save the new task to the database.
The status field defaults to pending.
Outcome: The task is added to the list and displayed when the page reloads.

**Step 2: Viewing Tasks**
User Action: When the user clicks the “Create Task” button, the task list is displayed, showing both pending and completed tasks.
The user is able to see all task details now, with options to delete a particular task or mark it as completed.
Additionally, the user can click the “Add Task” button at the top, which will redirect him to the form and add a new task.
Database Operation: A SELECT query is executed to retrieve all tasks from the database, sorted by the created_at timestamp in descending order.
Outcome: The tasks are displayed in order of creation, with pending and completed tasks shown distinctly.

**Step 3: Deleting a Task**
User Action: The user clicks the "Delete" button next to a specific task to remove it.
Database Operation: A DELETE query is executed to remove the task from the database based on its unique id.
Outcome: The task is permanently removed from the list and no longer appears on the webpage. Additionally, it is removed from the database table in the backend.

**Step 4: Marking a Task as Completed**
User Action: The user clicks "Mark as Completed" next to a task to update its status.
Database Operation: An UPDATE query is executed to set the status of the selected task to completed.
Outcome: The task is marked as completed and displayed in the "Completed" section of the task list. Additionally, it is marked as Completed in the database table in the backend.

**Learning Objectives**
Gained practical experience with CRUD operations in PHP and MySQL.
Understood how the frontend and backend communicate using HTTP requests to transfer data.
Learned how to collect user input through forms and process it in the backend
Learned how to generate dynamic content by updating the task list in real-time based on user interactions.

**Advantages**
User-Friendly Interface: Simplifies task management for end users.
Dynamic Updates: Data is dynamically fetched and rendered.
Data Persistence: MySQL ensures tasks are stored securely for long-term use.

**Future Scope**
User Authentication: Introduce login functionality to allow multiple users.
Categorisation: Can be extended with additional features such as user management and task categorization(work and personal tasks).
Reminders: Integrate notifications via email or SMS for upcoming tasks.

**Conclusion**
The To-Do List application effectively combines web development and database management, providing a simple yet functional solution for task tracking. Through the implementation of key CRUD operations, it demonstrates the ability to interact with databases using PHP and MySQL. This project has enhanced my understanding of form handling, SQL queries, and backend integration, while serving as a solid foundation for future web development projects.

