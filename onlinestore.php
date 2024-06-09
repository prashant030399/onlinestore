<html>
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>
  
    <div class='row'>

    <?php
$con=mysqli_connect('localhost','root','seedit','onlinestore');
$q=" select * from profile ";
$res=mysqli_query($con,$q);
while ($row = mysqli_fetch_array($res))
             {
              echo "
              
              <div class='col-md-4'>
                  <div class='card' style='width:300px; height:250px;'>
                      <img src='$row[photo]' alt='Card image' style='width:300px; height:100px;'>
                      <div class='card-body'>
                          <h4 class='card-title'>$row[pname]</h4>
                          <p class='card-text'>Rs.$row[price]</p>
                          <a href='seeprofile.php?id=$row[pid]' class='btn btn-primary' >See Profile</a>
                      </div>
                  </div>
              </div>
        
              ";
            }
?>  

</div>
</body>
</html>
