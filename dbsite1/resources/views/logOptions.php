<Doctype html!>
<html>
<title>Cashier Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
    body {
        background-color: rgb(102,102,0);
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
  /*background-color: white;*/
}
 
.btn {
  background-color: #a6a89d;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  border-radius: 8px;
}
	.row{
		margin-top: 50px;
		width: 100%;
  		height: 500px;
	}
</style>
<body>
	
	<div class="row">
  		<div class="column">
    		<center><img src="Logo.png" alt="Logo" width="400" height="400"></center>
  		</div>
  
  		<div class="column1">
    		<h3 style="color: white; , text-align: left;">Login Option</h3>
        
         <button class="btn" onclick="document.location='admin.html'" style="font-size : 20px">Admin</button>
         <button class="btn" onclick="document.location='cash.html'" style="font-size : 20px">Cashier</button>
    
        </form>
  		</div>
	</div>

</body>
</html>