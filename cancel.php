
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
                                    <li class="break"><a href="boards.php">Bulletin Boards</a></li>
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
                                if (session_id() == "")
                                    session_start();
                                include('header.php');
                            ?>
                                        <h4 style="text-align:center;">
                                            You cancelled the order.
                                        
                                        <br/>
                                        Return to <a href="index.html">home page</a>.
                                        </h4>
                            <?php
                                include('footer.php');
                            ?>
                        
                    </div>
                </div>

            <!-- Footer -->

                <div id="footer-wrapper" style="text-align: center">
                         <ul class="menu">
                            <li>ContactUnion@gmail.com</li>
                            <li>(233)555-3459</li>
                        </ul>
                </div>

        <!-- Scripts -->

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

            <script type="text/javascript">
                function validateForm() {
                    //get form from document
                    var my_form = document.forms["my_form"];
                    //check Name is not empty
                    var x = my_form["Name"].value;
                    if(x == "") {
                        alert("Name field must be filled out!");
                        return false;
                    }
                    //check name is only letters
                    if(!onlyLetters(x)){
                        alert("Name field must only be made up of letters");
                        return false;
                    }
                    //Check email is not empty, contains @ and .edu
                    x = my_form["Email"].value
                    if(x == "") {
                        alert("Email field must be filled out!");
                        return false;
                    }
                    if(!validateEmail(x)) {
                        alert("Email must be a valid .edu address!");
                        return false;
                    }
                    //Check email is not in use
                    if(!checkEmail(x)) {
                        alert("Email is already in use!");
                        return false;
                    }
                    //Check Address is not empty
                    var x = my_form["Address"].value;
                    if(x == "") {
                        alert("Address field must be filled out!");
                        return false;
                    }
                    //Check City is not empty
                    var x = my_form["City"].value;
                    if(x == "") {
                        alert("City field must be filled out!");
                        return false;
                    }
                    //check City is only letters
                    if (!onlyLetters(x)) {
                        alert("City field must only be made up of letters");
                        return false;
                    }
                    //Check State is selected
                    var x = my_form["State"].value;
                    if(x == "") {
                        alert("State field must be selected!");
                        return false;
                    }
                    //Check zip is not empty and 5 digits
                    x = my_form["Zip"].value
                    if(x == "") {
                        alert("Zip field must be filled out!");
                        return false;
                    }
                    if(!validateZip(x)) {
                        alert("Zip must be 5 digits!");
                        return false;
                    }
                }
                function onlyLetters(text) {
                    //checks that text is only letters and spaces
                    var isTrue = false;
                    var regex = /^[a-zA-Z\s]*$/;  
                        return (regex.test(text));
                }
                function checkEmail(email) {
                    //Checks from db if the email is in use
                    var isTrue = false;
                    $.ajax({
                        type: "POST",
                        url: "checkEmail.php",
                        async: false,
                        //sends email to backend
                        data: { Email: email },
                        //receives true if email is already in db
                        success: function(data) {
                            isTrue = data.includes("true");
                        }
                    })
                    return isTrue;
                }
                
                function validateEmail(email) {
                    //Checks email is of the form:
                    //[chars]@[chars].edu
                    //from http://stackoverflow.com/questions/26702338/setting-a-form-to-only-allow-edu-email-addresses
                    //var regex = /^([\w-]+(?:\.[\w-]+)*)@(?:[\w-]+\.)+edu/i;
                    //var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    
                    var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    //^^^^from http://emailregex.com/
                    return (regex.test(email) && email.substr(-4) == ".edu");
                }
                function validateZip(zip) {
                    //Checks zip is exactly 5 digits
                    var regex = /\b\d{5}\b/g;
                    return regex.test(zip);
                }
            </script>

    </body>
</html>