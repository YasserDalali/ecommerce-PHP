<?php
ob_start();
?>
    <form method="post" action="index.php?action=loginHandle">
        <?php if ($_GET['error']=='1') {echo "<div class='alert alert-danger'>please login again</div>";} ?>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">

                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <button type="submit" name="btn-submit" class="btn btn-primary w-100 mt-4">Submit</button>
    </form>
<?php $content = ob_get_clean(); ?>