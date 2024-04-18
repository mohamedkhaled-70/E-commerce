<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            include("includes/sitebar.php");

        ?>
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

        <?php
             include("includes/header.php");

        ?>
                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Message
                            
                        </h1>
                       
                    </div>
                    <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">message</th>
      <th scope="col">stutus</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $select = "SELECT * FROM message";
    $result = $conn -> query($select);
    while ($row = $result->fetch_assoc()) {
        
    
    ?>
    <tr>
      <td><?=$row["id"]?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["email"]?></td>
      <td>

            <!-- Button trigger modal -->




            <button type="button" class=" one btn btn-primary  " id="read<?=$row['id']?>" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row['id']?>">
  Massege
</button>

<!-- Modal -->
<div class="modal fade mass" id="exampleModal<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Massege</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?=$row['message']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                                             
                                                

                                            </td>
                                            <td>
                                                <?php
                                                    if ($row['stutus']==0) {
                                                        ?>
                                                     <button type="button" class="btn btn-primary unread<?=$row['id']?> " data-bs-dismiss="modal">UnRead</button>
                                                     <?php
                                                    }else{
                                                        ?>
                                                        <button type="button" class="btn btn-danger unread<?=$row['id']?> " data-bs-dismiss="modal">Read</button>
                                                        <?php
                                                    }

                                                ?>
        

                                                
                                            </td>
                                            
                                        </tr>


                                        <script src="vendor/jquery/jquery.min.js"></script>
<script >
  $(document).ready(function() {
  $("#read<?=$row['id']?>").click ( function(){
    let id=<?=$row['id']?>;

    $.post("fun/do_add_read.php"
        ,{
            ID:id
        },function(data){
            if (data=="success") {
               
                
              $(".unread<?=$row['id']?>").removeClass("btn-primary").addClass("btn-danger").text("Read");
              if ($(".unread<?=$row["id"]?>").hasClass("btn-primary")) {
                 $(".spa").text(function(i , oldText){
                newValue= parseInt(oldText )-1;
                return newValue < 0 ? 0 :newValue ;
               })

              }
             
       
              

            };

        });

  });

      
  });
  
</script>































   

    <?php
    }
    ?>
    
    
  </tbody>
</table>                 
                    </div>


                    

                    

                   

                </div>

            </div>

            <?php
                include("includes/footer.php");
            ?>

        </div>

    </div>
    

    

    <!-- Bootstrap core JavaScript-->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>