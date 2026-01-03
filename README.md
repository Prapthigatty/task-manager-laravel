## Task Manager Application (Laravel)

A simple and clean Task Manager web application built using Laravel that allows users to create, view, update, and manage tasks efficiently.<br>
This project follows proper MVC architecture, uses Laravel form validation, resource routing, and is deployed with a cloud MySQL database.<br>
It is also deployed online using Railway.

## Live Demo

Deployed Application:https://task-manager-laravel-production-8405.up.railway.app/

## Features

Add new tasks<br>
Set task priority (Low / Medium / High)<br>
Track task status (Pending / Completed)<br>
Mark tasks as completed<br>
Persistent task storage using MySQL<br>
Clean and user-friendly interface<br>

**Task Behavior**

Every new task is created with Pending status by default<br>
Tasks can later be marked as Completed<br>
Priority levels include Low, Medium, and High<br>
All task data is stored in a database<br>

## Tech Stack

Backend: Laravel (PHP) <br>
Frontend: Blade Templates, HTML, CSS  <br>
Database: MySQL  <br>
Local: XAMPP <br>
Production: Railway MySQL  <br>
Deployment: Railway  <br>
Version Control: Git & GitHub  <br>

## Architecture
This project follows the MVC (Model-View-Controller) pattern:  <br>
Model: Task – Handles database operations  <br>
View: Blade templates – Handles UI  <br>
Controller: TaskController – Handles business logic  <br>

## Project Structure (Important Files)
app/  <br>
 └── Http/Controllers/TaskController.php  <br>
app/  <br>
 └── Models/Task.php  <br>
database/  <br>
 └── migrations/  <br>
resources/  <br>
 └── views/tasks/index.blade.php  <br>
routes/  <br>
 └── web.php  <br>

## Technical Expectations Covered
*Proper MVC usage  <br>
*Laravel form validation  <br>
*Resource routing  <br>
*Clean, readable, and maintainable code  <br>

## Local Setup Instructions
1️⃣ Clone the repository  <br>
git clone https://github.com/Prapthigatty/task-manager-laravel.git  <br>
cd task-manager-laravel  

2️⃣ Install dependencies  <br>
composer install  <br>

3️⃣ Create environment file  <br>
cp .env.example .env

4️⃣ Generate application key <br>
php artisan key:generate

5️⃣ Configure database in .env <br>
DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306  <br>
DB_DATABASE=task_manager  <br>
DB_USERNAME=root  <br>
DB_PASSWORD=  <br>

6️⃣ Run migrations <br>
php artisan migrate  

7️⃣ Start the server  <br>
php artisan serve

Visit  http://127.0.0.1:8000

# Deployment Details  <br>
The application is deployed using Railway  <br>
Uses Railway-hosted MySQL database

# Screenshots

### Home Page
![Home Page](screenshots/home.png)

### Add Task Page
![Add Task](screenshots/addtask.png)

# Author 

**Prapthi A**<br>
*MCA Student*<br>
*Aspiring Software Developer*
