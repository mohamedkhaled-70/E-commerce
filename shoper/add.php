<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <form method="post" action="" class="btn-secondary" >
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">User Name</label>
  <input type="text" class="user form-control" id="exampleFormControlInput1" name="name" placeholder="User Name">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="email form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Passowrd</label>
  <input type="passowrd" class="form-control" id="exampleFormControlInput1" placeholder="Passowrd">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="message form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>


<script src="vendor/jquery/jquery.min.js"></script>
<script>
  $("form").submit(function (ev) {
    ev.preventDefault()
    let myname = $(".user").val()
    let myemail = $(".email").val()
    let mymessage = $(".message").val()
    if (myname && myemail && mymessage) {

      $.post("do_contact.php" , {
      name : myname,
      email : myemail,
      mass : mymessage

      }
       , function(data){
        $("form").after(data)
        $("input , textarea").val("")
      })
      
    }



    
  })
</script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>