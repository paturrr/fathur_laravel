{{-- filepath: c:\xampp\htdocs\fathur_laravel_auth\resources\views\games\index.blade.php --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Game Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            font-family: 'Poppins', sans-serif;
            color: #fff;
        }
    
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
    
        .table thead th {
            background-color: #111;
            color: #0ff;
        }
    
        .table tbody tr:nth-child(even) {
            background-color: #222;
        }
    
        .table tbody tr:nth-child(odd) {
            background-color: #111;
        }
    
        .navbar {
            background-color: #212529;
            position: relative;
        }
    
        .navbar::after {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            height: 2px;
            background: #0ff;
            box-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff;
            bottom: 0;
        }
    
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #0ff;
        }
    
        .navbar-nav .nav-link {
            color: #0ff;
            transition: color 0.3s;
        }
    
        .navbar-nav .nav-link:hover {
            color: #fff;
        }
    
        h1 {
            text-align: center;
            margin: 20px 0;
            color: #0ff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Game Tracker</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-decoration-none">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Daftar Game Saya</h1>
        <div class="table-responsive">
            <table class="table table-bordered text-white">
                <thead>
                    <tr>
                        <th>Judul Game</th>
                        <th>Platform</th>
                        <th>Status</th>
                        <th>Terakhir Dimainkan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($games as $game)
                    <tr>
                        <td>{{ $game->game_title }}</td>
                        <td>{{ $game->platform }}</td>
                        <td>{{ $game->status }}</td>
                        <td>{{ $game->last_played }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>