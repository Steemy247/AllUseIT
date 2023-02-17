<?php 
    
    include 'API/db.php';

	$sql = "Select * from `accounts`;";
	$result = $conn->query($sql);
	$Data ="";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$Data .='
			<div onclick="Admin_update()" id="Data" class="info_div2">
                <label class="admin_labels">' . $row["id"] . '</label>
                <label class="admin_labels">' . $row["name"] . '</label>
                <label class="admin_labels">' . $row["surname"] . '</label>
                <label class="admin_labels">' . $row["token"] . '</label>
                <label class="admin_labels">' . $row["password"] . '</label>
                <label class="admin_labels">' . $row["branch"] . '</label>
                <label class="admin_labels">' . $row["online"] . '</label>
            </div>
            <button onclick="Remove()" class="info_btn">Delete</button>
			';
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API_admin</title>
</head>
<body>
    <label class="headings" style="margin-bottom: 30px; margin-top: 10px;">ADMIN</label>
<div style="justify-content:center;align-items: center; height: 92vh;">
    <div style="margin-left: 1%; width:100%;">
        <div class="info_div">
            <label class="admin_labels">ID</label>
            <label class="admin_labels">Name</label>
            <label class="admin_labels">Surname</label>
            <label class="admin_labels">Token</label>
            <label class="admin_labels">Password</label>
            <label class="admin_labels">Branch</label>
            <!--<label class="admin_labels">Online</label>-->
            <label class="admin_labels">Active</label>
        </div>

        <!-- This is where i display the data from the database -->
    
        <div style="overflow-y:auto;height:80vh;width:100%;">
            <?php echo $Data; ?>
        </div>
    </div>
</div>
    <div style="width: 100%;bottom: 10px;position: absolute;display: flex;justify-content: center;">
        <button onclick="Add()"class="btnSignin">Add User</button>
    </div>
</body>
</html>