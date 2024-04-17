Project Overview:
The task was to create a simple HTML form using Laravel that captures user data. validate it, stores it in a database, and redirects the user to a thank you page upon successful submission.

Technical Details:
The project consists of a Laravel application with a database table named users to store user data. The users table has columns for the user's name, email, comments, and timestamps for creation and updates. Validation rules are implemented using Laravel's built-in validation system. Specifically, the name field is required and should be a string with a maximum length of 255 characters. The email field is required, must be a valid email format, and should be unique in the users table. The comments field is optional and can be a string.

Running the Code:
To run the project, follow these steps:

1 Clone the project repository to your local machine.
2 Navigate to the project directory in your terminal.
3 If you're using Docker, ensure Docker is installed and running on your machine.
4 Build the Docker image using the provided Dockerfile.
5 Run the Docker container, mapping the appropriate ports.
6 Access the application in your web browser.

Additional Features:
The basic requirements were followed strictly, and no additional features were included beyond what was specified. However, depending on the project requirements, additional features such as user authentication, email notifications upon form submission, or enhanced form styling could be implemented.


Testing:
Testing was conducted using PHPUnit, Laravel's built-in testing framework. Unit tests were written to ensure that form validation and submission functionality worked correctly. To execute the tests, run the following command in the terminal:

php artisan test