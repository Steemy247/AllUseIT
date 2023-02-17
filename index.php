<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body style="overflow: hidden;">
    <div style="display: inline-flex;width:100%; height:100%;">
        <div class="dboard-left_menu">
            <label class="Barko">BARKO LOANS</label>
            <div onclick="dash()" class="setting_div">
                <!--<img class="setting_div_img" src="img/dash_logo.png">-->
                <label class="setting_div_txt">DASHBOARD</label>
            </div>
            <div onclick="sched()" id="sched" class="setting_div">
                <!--<img class="setting_div_img" src="img/dboard.png">-->
                <label class="setting_div_txt">SCHEDULE</label>
            </div>
            <div id="" class="setting_div">
                <!--<img class="setting_div_img" src="img/dboard.png">-->
                <label class="setting_div_txt">SUPPORT</label>
            </div>
            <div id="" class="setting_div">
                <!--<img class="setting_div_img" src="img/dboard.png">-->
                <label class="setting_div_txt">TICKETS</label>
            </div>
            <div onclick="email()" id="email" class="setting_div">
                <!--<img class="setting_div_img" src="img/dboard.png">-->
                <label class="setting_div_txt">EMAIL</label>
            </div>
            <div onclick="admin()" id="admin" class="setting_div">
                <!--<img class="setting_div_img" src="img/admin_logo.png">-->
                <label class="setting_div_txt">ADMIN</label>
            </div>
            <div onclick="feedback()" id="admin" class="setting_div2" style="bottom:1px;">
                <!--<img class="setting_div_img" src="img/admin_logo.png">-->
                <label class="setting_div_txt">FEEDBACK</label>
            </div>
        </div>
        <div id="show" class="dboard-right_menu">
            <?php include 'dashboard.php'?>
        </div>
    </div>
    
</body>


<script>
//-----------------------------------------ADD-----------------------------------------//

function Add() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "admin_add.php");
  xhttp.send();
}


function AddSave(){
    var xhttp = new XMLHttpRequest();
    var data = new FormData();
    data.append('name', document.getElementById("Name").value);
    data.append('surname', document.getElementById("Surname").value);
    data.append('branch', document.getElementById("Branch").value);
    data.append('password', document.getElementById("Password").value);
    data.append('token', document.getElementById("Token").value);
    data.append('active', document.getElementById("Active").value);
    

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Saved " + this.responseText);
        }
    };
    xhttp.open("POST", "API/API_admin_add.php", true);
    xhttp.send(data);

    edit(_id);
}

function CancelAdd() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "admin.php");
  xhttp.send();
}

function Addsched(){
    var xhttp = new XMLHttpRequest();
    var data = new FormData();
    data.append('id', document.getElementById("id").value);
    data.append('name', document.getElementById("name").value);
    data.append('job', document.getElementById("job").value);
    data.append('time', document.getElementById("time").value);
    data.append('deadline', document.getElementById("deadline").value);
    data.append('location', document.getElementById("location").value);
    data.append('done', document.getElementById("done").value);
    

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Saved");
        }
    };
    xhttp.open("POST", "API/API_schedule_add.php", true);
    xhttp.send(data);
}

function Complete(){
    var xhttp = new XMLHttpRequest();
    var data = new FormData();
    data.append('id', document.getElementById("id").value);
    

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Completed!");
        }
    };
    xhttp.open("POST", "API/API_done_add.php", true);
    xhttp.send(data);

    edit(id);
}

//-----------------------------------------UPDATE-----------------------------------------//

function Admin_update() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "admin_update.php");
  xhttp.send();
}

//-----------------------------------------NAVIGATION-----------------------------------------//


function dash() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "dashboard.php");
  xhttp.send();
}

function Admin_Cancel() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "admin.php");
  xhttp.send();
}

function sched_done() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "done.php");
  xhttp.send();
}

function sched_Cancel() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "schedule.php");
  xhttp.send();
}

function sched() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "schedule.php");
  xhttp.send();
}

function Cancel_sched() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "schedule.php");
  xhttp.send();
}

function admin() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "admin.php");
  xhttp.send();
}

function feedback() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "feedback.php");
  xhttp.send();
}

function add_sched() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "schedule_add.php");
  xhttp.send();
}

function history() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "history.php");
  xhttp.send();
}

function email() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
    document.getElementById("show").innerHTML = this.responseText;
  }
  xhttp.open("GET", "email.php");
  xhttp.send();
}

var RemoveID = "";
	function remove2(_id){
		RemoveID = _id;
		modal.style.display = "block";
		
	}

function Remove(){
		var xhttp = new XMLHttpRequest();
		var data = new FormData();
		data.append('_id', RemoveID);

		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("Data").innerHTML = "";
				AutoRefresh = false;
			}
		};
		xhttp.open("POST", "API/API_admin_remove.php", true);
		xhttp.send(data);
	}


</script>

</html>