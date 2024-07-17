<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ADD8E6; /* Baby blue background color */
            overflow-y: scroll; /* Ensure vertical scroll bar is always visible */
        }
        .container {
            margin-top: 20px;
            min-height: 100vh; /* Ensure the container takes at least the full viewport height */
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card {
            margin: 10px;
        }
        .alert {
            margin-top: 20px;
        }
        .form-inline {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .card-img-top {
            height: 150px;
            object-fit: cover;
        }
        .card-body h5 {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }
        .card-body p {
            font-size: 0.9rem;
            color: #666;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .header {
            background-color: #f8f9fa;
            padding: 15px 20px;
            border-bottom: 1px solid #e7e7e7;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        .back-button {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>API Store</h1>
    </div>
    <div class="container" id="main-content">
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
                <div class="form-group col-md-4">
                    <label for="email" class="mr-2">Email address:</label>
                    <input type="email" class="form-control w-100" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="pwd" class="mr-2">Password:</label>
                    <input type="password" class="form-control w-100" id="pwd" name="password" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="password_confirmation" class="mr-2">Confirm Password:</label>
                    <input type="password" class="form-control w-100" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="form-group col-md-12 text-right">
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
                        <p class="card-text">Get detailed information about countries, including demographics, economics, and more.</p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('country-info')">Go Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Area Code">
                    <div class="card-body">
                        <h5 class="card-title">Area Code API</h5>
                        <p class="card-text">Retrieve area code information for any region, including location details and timezone.</p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('area-code')">Go Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="IP Region">
                    <div class="card-body">
                        <h5 class="card-title">IP Region API</h5>
                        <p class="card-text">Identify the region associated with an IP address, including country, city, and ISP.</p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('ip-region')">Go Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Stocks">
                    <div class="card-body">
                        <h5 class="card-title">Financial Stocks API</h5>
                        <p class="card-text">Up to date information on the latest stock changes.</p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('stock-info')">Go Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Bank Verification">
                    <div class="card-body">
                        <h5 class="card-title">Bank Cards Verification</h5>
                        <p class="card-text">Verify Bank Cards with Identity.</p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('bank-verification')">Go Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Historic Weather">
                    <div class="card-body">
                        <h5 class="card-title">Historical Weathers</h5>
                        <p class="card-text">Present the historical weathers of China up to 30 years</p>
                        <a href="#" class="btn btn-primary" onclick="navigateTo('Hist-weather')">Go Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Screens -->
    <div class="container" id="country-info" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Country Info API Details</h2>
        <p>Get detailed information about countries, including:</p>
        <ul>
            <li>Demographics</li>
            <li>Economic Indicators</li>
            <li>Geographical Information</li>
            <li>Historical Data</li>
        </ul>
        <p><strong>Pricing:</strong> $0.01 per request, $10 per 1000 requests.</p>
    </div>
    <div class="container" id="area-code" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Area Code API Details</h2>
        <p>Retrieve area code information, including:</p>
        <ul>
            <li>Location Details</li>
            <li>Timezone Information</li>
            <li>Associated Cities and Regions</li>
            <li>Carrier Information</li>
        </ul>
        <p><strong>Pricing:</strong> $0.005 per request, $5 per 1000 requests.</p>
    </div>
    <div class="container" id="ip-region" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>IP Region API Details</h2>
        <p>Identify the region associated with an IP address, including:</p>
        <ul>
            <li>Country</li>
            <li>City</li>
            <li>ISP</li>
            <li>Latitude and Longitude</li>
        </ul>
        <p><strong>Pricing:</strong> $0.005 per request, $5 per 1000 requests.</p>
    </div>
    <div class="container" id="stock-info" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Stock Details</h2>
        <p>Identify the stock of choice, including the:</p>
        <ul>
            <li>Historical Stats</li>
            <li>Market Shares</li>
            <li>Profitability</li>
            <li>Current Pricing of the Stock</li>
        </ul>
        <p><strong>Pricing:</strong> $0.02 per request, $20 per 1000 requests.</p>
    </div>
    <div class="container" id="bank-verification" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Bank Verification API Details</h2>
        <p>Confirm the account with the user using Identification Verification:</p>
        <ul>
            <li>Using 身份证</li>
            <li>Passport</li>
            <li>Phone Number Verification</li>
        </ul>
        <p><strong>Pricing:</strong> $0.01 per request, $10 per 1000 requests.</p>
    </div>
    <div class="container" id="Hist-weather" style="display:none;">
        <button class="btn btn-secondary back-button" onclick="navigateBack()">Back</button>
        <h2>Historic Weather Details</h2>
        <p>Our database stores a lot of historic weather up to 30 years:</p>
        <ul>
            <li>Historical Precipitation</li>
            <li>Droughts and severe weather trends are available</li>
        </ul>
        <p><strong>Pricing:</strong> $0.01 per request, $10 per 1000 requests.</p>
    </div>
    

    <script>
        function navigateTo(sectionId) {
            document.getElementById('main-content').style.display = 'none';
            document.getElementById(sectionId).style.display = 'block';
        }

        function navigateBack() {
            document.querySelectorAll('.container').forEach(container => {
                container.style.display = 'none';
            });
            document.getElementById('main-content').style.display = 'block';
        }
    </script>
</body>
</html>
