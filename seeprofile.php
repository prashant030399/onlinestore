<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .p{font:red ;}
    




</style>


</head>

    <?php
    $i=$_GET['id'];
$con=mysqli_connect('localhost','root','seedit','onlinestore');
$q=" select * from profile where pid='$i' ";
$res=mysqli_query($con,$q);
while ($row = mysqli_fetch_array($res))
             {
              echo "
              <div class='row'>
<div class='col-md-1'></div>




              
<div class='col-md-4'>
                  <div class='card' style='width:300px; height:400px;'>
                      <img src='$row[photo]' alt='Card image' style='width:100% ;height:370px;'>
                      <h5 class='card-title'>$row[pname]</h5>
                  </div>
                  <h4 class='card-title '>Price:Rs.<span class='p'>$row[price]</span></h4>
                  <h5 class='card-text'>Items left:$row[quantity]</h5>
                  </div>


                  <div class='col-md-6'>
                      <div class='card-body'>
                      <h5 class='card-title'>Product ID:$row[pid]</h5>
                      <h5 class='card-title'>Product Name:$row[pname]</h5>
                          <h5 class='card-text'>Description:$row[description]</h5>
                      </div>
                      </div>
                 
                  
         


                  <div class='col-md-1'></div>
              </div>

  
              ";
            }


            ?>
        
            
           


</body>
</html>