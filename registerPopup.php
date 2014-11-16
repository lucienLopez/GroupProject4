<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Eat in Cork</title>
        <link rel="stylesheet" href="../css/login.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    </head>

    <body>
   	<div id="container" class="pt50 pb50"> 
   	<h1>Register</h1>
   	<h2 class="title-xs">Join us for more utilities</h2>
   	
   	<form action="tools/register.php" method="post">
   		<p class="title-form title-xs">Name</p>
   		<input type="text" name="userName" class="input w100 mt10" placeholder="Name" onchange="registerFormCheckUsername()" maxlenght="5110">
   		<p class="title-form title-xs">Email</p>
   		<input type="email" name="email" class="input w100" placeholder="Email" maxlenght="256" onchange="registerFormCheckConfirmEmail()">
   		<input type="email" name="emailConfirm" class="input w100 mt10" placeholder="Confirm Email" maxlenght="256" onchange="registerFormCheckConfirmEmail()">
   		<p class="title-form title-xs">Password</p>
   		<input type="password" name="password" class="input w100 mt10" placeholder="Password" onchange="registerFormCheckConfirmPassword()">
   		<input type="password" name="passwordConfirm" class="input w100 mt10" placeholder="Confirm Password" onchange="registerFormCheckConfirmPassword()">
   		<input type="submit" class="button w100" value="Continue">
   	</form>
   	<button type="button" class="button w100 mt15" onclick="hideRegisterPopup()">Cancel</button>
	</div> 
    </body>
</html>