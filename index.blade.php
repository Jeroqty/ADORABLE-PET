<!DOCTYPE html>
<html>
<head><title>Animal Shelter Homepage</title></head>
<body>
    <h1>Welcome to the Animal Shelter</h1>
    <p>Find your new furry friend today!</p>

    <a href="{{ route('adopt') }}">Adopt Now</a> 

<style>
    /* General reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

/* Body styling */
body {
    background: #f4f6f9;
    color: #2c3e50;
    text-align: center;
    padding: 50px;
}

/* Heading */
h1 {
    font-size: 3rem;
    color: #1abc9c;
    margin-bottom: 20px;
}

/* Paragraph */
p {
    font-size: 1.2rem;
    margin-bottom: 30px;
}

/* Links styled as buttons */
a {
    display: inline-block;
    background: #1abc9c;
    color: #fff;
    padding: 12px 25px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s ease, transform 0.2s ease;
}

/* Hover effect */
a:hover {
    background: #16a085;
    transform: scale(1.05);
}
    </style>
</body>
</html>
