# Contact Form Web Application

A simple, responsive contact form web application built with HTML, CSS, JavaScript, and PHP for backend message handling and MySQL database integration.

## Features

- Responsive and clean UI built with HTML and CSS.
- Client-side form validation using JavaScript.
- Server-side form handling in PHP.
- Sanitizes and secures user input to prevent SQL injection using prepared statements.
- Stores submitted messages (name, email, message) in a MySQL database.
- User feedback on successful or failed message submission.

## Demo

*Add a link to a live demo if available*

## Technologies Used

- HTML5
- CSS3
- JavaScript (Vanilla)
- PHP 7+
- MySQL / MariaDB

## Installation

1. Clone the repository to your local machine:

   ```
   git clone https://github.com/your-username/contact-form-app.git
   ```

2. Import the database schema (create a database and a `messages` table):

   ```
   CREATE TABLE messages (
     id INT AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(255) NOT NULL,
     email VARCHAR(255) NOT NULL,
     message TEXT NOT NULL,
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. Configure your PHP `contact.php`:

   - Update the database connection credentials (`host`, `username`, `password`, `database`) to match your environment.

4. Host the files on a PHP-enabled web server (XAMPP, MAMP, WAMP, LAMP, or a live server with PHP and MySQL).

## Usage

- Open `index.html` in your browser.
- Fill out the contact form with your name, email, and message.
- Submit the form. Client-side validation ensures all fields are filled correctly.
- On submission, the data is sent to `contact.php`, which saves it to the database.
- A success or error message is displayed based on the operation result.

## Code Highlights

- **HTML:** Basic structure with input fields for name, email, message.
- **CSS:** Simple styling for form layout, error messages, and responsive design.
- **JavaScript:** Form validation checking required fields and validating email format.
- **PHP:** Secure message handling with prepared statements to prevent SQL injection.

## Troubleshooting

- Ensure the PHP server and MySQL database are running correctly.
- Verify that database credentials in `contact.php` match your setup.
- Check permissions and error logs for debugging failed database connections or PHP errors.

## Contributing

Contributions are welcome! Please fork the repository and submit pull requests.

