<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_add</title>
</head>
<body>
    <div class="admin_popup">
        <form>
            <label style="font-size:18px;padding:5px;padding-bottom:15px;">Add Account</label>
            <div style="display:inline-flex;height:60px;">
                <input id="Name" style="margin-left:10px;" placeholder="Name" type="text"></input>
                <input id="Surname" style="margin-left:10px;" placeholder="Surname" type="text"></input>
            </div>
            <div style="display:inline-flex;height:60px;">
                <input id="Branch" style="margin-left:10px;" placeholder="Branch" type="text"></input>
                <input id="Password" style="margin-left:10px;" placeholder="Password" type="text"></input>
            </div>
            <div style="display:inline-flex;height:60px;">
                <input id="Token" style="margin-left:10px;" placeholder="Token" type="number"></input>
                <select id="Active" class="input" style="margin-left:10px;" placeholder="Active" type="text">
                    <option value="Y" class="input">Yes</option>
                    <option value="N" class="input">No</option>
                </select>
            </div>
        </form>

        <button onclick="AddSave()" class="btnSignin" style="margin-left:1.9%;">Save</button>
        <button onclick="Admin_Cancel()" class="btnSignin">Cancel</button>
    </div>
</body>
</html>