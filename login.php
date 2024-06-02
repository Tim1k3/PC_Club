<?php
include_once('classes/User.php');
include_once('header.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
  header('Location: admin.php');
}
?> 
<main>

      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
                <h1>Prihlásenie</h1>
                <a href="register.php">regestracia</a>
                <form action="" method="POST">
                    <input type="text" name="name" placeholder="Vaše meno">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                </form>
               <?php
                  if(isset($_POST['user_login'])){
                    $name = $_POST['name'];
                    $password = $_POST['password'];

                    $user_object = new User();

                    $login_success = $user_object->login($name, $password);
                    if($login_success){
                      header('Location: admin.php');
                      die();
                    }
                    else{
                      echo 'Nespravne meno alebo heslo';
                    }
                  }
               ?>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('footer.php')
?> 