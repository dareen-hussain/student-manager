
# Student Manager

A simple Laravel web application for managing student records.

## Features
- Display all students.
- Add new students.
- Edit student information.
- Delete students with confirmation.
- Seed sample student data.

## Technologies
- PHP
- Laravel
- MySQL / SQLite
- Blade Templates

## Student Information
Each student has:
- ID
- Name
- Grade

## Installation and Setup

1. Clone the repository:
   git clone https://github.com/dareen-hussain/student-manager.git

2. Open the project folder:
   cd student-manager

3. Install dependencies:
   composer install

4. Create the environment file:
   copy .env.example .env

5. Generate the application key:
   php artisan key:generate

6. Create the SQLite database file if it does not exist:
   New-Item -ItemType File database/database.sqlite

7. Run migrations and seed sample data:
   php artisan migrate --seed

8. Start the Laravel server:
   php artisan serve

9. Open the application:
   http://127.0.0.1:8000

## Sample Students
- Ali — 90
- Lama — 85
- Diala — 95
