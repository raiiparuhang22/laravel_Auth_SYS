
# Laravel Admin Registration & User Management System

## Overview

This project is a Laravel-based admin registration and user management system that features:

- Secure admin registration and login with hashed passwords  
- User CRUD (Create, Read, Update, Delete) operations  
- Data validation and error handling  
- Bootstrap 4 powered responsive UI for a clean and user-friendly experience  
- Role-based authentication using Laravel guards (customizable)  
- Session management and logout functionality  

## Features

- Admin registration and login system  
- Admin dashboard to manage users  
- Add, edit, delete, and list users  
- Form validations with error feedback  
- Flash messages for actions (success, error)  
- Responsive design for desktop and mobile  

## Technologies Used

- Laravel 9+  
- PHP 8+  
- MySQL or any compatible database  
- Bootstrap 4  
- Blade Templating Engine  

## Installation

1. Clone the repository:  
   ```bash
   git clone https://github.com/raiiparuhang22/laravel_Auth_SYS.git
   ```
2. Install dependencies:  
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Copy `.env.example` to `.env` and configure your database credentials.  
4. Generate application key:  
   ```bash
   php artisan key:generate
   ```
5. Run migrations:  
   ```bash
   php artisan migrate
   ```
6. Serve the application:  
   ```bash
   php artisan serve
   ```

## Usage

- Visit `/register` to create an admin account.  
- Login via `/login`.  
- Access the dashboard and manage users.

## Contributing

Feel free to open issues or submit pull requests to improve the project.

## License

This project is open-source and available under the MIT License.

---

*Created by [Paruhang Rai](https://github.com/raiiparuhang22/laravel_Auth_SYS.git)*
