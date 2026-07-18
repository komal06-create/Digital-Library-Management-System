<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Digital Library Management System</title>

    <link rel="stylesheet" href="../assets/css/dashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>

<div class="sidebar">

    <div class="logo">
        <h2>📚 Library</h2>
        <p>Admin Panel</p>
    </div>

    <ul>

        <li class="active">
            <a href="#"><i class="fa-solid fa-house"></i> Dashboard</a>
        </li>

        <li>
            <a href="manage_books.php">
            <i class="fa-solid fa-book"></i> Manage Books
            </a>
        </li>

        <li>
            <a href="manage_categories.php">
            <i class="fa-solid fa-layer-group"></i> Categories
            </a>
        </li>

        <li>
            <a href="manage_librarians.php">
            <i class="fa-solid fa-user-tie"></i> Librarians
            </a>
        </li>

        <li>
            <a href="reports.php">
            <i class="fa-solid fa-chart-column"></i> Reports
            </a>
        </li>

        <li>
            <a href="settings.php">
            <i class="fa-solid fa-gear"></i> Settings
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

    <h1>Admin Dashboard</h1>

    <div class="admin-profile">
        Welcome, Admin 👋
    </div>

</header>

<div class="cards">

<div class="card">

<i class="fa-solid fa-book"></i>

<h2>1500</h2>

<p>Total Books</p>

</div>

<div class="card">

<i class="fa-solid fa-user-graduate"></i>

<h2>1200</h2>

<p>Total Students</p>

</div>

<div class="card">

<i class="fa-solid fa-book-open-reader"></i>

<h2>486</h2>

<p>Books Issued</p>

</div>

<div class="card">

<i class="fa-solid fa-layer-group"></i>

<h2>18</h2>

<p>Categories</p>

</div>

</div>

<div class="recent">

<h2>Recent Activities</h2>

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

<td>Data Structures</td>

<td>Returned</td>

<td>17 July 2026</td>

</tr>

<tr>

<td>Priya</td>

<td>Artificial Intelligence</td>

<td>Issued</td>

<td>16 July 2026</td>

</tr>

</table>

</div>

</div>

</body>
</html>