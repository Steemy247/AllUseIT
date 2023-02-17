<?php //include 'API/db.php';


//$conn = new mysqli($servername, $username, $password, "bfs_database");

    //if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
    //}

	//$sql = "Select * from 'accounts';";
	//$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="Styles.css">
</head>
<body style="background: url(img/bg1.jpg) 50% 50% no-repeat;">
    <div class="signin">
        <form type="post"  style="height: 275px;">
            <img src="img/logoname.png" style="width:100%;height:50%;">
            <div style="height:58px;">
                <input class="input" type="text" placeholder="User Token">
            </div>
            <div style="height:58px;">
                <input class="input" type="password" placeholder="Password">
            </div>
        </form>
        <button id="sighin"class="btnSignin"> Sign In </button>
        <div class="label">
            <label style="color: white; padding-top:15px;">Having Trouble?</label>
            <a href="help.php">Click Here</a>
        </div>
    </div>


</body>

<script>

    document.getElementById("sighin").onclick = function () {
    location.href = "index";
    };

</script>

</html>