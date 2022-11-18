<!DOCTYPE html>

<html>

<head>


    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
  .bt-1{
    border: 2px solid black;
    border-radius: 5px;
    width: 30%;
    margin-left: 500px;
    padding: 20px;
    margin-top: 80px;
}

.head{
    text-align: center;
    color: coral;
    font-family: 'Ubuntu', sans-serif;
    font-weight: bold;
}
</style>

<body>
<div class="bt-1">
        <div class="form-group">
     <form action="login.php" method="post">

       <h2 class="head">Login</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
          

                    <label for="email">Username</label> <br>
                    <input
                      type="text"
                      class="form-control mb-3 my-2"
                      id="username"
                      name="uname"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label> <br>
                    <input
                      type="password"
                      class="form-control my-2"
                      id="password"
                      name="password"
                    /> 
                    <div class="col-12">
       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </div>

     </form>

</body>

</html>