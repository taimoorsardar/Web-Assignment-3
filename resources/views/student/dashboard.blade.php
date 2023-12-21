<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 10px;
        }

        main {
            padding: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
        }

        /* Additional dashboard-specific styles */
        main section {
            margin-bottom: 20px;
        }

        main section h1 {
            font-size: 24px;
            color: #333;
        }

        main section h2 {
            font-size: 20px;
            color: #333;
        }

        main section p {
            font-size: 16px;
            color: #555;
        }
    </style>
    <!-- Add your other stylesheets, scripts, and meta tags -->
</head>
<body>
    <header>
        <!-- Navigation bar or header -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <!-- Other navigation links -->
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h1>Welcome to Your Dashboard</h1>
            <!-- Display student-specific information -->
            <p>Hello, {{ $student->name }}!</p>
            <!-- Other dashboard information -->
        </section>

        <section>
            <h2>Project Status</h2>
            <!-- Display project status information -->
            <p>You have {{ $projectsCount }} projects.</p>
            <!-- List of projects or project-related information -->
        </section>

        <!-- Other sections and content -->

    </main>

    <footer>
        <!-- Footer information -->
        <p>&copy; 2023 Student Dashboard</p>
    </footer>
</body>
</html>
