<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="{{ url('frontend/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('frontend/') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ url('frontend/') }}/css/global.css" rel="stylesheet">
    <link href="{{ url('frontend/') }}/css/index.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <script src="{{ url('frontend/') }}/js/bootstrap.bundle.min.js"></script>
    <style>
        /* Custom CSS for sidebar and main content */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar .nav-link.active {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>

{{-- <script src="https://cdn.tiny.cloud/1/zmu4wpxfl63br46y3j6so2le1ssku2g35yns4poid05xcg3o/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="https://cdn.tiny.cloud/1/zmu4wpxfl63br46y3j6so2le1ssku2g35yns4poid05xcg3o/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</head>
<body>


<!-- Sidebar -->
<div class="sidebar d-flex flex-column p-3">
    <h2 class="text-center">Dashboard</h2>
    <hr>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{url('labs/create')}}" class="nav-link {{Request::path()=='labs/create' ? 'active' :''}}">Add Lab</a>
        </li>
        <li class="nav-item">
            <a href="{{url('happenings/create')}}" class="nav-link {{Request::path()=='happenings/create' ? 'active' :''}}">Add Happenings</a>
        </li>
       
    </ul>
</div>