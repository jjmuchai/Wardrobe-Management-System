
# 
Wardrobe Management System

Overview

The Wardrobe Management System is a web application that allows users to:

Register and log in (authentication).

Add, edit, and delete clothing items.

Categorize clothing items (e.g., tops, bottoms, shoes).

Filter and search for clothing items.

Use a responsive and user-friendly interface.

Technologies Used

Backend: Laravel 11 (PHP framework)

Frontend: Vue 3 (JavaScript framework)

Database: MySQL

Authentication: Laravel Sanctum

Styling: TailwindCSS

Prerequisites

Ensure you have the following installed on your system:

PHP (>= 8.1)

Composer (for Laravel dependencies)

MySQL (for database management)

Node.js & npm (for Vue frontend)

WSL/Ubuntu Terminal (for Linux users)

Project Structure

wardrobe-management-system
│── backend/         # Laravel API backend
│── frontend/        # Vue 3 frontend
│── README.md        # Documentation

 1. Project Setup

Step 1: Clone the Repository

 git clone <repository-url>
 cd wardrobe-management-system

Step 2: Set Up Laravel Backend

cd backend
composer install
cp .env.example .env
php artisan key:generate

Step 3: Configure Database

Open the .env file and set up your database connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wardrobe_db
DB_USERNAME=root
DB_PASSWORD=

Run migrations to set up the database:

php artisan migrate

Step 4: Set Up Authentication

composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

Step 5: Start the Backend Server

php artisan serve

2. Set Up Vue 3 Frontend

Step 1: Install Node Dependencies

cd ../frontend
npm install

Step 2: Configure TailwindCSS

npx tailwindcss init -p

Modify tailwind.config.js:

module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {},
  },
  plugins: [],
};

Step 3: Start the Vue Server

npm run dev

Step 4: Open in Browser

http://localhost:5173

3. API Endpoints

Authentication

Register: POST /api/register

Login: POST /api/login

Logout: POST /api/logout

Clothing Management

Get all items: GET /api/clothing

Add an item: POST /api/clothing

Update an item: PUT /api/clothing/{id}

Delete an item: DELETE /api/clothing/{id}

4. Project Structure

wardrobe-management-system
│── backend/         # Laravel API backend
│── frontend/        # Vue 3 frontend
│── README.md        # Documentation

5. Running the Full System

Start Laravel backend:

cd backend
php artisan serve

Start Vue frontend:

cd frontend
npm run dev

Open in browser:

http://localhost:5173

6. Additional Commands

Run Database Migrations

php artisan migrate --seed

Clear Cache & Config

php artisan config:clear
php artisan cache:clear
php artisan route:clear

Build Vue for Production

npm run build

7. Troubleshooting

If npm run dev fails, try deleting node_modules and reinstalling:

rm -rf node_modules package-lock.json
npm install

If Laravel migrations fail, ensure MySQL is running and check .env settings.

For CORS issues, install Laravel CORS:

composer require fruitcake/laravel-cors
php artisan vendor:publish --tag="cors"


