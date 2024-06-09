<html>
<head>
<style>
 body{background-color:#d4efdf !important}
   .r{margin-top:100px !important} 
   .c{border:3px; solid black; border-radius:6px; padding: 15 0px; background-color:wheat; box-shadow:0px 0px 10px 0px; filter:drop-shadow(10px 7px 10px gray);}
    



.b{width:120px; height:40px;}  


     </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   <form>
        <div class='row r'>
            <div class='col-md-4'></div>
            <div class='col-md-4 c '>
     <center>       <p><h3> Admin Login Panel</h3> </p> </center> 
            
            <hr>


 Username<input type='email'  name='t1' class="form-control"  placeholder="Enter your username" required><br>
      Password<input type='password' name='t2' class="form-control" placeholder="Enter password" required><br>
<center>     <input type='submit' value="Login" class="btn btn-primary b">
    <a href='signup.php' class="btn btn-primary b" >Sign Up</a> </center>

     
</div>

        <div class='col-md-4'></div>
</div>

     

</form>

</body>
<?php
if(isset($_GET['t1']))
{
$e=$_GET['t1'];
$p=$_GET['t2'];
$con=mysqli_connect('localhost','root','seedit','onlinestore');
$q="select * from login where username='$e' and password='$p'";
$res=mysqli_query($con,$q);
if($row=mysqli_fetch_array($res))
{
    echo" <script> alert('Login Successful')</script>";
    echo" <script> window.location='showaddproduct.php'</script>";

}
else
{
    echo" <script> alert('Wrong Password')</script>";
}

}
?> 

</html>
