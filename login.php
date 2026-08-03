<?php
$title = "Sign Up";
include 'include/header.php';
?>

<section class="signup_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="signup_form">
                    <form action="">
                        <div class="form_title">
                            <h3><a href="index.php"><i class='bx bx-arrow-back'></i></a>Sign Up</h3>
                            <a href="javascript:;" class="Kingdom">United Kingdom <img src="assets/images/login-icon.png" alt=""></a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="signup_fields">
                                    <label for="">Email Address</label>
                                    <input type="text" placeholder="your email here">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="signup_fields">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="your Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="signup_fields">
                                    <label for="">Password</label>
                                    <input type="text" placeholder="your Password here">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="signup_cont">
                                    <p>Password must contain at least 8 characters including at least 1 number</p>
                                    <div class="login_check">
                                        <input type="checkbox" name="check" id="check">
                                        <label for="check">I agree that I want to receive news, offers, important
                                            updates and other marketing/promotional materials from and about Codashop
                                            (including Coda Accounts and Codacash), via email.</label>
                                    </div>
                                    <div class="already_account">
                                        <p>Already have an account? <a href="javascript:;">Sign in here</a></p>
                                    </div>

                                    <div class="form_btn">
                                        <button class="themebtn">continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
include 'include/footer.php';
?>