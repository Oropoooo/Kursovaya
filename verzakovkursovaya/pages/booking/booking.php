<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../main/main.css" />
    <link rel="stylesheet" href="../booking/booking.css" />
    <title>Booking</title>
</head>

<body>
    <div class="landing-page">
        <div class="div">
            <div class="div-2">
                <div class="div-2">
                    <div class="overlap">
                        <div class="rectangle"></div>
                        <div class="btn-primary">
                            <a href="../menu/menusec.html">
                                <div class="overlap-group">
                                    <div class="group">
                                        <div class="go-to-menu">GO TO MENU</div>
                                        <img class="line" src="../../img/Line-1.svg" />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <p class="taste-the-rich">Taste the rich flavor of<br />high quality sushi</p>
                        <div class="best-sushi-in-town">Best Sushi In Town</div>
                        <p class="we-only-use-the-five">
                            We only use the five star quality for<br />our menu, come and get the richness in<br />every
                            food we
                            serve.
                        </p>
                    </div>
                </div>
                <div class="navbar">
                    <div class="navbar-2">
                        <a href="../menu/menusec.html">
                            <div class="text-wrapper-menu">
                                <p class="p-menu">Menu</p>
                            </div>
                        </a>
                        <a href="../reviews/reviewssec.html">
                            <div class="text-wrapper-reviews">
                                <p class="p-reviews">Reviews</p>
                            </div>
                        </a>
                        <a href="../about/aboutsec.html">
                            <div class="text-wrapper-about">
                                <p class="p-about">About</p>
                            </div>
                        </a>
                        <a href="../staff/staffsec.html">
                            <div class="text-wrapper-staff">
                                <p class="p-staff">Staff</p>
                            </div>
                        </a>
                        <a href="../suppliers/supplierssec.html">
                            <div class="text-wrapper-suppliers">
                                <p class="p-suppliers">Suppliers</p>
                            </div>
                        </a>
                        <a href="../partners/partnerssec.html">
                            <div class="text-wrapper-partners">
                                <p class="p-partners">Partners</p>
                            </div>
                        </a>
                        <a href="../contacts/contactssec.html">
                            <div class="text-wrapper-contacts">
                                <p class="p-contacts">Contacts</p>
                            </div>
                        </a>
                    </div>
                    <a href="../booking/booking.php">
                        <div class="group-wrapper">
                            <div class="group-2">
                                <div class="reservation">RESERVATION</div>
                                <img class="img" src="../../img/line.svg" />
                            </div>
                        </div>
                    </a>
                    <a href="../main/indexsec.php">
                        <img class="logo" src="../../img/logo-restaurant.png" />
                    </a>
                </div>
            </div>
            <div class="tables-grid">
                <div class="container">
                    <form action="../../phps/mail.php" method="post">
                        <div class="tables-grid-2">
                            <?php
                            for ($i = 1; $i <= 16; $i++) {
                                echo '<input type="checkbox" id="table'.$i.'" name="tables[]" value="'.$i.'">';
                                echo '<label for="table'.$i.'"> '.$i.'</label>';
                            }
                            ?>
                        </div>
                        <div class="reserveinputs">
                            <p class="desc">Date and Time</p>
                            <input type="datetime-local" id="datetime" name="datetime" required class="reserveinput" value="2024-01-01T12:00">
                        </div>
                        <div>
                            <button type="submit" class="reservesubmit">Reserve</button>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="footer">
                <div class="overlap-13">
                    <img class="mask-group-13" src="../../img/finedining3 1.png" />
                    <div class="rectangle-10"></div>
                    <a href="../main/indexsec.php">
                        <img class="logo-2" src="../../img/logo.png" />
                    </a>
                    <a href="../booking/booking.php">
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
                            <img class="map-pin-fill" src="../../img/map-pin-fill.svg" />
                        </div>
                        <div class="group-32">
                            <div class="text-wrapper-26">Call us:<br />+0721 471 285</div>
                            <img class="phone-fill" src="../../img/phone-fill.svg" />
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="seat-reserve.js"></script>
</body>

</html>