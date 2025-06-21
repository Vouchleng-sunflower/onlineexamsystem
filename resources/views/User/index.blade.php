@extends('layout.dashboard')
@section('content')
<style>
    body {
        min-height: 100vh;
        display: flex;
        font-family: "Barlow", sans-serif;
    }

    .sidebar {
        width: 220px;
        background: #6f4bff;
        color: #fff;
        min-height: 100vh;
        padding-top: 60px;
        position: fixed;
    }

    .sidebar a {
        color: #fff;
        display: block;
        padding: 12px 20px;
        text-decoration: none;
    }

    .sidebar a:hover {
        background: #f9f9fa;
        color: black
    }

    .main-content {
        margin-left: 220px;
        width: 100%;
        padding: 20px;
    }

    .navbar {
        background: #6f4bff;
        color: #fff;
        position: fixed;
        width: 100%;
        height: 80px;
        z-index: 1000;
    }

    .navbar .form-inline {
        display: flex;
        align-items: center;
    }

    .navbar .form-inline input[type="text"] {
        margin-right: 8px;
    }
</style>


<div class="sidebar">

    <a href="#">Dashboard</a>
    <a href="#">Exams</a>
    <a href="#">Results</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <form class="d-flex ms-auto" method="GET" action="#">
            <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light me-2" type="submit">Search</button>
        </form>
        <form method="POST" action="#">
            @csrf
            <button class="btn btn-danger ms-2" type="submit">Logout</button>
        </form>
    </div>
</nav>
<h1>Hello it's me</h1>
@endsection