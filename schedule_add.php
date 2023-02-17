<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add_schedule</title>
</head>
<body>
    <h2>Add New Schedule</h2>
    <div style="width: 99%; height: 100px; justify-content: center; display: inline-flex; align-items: center;">
    <input class="input2" id="id"type="hidden" style="margin-left: 50px;">
        <div style="display:inline-flex; width:100%;">
            <label style="width: 150px;padding-top:15px;display:flex;padding-left:50px;">NAME</label>
            <input class="input2" id="name"type="text" placeholder="Name" style="margin-left: 50px;">
        </div>
        <div style="display:inline-flex; width:100%;">
            <label style="width: 150px;padding-top:15px;display:flex;padding-left:50px;">JOB</label>
            <input class="input2"id="job"type="text" placeholder="Job" style="margin-left: 50px;">
        </div>
    </div>
    <div style="width: 99%; height:70px;justify-content:center;display:inline-flex;">
        <div style="display:inline-flex; width:100%;">
            <label style="width: 150px;padding-top:15px;display:flex;padding-left:50px;">TIME</label>
            <input class="input2" id="time" type="date" placeholder="dd-mm-yyyy" style="margin-left: 50px;">
        </div>
        <div style="display:inline-flex; width:100%;">
            <label style="width: 150px;padding-top:15px;display:flex;padding-left:50px;">DEADLINE</label>
            <input class="input2"id="deadline"type="date" min="1997-01-01" max="2030-12-31" placeholder="Deadline" style="margin-left: 50px;">
        </div>
    </div>
    <div style="width: 99%; height:70px;justify-content:center;display:inline-flex;">
        <div style="display:inline-flex; width:100%;">
            <label style="width: 150px;padding-top:15px;display:flex;padding-left:50px;">LOCATION</label>
            <input class="input2"id="location"type="text" min="2022-01-01" placeholder="Location" style="margin-left: 50px;">
        </div>
        <div style="display:inline-flex; width:100%;">
            <label style="width: 150px;padding-top:15px;display:flex;padding-left:50px;">COMPLETED</label>
            <select id="done"placeholder="Done" style="margin-left: 50px;width:345px;height:45px;outline:none;font-family:sans-serif;font-weight:lighter;font-size:14px;margin-bottom:10px;border:none;padding-left:10px;border-radius:8px;transition:.2s;">
                <option value="N">NO</option>
                <option value="Y">YES</option>
            </select>
        </div>
    </div>
    <div style="display:flex; justify-content:center; align-items: end; height:58%;">
        <button onclick="Addsched()" onclick="backsched()" class="btnSave">Save</button>
        <button onclick="Cancel_sched()"class="btnSave" style="margin-left:10px;">Cancel</button>
    </div>
</body>
</html>