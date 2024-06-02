<?php
include('classes/User.php');
include('header.php');
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
  header('Location: admin.php');
}
?> 
<main>

      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Vaše meno">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                </form>
               <?php
                  if(isset($_POST['user_login'])){
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $user_object = new User();

                    $login_success = $user_object->login($email, $password);
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