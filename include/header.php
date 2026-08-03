<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>

    <div id="main">

        <header class="header">
            <div class="container">
                <div class="header-main">
                    <div class="menu">
                        <a href="javascript:;" class="open_menu"><i class='bx bx-menu'></i></a>
                        <p>The fastest & easiest way to buy game credits</p>
                    </div>
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/logo.jpg" alt=""></a>
                    </div>
                    <div class="login_signup">
                        <a href="login.php" class="themebtn">login</a>
                        <a href="login.php" class="themebtn">sign up</a>
                        <ul>
                            <li><a href="javascript:;"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="javascript:;"><img src="assets/images/twitter.png" alt=""></a></li>
                            <li><a href="javascript:;"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu_nav">
                <div class="nav_title">
                    <a href="javascript:;"><img src="assets/images/logo.jpg" alt=""></a>
                </div>

                <div class="nav_btn">
                    <a href="login.php" class="themebtn"> Sign up, it's free </a>
                    <a href="login.php" class="themebtn button2">Sign in</a>
                </div>

                <ul class="social_icon">
                    <li><a href="javascript:;"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="javascript:;"><img src="assets/images/twitter.png" alt=""></a></li>
                    <li><a href="javascript:;"><i class='bx bxl-instagram'></i></a></li>
                </ul>

                <a href="javascript:;" class="close_nav"><i class='bx bx-x'></i></a>
            </div>
        </header>