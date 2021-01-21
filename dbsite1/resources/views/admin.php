<Doctype html!>
<html>
<title>Admin Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
    body {
        background-color: rgb(102,102,0);
    }
    
    .header {
  		padding: 10px;
  		text-align: center;
	}
	.column {
		
  		float: left;
  		width: 33.33%;
  		height: 500px;
  		padding: 15px;
	}
	.column1 {
		margin-left: 10px;
		background-color: rgb(153,153,0);
        float: left;
        width: 20%;
        padding: 15px;
	}
    .form-container {
        max-width: 300px;
        padding: 10px;
    }
    .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }
    .form-container .btn {
        background-color: #a6a89d;
        color: black;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }
    .row{
        margin-top: 20px;
        width: 100%;
        height: 500px;
    }
</style>
<body>
	<div class = "header">
		<h1 style="color:white;"> LOGIN </h1>
	</div>

	<div class="row">
  		<div class="column">
    		<center><img src="Logo.png" alt="Logo" width="400" height="400"></center>
  		</div>
  
  		<div class="column1">
    		<h3 style="color: white; , text-align: left;">Admin Login</h3>
        <form action="validate" class="form-container" method="post">
          
          <label><b>Username</b></label>
          <input type="text" placeholder="Please enter username" name="username" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Please enter password" name="password" required>

          <input type="submit" class="btn" value="Login">
          <input type="submit" class="btn" value="Cancel">                      
        </form>
  		</div>
	</div>

</body>
</html>