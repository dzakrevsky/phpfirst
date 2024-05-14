<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoBlago</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        header {
            background-color: #1A153F;
            color: #fff;
            padding: 5px 0 5px 0;
            display: flex;
            align-items: center;
            width: 100%;
        }

        header h1 {
            margin: 0;
            padding-left: 20px;
            font-size: 24px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        section {
            margin-bottom: 30px;
        }

        form {
            margin-bottom: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
        }

        form input[type="number"] {
            width: 100px;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            padding: 10px 20px;
            background-color: #00aeef;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        form button:hover {
            background-color: #0078a8;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 16px;
        }
        .oleg{
            position: center;
            display: flex;
            justify-content: center;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 100px;
        }
        .kall{
            display: flex;
            
            text-decoration: none;
            color: #fff;
            position: relative;

        }
        .kall1{
            display: flex;
            
            text-decoration: none;
            color: #fff;
            margin-right:30px;
            position: relative;

        }
        .secHeader{
            display:flex;
            align-items:center;
            margin-right: 100px;
            float: right;
            border-spacing: 50px;
            height: 100px;
        }
        .olo{
            padding-left: 20px;
            padding-right: 50px;
        }
        .btn1{
            background-color: #FFDC33;
            border: 0px;
            width: 130px;
            height:40px;
            color: #9966CC;
            margin-right: 30px;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }
        .btn2{
            background-color:#9966CC;
            border: 0px;
            width: 120px;
            height: 40px;
            color: #fff;
            cursor: pointer;
            border-radius: 10px;
            font-weight: bold;
        }
        a{
            text-decoration:none;
            color: black;
        }
        #home{
            display: flex;
            margin-top: 150px;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(233,245,44,1) 0%, rgba(255,188,0,1) 38%);
            align-items:center;
            justify-content: space-evenly;
            margin-left:0px;
            padding-left:0px;
        }
        .new{
            margin-bottom:150px;
            margin-left:150px;
            position: center;
            font-size: 50px;
        }
        .old{
            margin-top:150px;
            font-weight: bold;
            margin-left:-1090px;
            font-size: 20px;
        }
        .items{
            position: relative;
            display: flex;
            left:1500px;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <p1 class="oleg">2024 crypto donation</p1>
        </div>
        <div class="items">
            <?php if(auth()->guard()->check()): ?>
                <a class="kall1" href="<?php echo e(route('donation-history')); ?>">Profile</a>
                <a class="kall" href="<?php echo e(route('logout')); ?>">Logout</a>
            <?php else: ?>
                <a class="kall" href="<?php echo e(route('login')); ?>">Login</a>
            <?php endif; ?>
        </div>
    </header>

    <div class="secHeader">
        <a class="ala" href="donate">For Donors</a>
        <a class="olo" href="organisations">About</a>
        <?php if(auth()->guard()->check()): ?> 
            <a href="<?php echo e(route('donation-history')); ?>"><button class="btn1">Accept Donations</button></a> 
            <a href="<?php echo e(route('donation-history')); ?>"><button class="btn2">Give Now</button></a> 
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>"><button class="btn1">Accept Donations</button></a>
            <a href="<?php echo e(route('login')); ?>"><button class="btn2">Give Now</button></a>
        <?php endif; ?>
    </div>
    <main>
        
        <section id="home">
            <h2 class="new">Get a $500 Bitcoin Donation When <br>You Go Live</h2>
            <br>
            <p class="old">Over $170M in crypto has been donated through  CryptoBlago.<br> Don’t miss the crypto donor opportunity.</p>
            <img src="https://thegivingblock.com/wp-content/uploads/2024/04/NPO-hero-Home-For-Nonprofits-The-Giving-Block.png" alt="">
        </section>
        
        
        
        
    </main>
    
    <footer>
        <p>&copy; 2024 CryptoBlago. All rights reserved.</p>
    </footer>
</body>
</html>
<?php /**PATH C:\MAMP\htdocs\example2\resources\views/main.blade.php ENDPATH**/ ?>