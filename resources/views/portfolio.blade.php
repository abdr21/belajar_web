<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <h1>Portfolio</h1>
        <p>Explore our portfolio of projects and achievements.</p>

        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Our Work</h2>
        <p>Discover the projects we have worked on and the impact we have made.</p>
        <!-- You can add more content here -->
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        <p>Follow us on:
            <a href="https://twitter.com/yourcompany">Twitter</a>,
            <a href="https://facebook.com/yourcompany">Facebook</a>,
            <a href="https://instagram.com/yourcompany">Instagram</a>
        </p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</body>
</html>