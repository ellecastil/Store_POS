<Doctype html!>
<html>
<title>Cashier Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
  
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: rgb(102,102,0);
  padding: 30px 0px;
  position: fixed;
}


.wrapper .sidebar ul li{
  margin-top: 20px;
  padding: 20px;
  text-align: center;
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li:hover{
  background-color: rgb(153,153,0);
}
     
.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .info{
  margin: 10px;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 10px;
}

.top-bar {
  padding: 10px;
  float: left;
  width: 40%;
  background-color: rgb(150,200,121);
}
.column2{
    margin-left: 10px;
    float: right;
    width: 50%;
    padding: 15px;
  }
  .form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 10px 0;
  border: none;
  background: #f1f1f1;
}
.form-container .btn {
  background-color: #d4d9d4;
  color: black;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

</style>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="Logo.png" alt="Logo" width="200" height="200">
        <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="product.html">Product</a></li>
            <li>Cashier</li>
            <li><a href="sales.html">Sales</a></li>
            <li><a href="admin.html">Exit</a></li>
            
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"><img src="liquor-header.jpg" alt="Logo" width="100%" height="150"></div>  
        <div class="info">
          <div><h2>Cashier List</h2></div>
          <div class="top-bar">
            <form action="validate" class="form-container" method="post">
      
            <label><b>Username</b></label>
          <input type="text" placeholder="Please enter username" name="username" required>

          <label><b>Password</b></label>
          <input type="password" placeholder="Please enter password" name="password" required>

          <input type="submit" class="btn" value="Add">
          <input type="submit" class="btn" value="Cancel">    
          </div>
          <div class="column2">
            <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"></table>
          </div>
      </div>
    </div>
</div>

</body>
</html>