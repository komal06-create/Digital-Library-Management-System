<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Digital Library Management System</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:#eef2ff;
}

.login-box{

width:420px;

background:white;

padding:40px;

border-radius:15px;

box-shadow:0 10px 25px rgba(0,0,0,.15);

}

.login-box h1{

text-align:center;

color:#1E3A8A;

margin-bottom:10px;

}

.login-box p{

text-align:center;

margin-bottom:30px;

color:#666;

}

input{

width:100%;

padding:14px;

margin-bottom:18px;

border:1px solid #ccc;

border-radius:8px;

font-size:15px;

}

select{

width:100%;

padding:14px;

margin-bottom:20px;

border-radius:8px;

font-size:15px;

}

button{

width:100%;

padding:14px;

background:#1E3A8A;

color:white;

border:none;

border-radius:8px;

font-size:16px;

cursor:pointer;

transition:.3s;

}

button:hover{

background:#16306e;

}

.forgot{

text-align:center;

margin-top:20px;

}

.forgot a{

text-decoration:none;

color:#1E3A8A;

}

</style>

</head>

<body>

<div class="login-box">

<h1>📚 Library Login</h1>

<p>Digital Library Management System</p>

<form>

<input type="text" placeholder="Username">

<input type="password" placeholder="Password">

<select>

<option>Select User</option>

<option>Admin</option>

<option>Librarian</option>

<option>Student</option>

</select>

<button type="submit">

Login

</button>

</form>

<div class="forgot">

<a href="forgot_password.php">

Forgot Password?

</a>

</div>

</div>

</body>

</html>