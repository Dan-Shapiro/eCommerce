<?php
    /*
        * Cancel Order page
    */

    if (session_id() == "")
        session_start();

    include('header.php');
?>
    <div class="row" style="text-align:center;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h4>
                You cancelled the order.
            </h4>
            <br/>
            Return to <a href="index.html">home page</a>.
        </div>
        <div class="col-md-4"></div>
    </div>
<?php
    include('footer.php');
?>