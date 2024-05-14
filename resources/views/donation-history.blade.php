<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation History</title>
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
            background-color: #1A153F;
            color: #fff;
            padding: 20px 0;
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
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        main {
            padding: 20px;
        }

        .donation-history-section {
            background-color: #f9f9f9;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .donation-history-section h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .donation-list {
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .donation-item {
            display: flex;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }

        .donation-info {
            flex-grow: 1;
        }

        .donation-info h3 {
            margin: 0;
        }

        .donation-info p {
            margin: 5px 0;
            color: #666;
        }

        button {
            padding: 10px 20px;
            background-color: #00aeef;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0078a8;
        }

        footer {
            background-color: #1A153F;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 16px;
        }

    </style>
    <header>
        <div class="header-container">
            <div class="logo"></div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="donate">Donate</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </nav>
            <div class="donation-amount">
                <p>Donation Amount: ${{ $donationAmount }}</p>


            </div>
        </div>
    </header>


    
    <main>
        <section class="donation-history-section">
            <div class="container">
                <h2>Donation History</h2>
                <div class="donation-list">
                    @foreach($donations as $donation)
                    <div class="donation-item">
                        <div class="donation-info">
                            <h3>{{ $donation->organization }}</h3>
                            <p>Amount: ${{ $donation->amount }}</p>
                            <p>Date: {{ $donation->created_at->format('F d, Y') }}</p>
                        </div>
                        <div class="donation-actions">
                            <form action="{{ route('delete-donation', ['id' => $donation->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                            <button onclick="showEditForm({{ $donation->id }})">Edit</button>
                        </div>
                    </div>
                    <div id="editForm{{ $donation->id }}" style="display: none;">
                        <form action="{{ route('update-donation', ['id' => $donation->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <label for="amount">New Amount:</label>
                            <input type="number" name="amount" id="amount" value="{{ $donation->amount }}" min="1" step="1" required>
                            <button type="submit">Update</button>
                        </form>
                    </div>

                    @endforeach

                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 CryptoBlago. All rights reserved.</p>
    </footer>
    <script>
        function showEditForm(donationId) {
            var editForm = document.getElementById("editForm" + donationId);
            if (editForm.style.display === "none") {
                editForm.style.display = "block";
            } else {
                editForm.style.display = "none";
            }
        }
    </script>

</body>
</html>
