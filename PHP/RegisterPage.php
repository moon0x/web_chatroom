<link href='../CSS/RegisterStyle.css' rel='stylesheet' type='text/css'>

<div class='login'>
    <h2>Register</h2>

    <form method="post" action="InsertUser.php">
        <input name='UserName' placeholder='Username' type='text' >
        <input id='pw' name='UserPassword' placeholder='Password' type='password'>
        <input id='pw' name='UserPassword2' placeholder='Retype Password' type='password'>
        <input name='UserMail' placeholder='E-Mail Address' type='text'>
        <input class='animated' type='submit' value='Register'>
    </form>

    <a class='forgot' href='LoginPage.php'>Already have an account?</a>
</div>
