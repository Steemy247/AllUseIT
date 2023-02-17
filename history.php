<?php 
    
    include 'API/db.php';

	$sql = "SELECT * FROM `schedule` WHERE done = 'Y'";
	$result = $conn->query($sql);
	$Data2 ="";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$Data2 .='
			<div onclick="sched_done()" id="Data" class="sched_info2">
                <label class="shed_admin_labels">' . $row["name"] . '</label>
                <label class="shed_admin_labels">' . $row["job"] . '</label>
                <label class="shed_admin_labels">' . $row["time"] . '</label>
                <label class="shed_admin_labels">' . $row["deadline"] . '</label>
                <label class="shed_admin_labels">' . $row["location"] . '</label>
                <label class="shed_admin_labels">' . $row["done"] . '</label>
            </div>';
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
    <title>Schedule</title>
</head>
<body>
    <div class="main_div">
        <label class="h1">SCHEDULE</label>
        <div style="display: inline-flex; margin-left: 2%; margin-bottom: 50px; width: 92%; justify-content: center;">
            <input class="Search2" placeholder="Search">
            <input class="Search2" type="date" placeholder="Time">
            <input class="Search2" type="date" placeholder="Deadline">
        </div>
        <div style="display: inline-flex;width:92%;margin-left: 1%;">
            <label class="shed_admin_labels">NAME</label>
            <label class="shed_admin_labels">JOB</label>
            <label class="shed_admin_labels">TIME</label>
            <label class="shed_admin_labels">DEADLINE</label>
            <label class="shed_admin_labels">LOCATION</label>
            <label class="shed_admin_labels">COMPLETED</label>
        </div>
        
            <?php echo $Data2; ?>
        
    </div>
</body>
</html>