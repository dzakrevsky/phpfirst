<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f5f5f5;
            padding: 20px 0;
            border-bottom: 1px solid #ddd;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo img {
            width: 200px;
            height: auto;
        }

        .nav-menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu ul li {
            display: inline;
            margin-right: 20px;
        }

        .nav-menu ul li a {
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }

        main {
            padding: 20px;
        }

        .donate-section {
            background-color: #f9f9f9;
            padding: 40px 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .donate-section h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .donate-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        .donate-form select,
        .donate-form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .donate-form button {
            width: 100%;
            padding: 15px;
            background-color: #00aeef;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .donate-form button:hover {
            background-color: #0078a8;
        }

        footer {
            background-color: #f5f5f5;
            color: #666;
            text-align: center;
            padding: 20px 0;
            font-size: 16px;
            border-top: 1px solid #ddd;
        }

    </style>
    <header>
        <div class="header-container">
            <div class="logo">
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/organisations">About Us</a></li>
                    <li><a href="/organisations">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="donate-section">
            <div class="container">
                <h2>Donate Now</h2>
                <form action="{{ route('donate-form') }}" class="donate-form" method="post">
                    @csrf
                    <label for="organization">Choose an organization:</label>
                    <select name="organization" id="organization">
                        <option value="Mercy Housing">Mercy Housing</option>
                        <option value="Children’s Tumor Foundation">Children’s Tumor Foundation</option>
                        <option value="OEve’s Place">OEve’s Place</option>
                        <option value="WCA of Rochester and Monroe County">YWCA of Rochester and Monroe County</option>
                        <option value="The Foundation for Evangelism">The Foundation for Evangelism</option>
                        <option value="Quad City Animal Welfare Center">Quad City Animal Welfare Center</option>
                        <option value="The Side-Out Foundation">The Side-Out Foundation</option>
                        <option value="Tabernacle of Glory Central Campus, Inc">Tabernacle of Glory Central Campus, Inc</option>
                        <option value="Too Young to Wed">Too Young to Wed</option>
                        <option value="Para Los Niños">Para Los Niños</option>
                        <option value="Wine to Water">Wine to Water</option>
                        <option value="Metropolitan Ministries">Metropolitan Ministries</option>
                        <option value="United Way of the Lowcountry, Inc">United Way of the Lowcountry, Inc</option>
                        <option value="Kofi Annan Foundation">Kofi Annan Foundation</option>
                        <option value="Food For Life Global">Food For Life Global</option>
                        <option value="orgUnited Way of Wayne and Holmes Counties, Inc.2">United Way of Wayne and Holmes Counties, Inc.</option>
                    </select>
                    <label for="amount">Amount:</label>
                    <input type="number" name="amount" id="amount" min="1" step="1" required>
                    <button type="submit">Donate</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 CryptoBlago. All rights reserved.</p>
    </footer>
</body>
</html>
