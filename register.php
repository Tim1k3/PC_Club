<?php
    include('header.php');
    include_once('classes/User.php');
  $user_object = new User();
  if(isset($_POST['user_register'])){
    $meno = $_POST['meno'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if($password === $confirm_password){
      if($user_object->register($meno, $password)){
        echo "<p> Registracia uspeshna</p>";

      }
      else{
        echo "<p> Registracia zlyhala</p>";
      }
    }
      else{
        echo "<p> Hesla sa nezhoduju</p>";
      }
    }
  
?> 
<main>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h1>Registrácia</h1>
              <form action="" method="POST">
                    <label for="meno">meno:</label>
                    <br>
                    <input type="meno" id="meno" name="meno" required>
                    <br>
                    <label for="password">Heslo:</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="confirm_password">Zopakovať heslo:</label>
                    <br>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br>
                    <button type="submit" name="user_register">Registrovať sa</button>
              </form>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('footer.php')
?>