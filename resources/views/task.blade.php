<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Brollo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/user') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/workspace') }}">Workspace</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/workspace_user') }}">Workspace Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/card') }}">Cards</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="text-center">Tasks Details</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">username</th>
                    <th scope="col">Workspace Id</th>
                    <th scope="col">Card Id</th>
                    <td scope="col">Status</td>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{ $id }}</th>
                    <td>{{ $name }}</td>
                    <td>{{ $workspace_id }}</td>
                    <td>{{ $card_id }}</td>
                    <td>{{ $status }}</td>
                    <td>{{ $action }}</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob Thornton</td>
                    <td>wrkspid502</td>
                    <td>101</td>
                    <td>Doing</td>
                    <td>edit</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry Bird</td>
                    <td>wrkspid503</td>
                    <td>102</td>
                    <td>Done</td>
                    <td>edit</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
