<!-- resources/views/project/view.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Details</title>
    <!-- Add your stylesheets, scripts, and meta tags -->
    <style>
        /* Add your CSS styles here */
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
    </style>
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
            <h1>Project Details</h1>
            <!-- Display project-specific information -->
            <p>Project Name: {{ $project->name }}</p>
            <!-- Other project details -->
            <p>Project Description: {{ $project->description }}</p>
            <!-- Add more project-related details -->
        </section>

        <!-- Other sections and content -->

    </main>

    <footer>
        <!-- Footer information -->
        <p>&copy; 2023 Project Details</p>
    </footer>
</body>
</html>
