<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <!-- Poppins Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Close Google Fonts -->

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Close Tailwind CDN -->

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/signup.css">
    
    <!-- Close Style CSS -->

    <title>Sign Up</title>
</head>
<body>

    <div class="center">
        <div class="logo">
            <div class="triangle">
                <span class="tri-o-r"></span>
                <span class="tri-o-g"></span>
                <span class="tri-o-b"></span>
            </div>
            <div class="logo-n">
                LEARNITY
            </div>
            <div class="ggg-txt">
                GET GAIN GROW
            </div>
        </div>
        <div class="content">
            <div class="text">Sign Up</div>
            <form action="#" method="$_POST">
                <div class="data">
                    <input type="text" placeholder="Username" class="usname">
                </div>
                <div class="data">
                    <input type="text" placeholder="Password" class="psword" required>
                </div>
                <div class="data">
                    <input type="text" placeholder="Confirm Password" class="cfpsword" required>
                </div>
                <div class="btn">
                    <div class="inner"></div>
                    <button class="btn-sign"
                        style = "
                                    height: 100%;
                                    width: 100%;
                                    background: none;
                                    border: none;
                                    color: #000;
                                    font-size: 20px;
                                    font-weight: 500;
                                    text-transform: uppercase;
                                    letter-spacing: 1px;
                                    cursor: pointer;
                        
                                "
                    >
                        Sign Up
                    </button>
                </div>
                <div class="cancel">
                    <a href="#">Cancel</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php 

?>