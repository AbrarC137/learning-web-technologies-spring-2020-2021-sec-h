<center>
<form method="post" action="../controller/regCheck.php" enctype="multipart/form-data">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset> 
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id"><br/>
					Password<br/><input type="password" name="password"><br/>
					Confirm Password<br/><input type="password" name="repass"><br/>
					Name<br/><input type="text" name="name"><br/>
					User Type<hr/>
					<input type="radio" name="type" value="user"/>User
					<input type="radio" name="type" value="admin"/>Admin
					<hr/>
					<input type="submit" name="signup" value="Sign Up">
					<a href="login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>