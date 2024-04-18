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
                        <h1 class="h3 mb-0 text-gray-800">Admin</h1>
                       
                    </div>
                    <div class="container-fluid">

                    <!-- Page Heading -->


   <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="">



        <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">@</span>
  <input type="text" class="username form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
  <input type="email" class="email form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
  <input type="password" class="password form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
  <button type="submit" class="btn btn-primary">Login</button> 

</div>









            <!-- <label for="">username</label>
            <input type="text" class="username">
            <label for="">email</label>
            <input type="email" class="email">
            <label for="">password</label>
            <input type="password" class="password">
            <button type="submit">Login</button> -->
        </form>

        <script src="jquery.min.js"></script>
        <script>
            $("form").submit(function(ev){
                ev.preventDefault()
                let name = $(".username").val()
                let email = $(".email").val()
                let password = $(".password").val()
                if (name && email && password) {
                    $.post("do_add_admin.php" , {
                        user : name,
                        mail : email,
                        pass :password
                    }
                    ,function(data){
                        $("table").append(data)
                        $("input").val("")
                        $("#exampleModalToggle").modal("hide")
                    }
                    )
                    
                }

            })
        </script>
      </div>
      
    </div>
  </div> 
</div>
<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Add Admin</button>






                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">pr</th>
      <th scope="col">control</th>


    </tr>
  </thead>
  <tbody>
    
    <?php
    $select = "SELECT * FROM users";
    $result = $conn -> query($select);
    while ($row = $result->fetch_assoc()) {
        
    
    ?>
    
    <tr>
      
      <td><?=$row["id"]?></td>
      <td><?=$row["username"]?></td>
      <td><?=$row["password"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["pr"]?></td>
      <td>
      <a href="do_delete.php?id= <?= $row['id']?>"><button class="btn btn-danger"> Delete</button></a>
      </td>


    </tr>
    
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