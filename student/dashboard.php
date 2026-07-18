<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard | Digital Library Management System</title>

    <link rel="stylesheet" href="../assets/css/dashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<div class="sidebar">

    <div class="logo">
        <h2>📚 Library</h2>
        <p>Student Panel</p>
    </div>

    <ul>

        <li class="active">
            <a href="dashboard.php">
                <i class="fa-solid fa-house"></i> Dashboard
            </a>
        </li>

        <li>
            <a href="search_books.php">
                <i class="fa-solid fa-magnifying-glass"></i> Search Books
            </a>
        </li>

        <li>
            <a href="borrowed_books.php">
                <i class="fa-solid fa-book-open-reader"></i> Borrowed Books
            </a>
        </li>

        <li>
            <a href="profile.php">
                <i class="fa-solid fa-user"></i> Profile
            </a>
        </li>

        <li>
            <a href="feedback.php">
                <i class="fa-solid fa-comment"></i> Feedback
            </a>
        </li>

        <li>
            <a href="../login.php">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>
        </li>

    </ul>

</div>

<div class="main-content">

<header>

<h1>Student Dashboard</h1>

<div class="admin-profile">
Welcome, Komal 👋
</div>

</header>

<div class="cards">

<div class="card">
<i class="fa-solid fa-book"></i>
<h2>2</h2>
<p>Borrowed Books</p>
</div>

<div class="card">
<i class="fa-solid fa-calendar-days"></i>
<h2>12 Days</h2>
<p>Due In</p>
</div>

<div class="card">
<i class="fa-solid fa-indian-rupee-sign"></i>
<h2>₹0</h2>
<p>Fine</p>
</div>

<div class="card">
<i class="fa-solid fa-circle-check"></i>
<h2>5</h2>
<p>Books Returned</p>
</div>

</div>

<div class="recent">

<h2>My Borrowed Books</h2>

<table>

<tr>
<th>Book Name</th>
<th>Author</th>
<th>Issue Date</th>
<th>Due Date</th>
<th>Status</th>
</tr>

<tr>
<td>Python Programming</td>
<td>Reema Thareja</td>
<td>15 Jul 2026</td>
<td>30 Jul 2026</td>
<td>Issued</td>
</tr>

<tr>
<td>Artificial Intelligence</td>
<td>Stuart Russell</td>
<td>12 Jul 2026</td>
<td>27 Jul 2026</td>
<td>Issued</td>
</tr>

</table>

</div>

</div>

</body>
</html>