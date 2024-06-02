<?php
include('header.php');
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
  header('Location: 404.php');
}
?> 
<main>
      
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h1>Admin rozhranie</h1>
               
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('footer.php')
?> 