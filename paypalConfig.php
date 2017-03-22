<?php
    /*
        * Config for PayPal specific values
    */

    //Whether Sandbox environment is being used, Keep it true for testing
    define("SANDBOX_FLAG", true);

    //PayPal REST API endpoints
    define("SANDBOX_ENDPOINT", "https://api.sandbox.paypal.com");
    define("LIVE_ENDPOINT", "https://api.paypal.com");

    //Merchant ID
    define("MERCHANT_ID","unionBusiness@gmail.com");

    //PayPal REST App SANDBOX Client Id and Client Secret
    define("SANDBOX_CLIENT_ID" , "AbvmBrfbxdDV9IcqYpiNpVW2hq1dvmJ1CiXeUfM8K4z7RklpqMLTQeWmHx7JJD64vPzlYAK-Lw8bkAhB");
    define("SANDBOX_CLIENT_SECRET", "EAUpSnlwPjmCmtBRNyNX_IIC8PAAkZ7zFpXi-MLmEyWftZ8aizaFpzhKE-zVb5t-V-hx797wVRoXI3Y9");

    //Environments -Sandbox and Production/Live
    define("SANDBOX_ENV", "sandbox");
    define("LIVE_ENV", "production");

    //PayPal REST App SANDBOX Client Id and Client Secret
    define("LIVE_CLIENT_ID" , "live_Client_Id");
    define("LIVE_CLIENT_SECRET" , "live_Client_Secret");

    //ButtonSource Tracker Code
    define("SBN_CODE","PP-DemoPortal-EC-IC-php-REST");

?>