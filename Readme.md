# Authentication System

This is a simple authentication system built with PHP, MySQL, and HTML/CSS. It allows users to register, login, and access a protected dashboard.

## Features

- User registration with input validation
- Secure password hashing
- User login and session management
- Protected dashboard accessible only to logged-in users
- Logout functionality

## Requirements

- PHP 7.0 or higher
- MySQL database
- Apache web server (or any web server that supports PHP)

## Installation

1.  Clone the repository to your web server's document root (e.g., `htdocs` in XAMPP).
2.  Create a MySQL database named `auth_system9`.
3.  Import the `auth_system9.sql` file into the database to create the `users` table.
4.  Update the database configuration in `index.php` with your MySQL credentials:

    ```php
    $host = 'localhost';
    $dbname = 'auth_system9';
    $username = 'root';
    $password = '';
    ```

5.  Access the application through your web browser (e.g., `http://localhost/Testcase/index.php`).

## Usage

-   **Registration:**
    -   Navigate to the registration page (`index.php?page=register`).
    -   Fill out the registration form with valid information.
    -   Click the "Register" button to create a new account.
-   **Login:**
    -   Navigate to the login page (`index.php?page=login`).
    -   Enter your username and password.
    -   Click the "Login" button to access the dashboard.
-   **Dashboard:**
    -   Once logged in, you will be redirected to the dashboard (`dashboard.php`).
    -   The dashboard displays a welcome message and provides a logout link.
-   **Logout:**
    -   Click the "Logout" link on the dashboard to end your session.

## File Structure


## Security

-   User passwords are securely hashed using PHP's `password_hash()` function.
-   Input validation is performed to prevent common security vulnerabilities.
-   Session management is used to protect the dashboard from unauthorized access.

## Customization

## Contributing

Feel free to contribute to this project by submitting pull requests with bug fixes, new features, or improvements to the documentation.