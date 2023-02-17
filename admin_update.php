<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_add</title>
</head>
<body>

<?php 
    
    include 'API/db.php';

	$sql = "Select * from `accounts`;";
	$result = $conn->query($sql);
	$Data ="";
        $row = $result->fetch_assoc();
			$Data .='
			<div class="admin_popup">
                <form>
                    <label style="font-size:18px;padding:5px;padding-bottom:15px;">Edit Account</label>
                    <input id="id" type="" value="' . $row["id"] . '">
                    <div style="display:inline-flex;height:60px;">
                        <input id="Name" style="margin-left:10px;" placeholder="Name" type="text" value="' . $row["name"] . '"></input>
                        <input id="Surname" style="margin-left:10px;" type="text" value="' . $row["surname"] . '"></input>
                    </div>
                    <div style="display:inline-flex;height:60px;">
                        <input id="Branch" style="margin-left:10px;" type="text" value="' . $row["token"] . '"></input>
                        <input id="Password" style="margin-left:10px;" type="text" value="' . $row["password"] . '"></input>
                    </div>
                    <div style="display:inline-flex;height:60px;">
                        <input id="Token" style="margin-left:10px;" type="number" value="' . $row["branch"] . '"></input>
                        <select id="Active" class="input" style="margin-left:10px;" type="text" value="' . $row["online"] . '">
                            <option value="Y" class="input">Yes</option>
                            <option value="N" class="input">No</option>
                        </select>
                    </div>
                </form>

                <button onclick="UpdateSave()" class="btnSignin" style="margin-left:1.9%;">Save</button>
                <button onclick="Admin_Cancel()" class="btnSignin">Cancel</button>
            </div>';

    echo $Data;
?>
    
</body>
</html>