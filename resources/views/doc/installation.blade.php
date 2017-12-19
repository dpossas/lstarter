@extends('layouts.doc')

@section('content')
    <h1>Installation</h1>
    <p>
        It is super simple to run <b>Laravel Starter</b>. First, you need to check if all the <a href="{{ route('documentation.requirements') }}">requirements</a> are installed on your system. After it, follow these steps:
    </p>
    <h3>1. Create a new Database</h3>
    <p>
        Create a new MySQL Database. We recommend that you use utf8 charset in your database. You can create it using the following command, or use your preferred database manager: <br/><br/>
        <code>
            CREATE DATABASE lstarter CHARACTER SET utf8 COLLATE utf8_general_ci;
        </code>
    </p>

    <h3>2. Extract the Code</h3>
    <p>
        Extract the code in a directory of your preference. Then, navigate to the project folder using the terminal and install all the composer packages with the command below: <br/><br/>
        <code>
            composer install
        </code>
    </p>
    <p>
        The composer packages installation can take a few minutes. After the installation, inside the project folder, find a file named:<br/><br/>
        <code>.env.example</code>
    </p>
    <p>
        Copy all the .env.example file content to a new file named:<br/><br/>
        <code>.env</code>
    </p>
    <p>
        Inside this new .env file, change the DATABASE section to use the database you have created in the first step:<br/><br/>
        <pre>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lstarter
DB_USERNAME=your_username
DB_PASSWORD=your_password
        </pre>
    </p>

    <h3>3. Creating the database tables and seeding the data</h3>
    <p>
        Now, inside your <b>Laravel Starter</b> project folder you can run the commands to create the database tables and seed the test data. If you want to seed the system with all the test data, run the command below:<br/><br/>
        <code>php artisan migrate --seed</code>
    </p>

    <h3>4. Running the System</h3>
    <p>
        Inside your <b>Laravel Starter</b> project folder, execute this command to generete de APP_KEY:<br/><br/>
        <code>php artisan key:generate</code><br/><br/>
    </p>
    <p>
        And this command to run a server in the http://localhost on the port 8000:<br/><br/>
        <code>php artisan serve</code><br/><br/>
    </p>
    <p>
        And then, access http://localhost:8000 to see <b>Laravel Starter</b> running.
    </p>

    <h3>5. Default Logins</h3>
    <p>
        When seed the system data, this will create some default logins:

        <ul>
            <li><del>SuperAdmin - email: <code>admin@domain.com</code>, password: <code>secret</code></del> <b class="text-danger">DISABLED IN LIVE PREVIEW</b></li>
            <li>Demo Admin - email: <code>demoadmin@domain.com</code>, password: <code>secret</code></li>
            <li>Demo User - email: <code>demo@domain.com</code>, password: <code>secret</code></li>
        </ul>
    </p>
@endsection