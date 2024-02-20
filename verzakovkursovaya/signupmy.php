<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="signup.css" />
    <title>Sign Up</title>
</head>

<body>
    <div class="landing-page">
        <div class="div">
            <div class="div-2">
                <div class="div-2">
                    <div class="overlap">
                        <div class="rectangle"></div>
                    </div>
                    <div class="form-wrap">
                        <div class="profile">
                            <img src="https://html5book.ru/wp-content/uploads/2016/10/profile-image.png" class="profile-img">
                            <h1>Registration</h1>
                        </div>
                        <form method="post" action="registration/profile.php" enctype="multipart/form-data">
                            <div>
                                <label for="name">Name</label>
                                <input type="text" name="full_name" required>
                            </div>
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" name="email" required>
                            </div>
                            <div>
                                <label for="pass">Password</label>
                                <input type="text" name="password" required>
                            </div>
                            <div>
                                <label for="repeatpass">Repeat Password</label>
                                <input type="text" name="password_confirm" required>
                            </div>
                            <button type="submit">Send</button>
                            <a href="signin.html">
                                <p class="sign-up-already">Sign In</p>
                            </a>
                        </form>
                    </div>
                </div>
                <div class="navbar">
                    <div class="navbar-2">
                        <a href="menu.html">
                            <div class="text-wrapper-menu">
                                <p class="p-menu">Menu</p>
                            </div>
                        </a>
                        <a href="reviews.html">
                            <div class="text-wrapper-reviews">
                                <p class="p-reviews">Reviews</p>
                            </div>
                        </a>
                        <a href="about.html">
                            <div class="text-wrapper-about">
                                <p class="p-about">About</p>
                            </div>
                        </a>
                        <a href="staff.html">
                            <div class="text-wrapper-staff">
                                <p class="p-staff">Staff</p>
                            </div>
                        </a>
                        <a href="suppliers.html">
                            <div class="text-wrapper-suppliers">
                                <p class="p-suppliers">Suppliers</p>
                            </div>
                        </a>
                        <a href="partners.html">
                            <div class="text-wrapper-partners">
                                <p class="p-partners">Partners</p>
                            </div>
                        </a>
                        <a href="contacts.html">
                            <div class="text-wrapper-contacts">
                                <p class="p-contacts">Contacts</p>
                            </div>
                        </a>
                    </div>
                    <a href="signin.html">
                        <div class="group-wrapper-sign-up">
                            <div class="group-sign-up">
                                <div class="sign-up">Sign In</div>
                            </div>
                        </div>
                    </a>
                    <a href="booking.html">
                        <div class="group-wrapper">
                            <div class="group-2">
                                <div class="reservation">RESERVATION</div>
                                <img class="img" src="img/line.svg" />
                            </div>
                        </div>
                    </a>
                    <a href="index.php">
                        <img class="logo" src="img/logo-restaurant.png" />
                    </a>
                </div>
            </div>
            <footer class="footer">
                <div class="overlap-13">
                    <img class="mask-group-13" src="img/finedining3 1.png" />
                    <div class="rectangle-10"></div>
                    <a href="index.php">
                        <img class="logo-2" src="img/logo.png" />
                    </a>
                    <a href="booking.html">
                        <div class="group-29">
                            <div class="overlap-group-4">
                                <div class="text-wrapper-25">Reserve a Table</div>
                            </div>
                        </div>
                    </a>
                    <p class="we-ready-to-have-you">We ready to have you <br />the best dining experiences</p>
                    <div class="group-30">
                        <div class="group-31">
                            <p class="text-wrapper-26">Jendral Sudirman Street Pahoman<br />Bandar Lampung, Lampung,
                                35222</p>
                            <img class="map-pin-fill" src="img/map-pin-fill.svg" />
                        </div>
                        <div class="group-32">
                            <div class="text-wrapper-26">Call us:<br />+0721 471 285</div>
                            <img class="phone-fill" src="img/phone-fill.svg" />
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>