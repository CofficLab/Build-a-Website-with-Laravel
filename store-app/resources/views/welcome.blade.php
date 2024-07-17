<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 20px;
        }
        .card {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    Welcome to my awesome API Store
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-inline" action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="row w-100">
                <div class="form-group col-md-3 mr-2">
                    <label for="email" class="mr-2">Email address:</label>
                    <input type="email" class="form-control w-80" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group col-md-3 mr-2">
                    <label for="pwd" class="mr-2">Password:</label>
                    <input type="password" class="form-control w-80" id="pwd" name="password" required>
                </div>
                <div class="form-group col-md-3 mr-2">
                    <label for="password_confirmation" class="mr-2">Confirm Password:</label>
                    <input type="password" class="form-control w-80" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="form-group form-check col-md-1 mr-4"></div>
                <div class="form-group col-lg-2">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </form>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Country Info">
                    <div class="card-body">
                        <h5 class="card-title">Country Info API</h5>
                        <p class="card-text">Here is the description</p>
                        <a href="#" class="btn btn-primary">Go Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Area Code">
                    <div class="card-body">
                        <h5 class="card-title">Area Code API</h5>
                        <p class="card-text">Here is the description</p>
                        <a href="#" class="btn btn-primary">Go Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="IP Region">
                    <div class="card-body">
                        <h5 class="card-title">IP Region API</h5>
                        <p class="card-text">Here is the description</p>
                        <a href="#" class="btn btn-primary">Go Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
