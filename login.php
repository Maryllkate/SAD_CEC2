<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image" href="img/acess_icon.png">

    <!--CSS Stylesheets-->
    <link rel="stylesheet" href="css/style.css">

    <title>login</title>

</head>
<body>
    <div class="container"> 
        <form class="col-left">
            
        </form>
        <form class="col-right" action="./include/home/dashboard.php" method="POST">
            <section class="right-banner">
            <h3>WELCOME</h3>
            </section>

            <section class="login-section">

                <div class="username">
                <label for="username">Username</label> <br/>
                <input type="text" class="ant-input text-input error" placeholder="Enter Username" required>
                </div>

                <div class="password">
                <label for="password">Password</label> <br/>
                <input type="password" class="ant-input text-input error" placeholder="Enter Password" required>
                </div>
    
                <button type="login" class="btn btn-login">
                    <span>login</span>
                </button>

        </form>
    </div>
    </section>

 <!-- script link -->
    <script src="js/script.js"></script>
</body>
</html>
