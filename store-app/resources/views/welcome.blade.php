<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cookie Clicker</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-red-200">
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold">Cookie Clicker</a>
                <div class="hidden md:flex space-x-4">
                    <a href="#" class="text-gray-700">Home</a>
                    <a href="#" class="text-gray-700">About</a>
                    <a href="#" class="text-gray-700">Contact</a>
                </div>
                <div class="md:hidden">
                    <button id="menu-btn" class="focus:outline-none">☰</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8 text-center">
        <h1 class="text-5xl mt-8 animate-bounce">Cookie Clicker Game</h1>
        <p id="counter" class="text-2xl mt-4">Cookies: 0</p>
        <button id="cookie-btn" class="bg-blue-500 text-white rounded-full w-32 h-32 mt-8">🍪</button>

        <div class="shop mt-8">
            <h2 class="text-3xl mb-4">Shop</h2>
            <button id="upgrade-click" class="bg-green-500 text-white rounded px-4 py-2 mb-4">Upgrade Click (Cost: 10 Cookies)</button><br>
            <button id="auto-clicker" class="bg-green-500 text-white rounded px-4 py-2">Buy Auto-Clicker (Cost: 50 Cookies)</button>
        </div>
    </div>

    <script>
        let cookies = 0;
        let cookiesPerClick = 1;
        let autoClickerCount = 0;
        let autoClickerCost = 50;

        document.getElementById('cookie-btn').onclick = function () {
            cookies += cookiesPerClick;
            document.getElementById('counter').textContent = 'Cookies: ' + cookies;
        };

        document.getElementById('upgrade-click').onclick = function () {
            let upgradeCost = 10 + (cookiesPerClick-1) * 5;
            if (cookies >= upgradeCost) {
                cookies -= upgradeCost;
                cookiesPerClick++;
                document.getElementById('counter').textContent = 'Cookies: ' + cookies;
                this.textContent = `Upgrade Click (Cost: ${10 + cookiesPerClick * 5} Cookies)`;
            } else {
                alert('Not enough cookies to upgrade!');
            }
        };

        document.getElementById('auto-clicker').onclick = function () {
            if (cookies >= autoClickerCost) {
                cookies -= autoClickerCost;
                autoClickerCount++;
                autoClickerCost = Math.floor(autoClickerCost * 1.1);
                document.getElementById('counter').textContent = 'Cookies: ' + cookies; 
                this.textContent = 'AutoClickers (Cost:' + autoClickerCost + 'Cookies';

                // Start auto-clicking every second for each auto-clicker
                setInterval(function () {
                    cookies += cookiesPerClick;
                    document.getElementById('counter').textContent = 'Cookies: ' + cookies;
                }, 1000);
            } else {
                alert('Not enough cookies to buy auto-clicker!');
            }
        };

        document.getElementById('menu-btn').onclick = function () {
            // Add toggle functionality for mobile menu
        };
    </script>
</body>

</html>
