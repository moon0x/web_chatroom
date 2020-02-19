<!doctype html>
<html lang="en-US">
    <head>
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
        <title>Welcome!</title>
        <link href='../CSS/ChatStyle.css' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="../Javascript/jquery.js"></script>
        <script type="text/javascript" src="../Javascript/WelcomeUserJS.js"></script>
    </head>

    <body>

        <?php
            echo "<h1><b>Welcome ".$_SESSION['UserNameSession']."!</b></h1>";
        ?>
        <br/> <br/>

        <div id="ChatBox">
            <div id="ChatMessages"></div>
            <textarea id="ChatText" name="ChatText"></textarea>
        </div>

        <form id="radio">
            <label>Auto Refresh: </label>
            <input type="radio" name="gender" value="radio1" id="radio1" checked="checked">Enable
            <input type="radio" name="gender" value="radio2" id="radio2">Disable<br/><br/>
            <label id = "ChatTypeLabel">This is a Public Chatroom</label><br/><br/>
        </form>

        <form method="post" action="Redirect.php">
            <button name="exitRoom" id="Exit">Exit Chatroom</button>
        </form>

    </body>
</html>