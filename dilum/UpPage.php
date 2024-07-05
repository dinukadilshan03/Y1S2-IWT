<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Update Support Details</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href="styles/dbody.css">
        <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <body>
        <script src="Script/Script.js"></script>
        <br><br><hr><br><br>
        <form method="post" action="Update.php">
            <fieldset  style="border: 2px solid black; width: 50%; background-color:#f1f1f1; margin-left: 25%;">
                <br><b style="margin-left: 35%; font-size: 25px;">Update Client Data</b><br>
                <div style="margin-left: 6%;">
                    <br><br><b>ID:  </b>
                    <input type="text" name="cID">
                    <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: </b>
                    <input type="text" name="status" value="Reviewed">
                    <input style="background-color: rgb(55, 117, 209); margin-left: 60px; border-radius: 5px; color: white;" type="submit" value=" Update ">
                    </div><br><br>
            </fieldset>
        </form><br><br>
        <form method="post" action="Delete.php">
            <fieldset  style="border: 2px solid black; width: 50%; background-color:#f1f1f1; margin-left: 25%;">
                <br><b style="margin-left: 35%; font-size: 25px;">Delete Client Data</b><br>
                    <div style="margin-left: 6%;">
                        <br><br><b>ID:  </b>
                        <input type="text" name="cID">
                        <input style="background-color: rgb(55, 117, 209); margin-left: 60px; border-radius: 5px; color: white;" type="submit" value=" Delete ">
                    </div><br><br>
            </fieldset>            
        </form><br><br><hr><br><br>
    </body>
</html>