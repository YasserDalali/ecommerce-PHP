<?php
ob_start();
?>
    <form method="post" action="index.php?action=registerHandle">
        <?php if (isset($_GET['error']) && $_GET['error']=='0' ) {$emsg = $_GET['emsg'];echo "<div class='alert alert-danger animate__animated animate__flipInX animate__faster fixed-top mx-5 m-2 p-3'>there has been an issue on our side: $emsg</div>";} ?>
        <?php if (isset($_GET['error']) && $_GET['error']=='1' ) {echo "<div class='alert alert-danger animate__animated animate__flipInX animate__faster fixed-top mx-5 m-2 p-3'>please try again</div>";} ?>

        <?php if (isset($_GET['error']) && $_GET['error']=='2' ) {echo "<div class='alert alert-danger animate__animated animate__flipInX animate__faster fixed-top mx-5 m-2 p-3'>User already registered, try logining in instead.</div>";} ?>
    
        <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Repeat password</label>
                <input type="password" class="form-control" name="pwd2" placeholder="Password">
            </div>

            <button type="submit" name="btn-submit" class="btn btn-primary w-100 mt-4">Register</button>

            <br>

            <a href="index.php?action=register">First time? Create an account here!</a>
    </form>

    <script>

        var alert = document.getElementsByClassName('alert')[0]
        setTimeout(function(){
            alert.classList.remove('animate__flipInX', 'animate__faster')
            alert.classList.add('animate__fadeOut')
            alert.style.pointerEvents = 'none'; // Add this line
            console.log(alert)

            }, 2000);
            



</script>
<?php $content = ob_get_clean(); ?>