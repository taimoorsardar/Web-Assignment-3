<!-- resources/views/student/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <!-- Add your stylesheets, scripts, and meta tags -->
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
