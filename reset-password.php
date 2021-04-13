<?php 
    require_once('lib/header.php');
    // if(!isset($_GET['token']) && !isset($_SESSION['token'])){
    //     $_SESSION['error'] = "You are not authorized to view that page";
    //     header("Location: login.php");
    //     die();
    // }
?>
    <h3>Reset password </h3>
    <p>Reset password associated with your account</p>
    <form action="processes/processreset.php" method="POST" class="w-50">
        <p>
            <?php
                // if(isset($_SESSION['resetError']) && !empty($_SESSION['resetError'])){
                //     echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
                //     #session unset
                //    session_destroy();
                // }
            ?>
        </p>
        <!-- <input 
            <?php 
            //     if(isset($_SESSION['token'])){
            //         echo "value='" . $_SESSION['token'] . "'";
            //     }else{
            //         echo "value='" . $_GET['token'] . "'";
            //     }
            // ?>
        
        type="hidden" name='token' /> -->
        <p class="form-group">
            <label>Email</label><br />
            <input type="text" name="email" placeholder="Email" class="form-control" />
        </p>
        <p class="form-group">
            <label>Enter New Password</label><br />
            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off"/>
        </p>
        <p class="form-group">
            <label>Confirm Password</label><br />
            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off"/>
        </p>
        <p>
            <button type="submit" class="form-control btn btn-danger">Change Password</button>
        </p>
    </form>
<?php 
    require_once('lib/footer.php');
?>