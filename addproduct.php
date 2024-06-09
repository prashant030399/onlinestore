<html>
<head>
<style>
body{background-color:#d4efdf !important};
.r{margin-top:100px; !important};
.c{border:3px solid gray; border-radius:5px; padding:0 15px; border:3px solid gray; border-radius:5px;  box-shadow:0px 0px 10px 0px !important   };
.b{width:120px; height:20px; }
.h1{font-size:3px; padding-left:35px; padding-top:5px;  }

.box{background-color:#4db6ac;}

.text{ margin-left:5%; width:90%; height:45px;}

</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <form method="POST"  enctype="multipart/form-data" >
        <div class='row r'>

            <div class='col-md-3'></div>

            <div class='col-md-6 c'>
                <div class='box'>
               
          <h6 class='h1'> Enter Product Details Here </h6>

<hr>

   <p class='text'>     Product ID<input type='text' name='t1' class="form-control" placeholder="Enter Product ID" >  </p>
   <p class='text'>     Product Name<input type='text' name='t2' class="form-control"placeholder="Enter Product Name"></p>
   <p class='text'>   Price<input type='text' name='t3' class="form-control"placeholder="Enter Price"></p>
   <p class='text'>      Quantity<input type='text' name='t4' class="form-control"placeholder="Enter Quantity"></p>
   <p class='text'>    Description<input type='text' name='t5' class="form-control"placeholder="Enter Description"></p>
   <p class='text'>      Photo<input type='file' name='file' class="form-control"></p> <br>
     <center>   <input type='submit' value="Insert" class="btn btn-primary b"   > <center>
        </div> </div>


        <div class='col-md-3'></div>
        

        
    
    
</div>



     

</form>
<?php
if(isset($_POST['t1']))
{
$i=$_POST['t1'];
$n=$_POST['t2'];
$p=$_POST['t3'];
$q=$_POST['t4'];
$d=$_POST['t5'];
$ph=$_FILES['file']['tmp_name'];
$ph1=$_FILES['file']['name'];

if(move_uploaded_file($ph,$ph1))
{
$con=mysqli_connect('localhost','root','seedit','onlinestore');
$q=" insert into profile values('$i','$n','$p','$q','$d','$ph1')";
$res=mysqli_query($con,$q);
if($res=true)
{
    echo"save";
}
else
{
echo"error";
}

}



}
?>






    
</body>
</html>
