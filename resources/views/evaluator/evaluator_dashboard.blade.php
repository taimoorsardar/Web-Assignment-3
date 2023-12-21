<!-- resources/views/evaluator/evaluator_dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evaluator Dashboard</title>
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
            <!-- Display evaluator-specific information -->
            <p>Hello, {{ $evaluator->name }}!</p>
            <!-- Other dashboard information -->
        </section>

        <section>
            <h2>Assigned Projects</h2>
            <!-- Display projects assigned to the evaluator -->
            <p>You have {{ $assignedProjectsCount }} assigned projects.</p>
            <!-- List of assigned projects or related information -->
        </section>

        <!-- Other sections and content -->

    </main>

    <footer>
        <!-- Footer information -->
        <p>&copy; 2023 Evaluator Dashboard</p>
    </footer>
</body>
</html>
