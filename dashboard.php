<?php 

    include 'API/db.php';

	$sql = "SELECT * FROM `schedule` WHERE done = 'N' ORDER BY deadline ASC;";
	$result = $conn->query($sql);
	$Data2 ="";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$Data2 .='
			<div onclick="Update()" id="Data" style="display: inline-flex;width:92%;margin-left: 3.5%;">
                <label class="shed_admin_labels">' . $row["name"] . '</label>
                <label class="shed_admin_labels">' . $row["job"] . '</label>
                <label class="shed_admin_labels">' . $row["time"] . '</label>
                <label class="shed_admin_labels">' . $row["deadline"] . '</label>
                <label class="shed_admin_labels">' . $row["location"] . '</label>
                <label class="shed_admin_labels">' . $row["done"] . '</label>
            </div>
            
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
    <title>Dashboard</title>
</head>
<body>
    <div class="main_div">
        <label class="h1">DASHBOARD</label>
        <label style="font-size: 20px; width:100px;border-bottom:solid 1px;margin-left:58px;">Schedules</label></br>
        <div style=" height:350px;overflow-y:auto">
        <div style="display: inline-flex;width:92%;margin-left: 3.5%;">
            <label class="shed_admin_labels">NAME</label>
            <label class="shed_admin_labels">JOB</label>
            <label class="shed_admin_labels">TIME</label>
            <label class="shed_admin_labels">DEADLINE</label>
            <label class="shed_admin_labels">LOCATION</label>
            <label class="shed_admin_labels">COMPLETED</label>
        </div>
            <?php echo $Data2; ?>
        </div>
        <div style="display: inline-flex;width:100%;margin-top: 20px;height: 46vh;">
            <div style="width:49%;height:430px;margin-left:30px;">
            <label style="font-size: 20px; width:100px;border-bottom:solid 1px;margin-left:58px;">SUPPORT</label></br>
                
            </div>
            <div style="width:49%;height:430px;margin-left:30px;">
            <label style="font-size: 20px; width:70px;border-bottom:solid 1px;margin-left:58px;">ADMIN</label></br>
            </div>
        </div>
    </div>
    
</body>
</html>