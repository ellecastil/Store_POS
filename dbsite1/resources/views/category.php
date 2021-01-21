<Doctype html!>
<html>
<title>Category</title>
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
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 10px;
}

.top-bar {
  border: 2px solid black;
  padding: 10px;
}
 .form-container input[type=text] {
  width: 30%;
  padding: 8px;
  border: 1px solid #afb3ba;
  background: #f1f1f1;
}
.form-container .btn {
  background-color: #38a816;
  color: black;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.8;
}
.form-container .btn1 {
  background-color: #bf190a;
  color: black;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.8;
}

</style>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="Logo.png" alt="Logo" width="200" height="200">
        <ul>
            <li>Category</li>
            <li><a href="product.html">Product</a></li>
            <li><a href="cash_list.html">Cashier</a></li>
            <li><a href="#">Sales</a></li>
            <li><a href="#">Exit</a></li>
            
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"><img src="liquor-header.jpg" alt="Logo" width="100%" height="150"></div>  
        <div class="info">
          <div><h2>Category</h2></div>
          <div class="top-bar">
            <form action="validate" class="form-container" method="post">
            <label><b>Category Name</b></label>
            <input type="text" placeholder="Please enter category" name="Category" required>
            <input type="submit" class="btn" value="Add">
            <input type="submit" class="btn" value="Edit"> 
            <input type="submit" class="btn1" value="Delete"> 
          </div>
          <div>
            <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1"></table>
          </div>
      </div>
    </div>
</div>

</body>
</html>