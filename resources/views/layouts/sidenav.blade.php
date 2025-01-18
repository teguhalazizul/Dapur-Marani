<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside>
            <!-- Top Section -->
            <div class="top">
                <div class="logo">
                    <!-- Update Logo Path -->
                    <img src="{{ asset('images/logo.svg') }}" alt="Company Logo">
                    <h2>COM<span class="primary">PANY</span></h2>
                </div>
                <div id="close-btn" class="close">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <!-- Sidebar Navigation -->
            <div class="sidebar">
                <!-- Navigation Links -->
                <a href="">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard Budget Anggaran</h3>
                </a>
                <a href="" class="active">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Dashboard Pengeluaran</h3>
                </a>
                <a href=""
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main>
            <h1>Dashboard Content</h1>
            <!-- Add content or components here -->
        </main>
    </div>

    <!-- Include Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside>
            <!-- Top Section -->
            <div class="top">
                <div class="logo">
                    <!-- Update Logo Path -->
                    <img src="{{ asset('images/logo.svg') }}" alt="Company Logo">
                    <h2>COM<span class="primary">PANY</span></h2>
                </div>
                <div id="close-btn" class="close">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <!-- Sidebar Navigation -->
            <div class="sidebar">
                <!-- Navigation Links -->
                <a href="">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard Budget Anggaran</h3>
                </a>
                <a href="" class="active">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Dashboard Pengeluaran</h3>
                </a>
                <a href=""
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
                <form id="logout-form" action="" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main>
            <h1>Dashboard Content</h1>
            <!-- Add content or components here -->
        </main>
    </div>

    <!-- Include Custom JS -->
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
