<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #2c3e50;
            color: #ecf0f1;
            transition: all 0.3s;
        }

        .sidebar.collapsed {
            width: 0;
            overflow: hidden;
        }

        .sidebar .logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #34495e;
        }

        .sidebar .logo img {
            width: 100%;
            height: auto;
            max-height: 80px;
        }

        .sidebar ul.nav-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul.nav-links li {
            border-bottom: 1px solid #34495e;
        }

        .sidebar ul.nav-links li a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #bdc3c7;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar ul.nav-links li a:hover,
        .sidebar ul.nav-links li a.active {
            background-color: #1abc9c;
            color: #fff;
        }

        .sidebar ul.nav-links li a i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 300px;
            transition: margin-left 0.3s, width 0.3s;
        }

        .main-content.collapsed {
            margin-left: 0;
            width: 100%;
        }

        .toggle-btn {
            position: fixed;
            top: 10px;
            left: 260px; /* Slightly after sidebar */
            z-index: 1001;
            transition: left 0.3s;
        }
        .sidebar.collapsed + .toggle-btn {
            left: -20px; /* Move to left edge when sidebar is hidden */
        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="logo d-flex align-items-center justify-content-center px-3 py-2">
            <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" style="max-height: 60px; width: auto;">
        </div>
        <ul class="nav-links">
            <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="#"><i class="fas fa-clipboard-list"></i> Booking Reports</a></li>
            <li><a href="#"><i class="fas fa-money-bill-wave"></i> TOPAY & COD Reports</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> OUTGOING Reports</a></li>
            <li><a href="#"><i class="fas fa-sign-in-alt"></i> INCOMING Reports</a></li>
            <li><a href="#"><i class="fas fa-box-open"></i> HELD UP Reports</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i> PINCODE</a></li>
        </ul>
    </div>
    
    <!-- NEW toggle button placed after sidebar -->
    <button class="toggle-btn btn btn-light" id="toggleSidebar">
        <i class="fas fa-bars"></i>
    </button>    

    <div class="main-content" id="mainContent">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm mb-4">
            <div class="container-fluid">
                <span class="navbar-brand">Dashboard1</span>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Bootstrap & JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('mainContent');
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('collapsed');
            this.classList.toggle('collapsed'); // To trigger left shift of button
        });
    </script>
</body>
</html>
