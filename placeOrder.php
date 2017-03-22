
<!DOCTYPE HTML>
<!--
    Telephasic by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Union | Sign Up</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">
            <!-- Header -->
                <div id="header-wrapper">
                    <div id="header" class="container">

                        <!-- Logo -->
                            <h1 id="logo"><a href="index.html"><img src="images/logo_trans.png" height="30px;" />nion</a></h1>

                        <!-- Nav -->
                            <nav id="nav">
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                        <!--
                                        <ul>
                                            <li><a href="#">Lorem ipsum dolor</a></li>
                                            <li><a href="#">Magna phasellus</a></li>
                                            <li><a href="#">Etiam dolore nisl</a></li>
                                            <li>
                                                <a href="#">Phasellus consequat</a>
                                                <ul>
                                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                                    <li><a href="#">Phasellus consequat</a></li>
                                                    <li><a href="#">Magna phasellus</a></li>
                                                    <li><a href="#">Etiam dolore nisl</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Veroeros feugiat</a></li>
                                        </ul>
                                        -->
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="break"><a href="boards.html">Bulletin Boards</a></li>
                                    <li><a href="signup.html">Sign Up!</a></li>
                                </ul>
                            </nav>

                    </div>
                </div>

            <!-- Main -->
                <div class="wrapper">

                    <div class= "form" id="main">
                        <header>
                        </header>
                        <?php
    /*
        * Place Order Page : part of the Express Checkout flow. Buyer can choose shipping option on this page.
    */
    if (session_id() == "")
        session_start();

    include('header.php');
    include('utilFunctions.php');
    include('paypalFunctions.php');

    $_SESSION['paymentID']= filter_input( INPUT_GET, 'paymentId', FILTER_SANITIZE_STRING );
    $_SESSION['payerID'] = filter_input( INPUT_GET, 'PayerID', FILTER_SANITIZE_STRING );
    $access_token = $_SESSION['access_token'];
    $lookUpPaymentInfo = lookUpPaymentDetails($_SESSION['paymentID'], $access_token);
    $recipientName= filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['recipient_name'],FILTER_SANITIZE_SPECIAL_CHARS);
    $addressLine1= filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['line1'],FILTER_SANITIZE_SPECIAL_CHARS);
    $addressLine2 =  (isset($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['line2']) ?  filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['line2'],FILTER_SANITIZE_SPECIAL_CHARS) :  "");
    $city= filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['city'],FILTER_SANITIZE_SPECIAL_CHARS);
    $state= filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['state'],FILTER_SANITIZE_SPECIAL_CHARS);
    $postalCode = filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['postal_code'],FILTER_SANITIZE_SPECIAL_CHARS);
    $countryCode= filter_var($lookUpPaymentInfo['payer']['payer_info']['shipping_address']['country_code'],FILTER_SANITIZE_SPECIAL_CHARS);

?>
            <h3 style="text-align: center">Ship To :</h3>
            </br>
            <div style="text-align: center">
            <?php echo($recipientName);?><br/>
            <?php echo($addressLine1);?><br/>
            <?php echo($addressLine2);?><br/>
            <?php echo($city);?><br/>
            <?php echo($state.'-'.$postalCode);?><br/>
            <?php echo($countryCode);?><br/>
            </div>
            <form action="pay.php" method="POST" style="text-align: center">
                <br/>
                <button type="submit" class="btn btn-primary" onclick="return emailConf();" style="text-align: center">Confirm Order</button>
            </form>
            <br/>
    </div>
<?php
    include('footer.php');
?>
                        
                    </div>
                    </div>
                </div>

            <!-- Footer -->
        
                <div id="footer-wrapper" style="text-align: center;">
                   <ul class="menu">
                            <li>ContactUnion@gmail.com</li>
                            <li>(233)555-3459</li>
                        </ul>
        </div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

<script type="text/javascript">
    function emailConf() {
        $.ajax({
            type: "POST",
            url: "checkoutMail.php",
            async: false
        })
    }
</script>