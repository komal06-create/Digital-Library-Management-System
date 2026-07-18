<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian Dashboard | Digital Library Management System</title>

    <link rel="stylesheet" href="../assets/css/dashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<div class="sidebar">

    <div class="logo">
        <h2>📚 Library</h2>
        <p>Librarian Panel</p>
    </div>

    <ul>

        <li class="active">
            <a href="dashboard.php">
                <i class="fa-solid fa-house"></i> Dashboard
            </a>
        </li>

        <li>
            <a href="issue_book.php">
                <i class="fa-solid fa-book-open-reader"></i> Issue Book
            </a>
        </li>

        <li>
            <a href="return_book.php">
                <i class="fa-solid fa-rotate-left"></i> Return Book
            </a>
        </li>

        <li>
            <a href="manage_students.php">
                <i class="fa-solid fa-user-graduate"></i> Students
            </a>
        </li>

        <li>
            <a href="search_books.php">
                <i class="fa-solid fa-magnifying-glass"></i> Search Books
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

<h1>Librarian Dashboard</h1>

<div class="admin-profile">
Welcome, Librarian 👋
</div>

</header>

<div class="cards">

<div class="card">
<i class="fa-solid fa-book"></i>
<h2>1500</h2>
<p>Total Books</p>
</div>

<div class="card">
<i class="fa-solid fa-book-open-reader"></i>
<h2>420</h2>
<p>Issued Books</p>
</div>

<div class="card">
<i class="fa-solid fa-rotate-left"></i>
<h2>18</h2>
<p>Returned Today</p>
</div>

<div class="card">
<i class="fa-solid fa-clock"></i>
<h2>26</h2>
<p>Due Today</p>
</div>

</div>

<div class="recent">

<h2>Today's Activities</h2>

<table>

<tr>
<th>Student</th>
<th>Book</th>
<th>Status</th>
<th>Date</th>
</tr>

<tr>
<td>Komal</td>
<td>Python Programming</td>
<td>Issued</td>
<td>18 July 2026</td>
</tr>

<tr>
<td>Rahul</td>
<td>DBMS</td>
<td>Returned</td>
<td>18 July 2026</td>
</tr>

<tr>
<td>Priya</td>
<td>Artificial Intelligence</td>
<td>Issued</td>
<td>18 July 2026</td>
</tr>

<tr>
<td>Aman</td>
<td>Operating System</td>
<td>Due Today</td>
<td>18 July 2026</td>
</tr>

</table>

</div>

</div>

</body>
</html>