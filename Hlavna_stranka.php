<?php include 'header.php'; 
include 'classes/Home.php';?>

<!-- Main Content -->
<div class="container section mt-5 mb-5">
  <div class="card text-center">
    <div class="card-body">
      <h1 class="card-title heading-1-cyberukf">CyberUKF</h1>
      <p class="card-text lo1">Jedinečný zážitok z Ešportu, úplne prvý moderný počítačový klub v strednej Európe, herné nastavenia aké si len viete predstaviť, úžasný dizajn a dokonalé služby – to všetko je naša kybernetická športová aréna CyberUKF. Radi privítame všetky typy hráčov, všetkých vekových kategórií a môžete si byť istí, že sa stanete súčasťou našej komunity.</p>
      <a href="O_nas.php" class="btn btn-primary">O nás</a>
    </div>
  </div>
</div>

<!-- Price List Section -->
<div class="container section mb-5">
  <div class="text-center mb-5">
    <h2 class="price-list">PRICE LIST</h2>
  </div>
  <!-- <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="card-title main-arena">Main Arena</h3>
          <p class="card-text">RTX 3070, 165 Hz, 27"</p>
          <div>
            <h4>Weekdays</h4>
            <p>8:00 - 18:00: 4€/h, 10€/3h, 16€/5h</p>
            <p>18:00 - 8:00: 5€/h, 13€/3h, 21€/5h</p>
          </div>
          <div>
            <h4>Weekends</h4>
            <p>8:00 - 18:00: 5€/h, 13€/3h, 21€/5h</p>
            <p>18:00 - 8:00: 6€/h, 15€/3h, 26€/5h</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="card-title bootcamp">BootCamp</h3>
          <p class="card-text">RTX 3080, 165 Hz, 27"</p>
          <div>
            <h4>Weekdays</h4>
            <p>8:00 - 18:00: 5€/h, 13€/3h, 21€/5h</p>
            <p>18:00 - 8:00: 6€/h, 15€/3h, 26€/5h</p>
          </div>
          <div>
            <h4>Weekends</h4>
            <p>8:00 - 18:00: 6€/h, 15€/3h, 26€/5h</p>
            <p>18:00 - 8:00: 7€/h, 18€/3h, 31€/5h</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<?php
$home_object=new Home();
$home_object->room();
?>

<!-- Contact Information Section -->
<div class="container section mb-5 p-5">
  <div class="row text-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="png-1"></div>
          <h4 class="card-title heading-address mt-3">Address</h4>
          <p class="card-text">Nábrežie mládeže 1</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="png-2"></div>
          <h4 class="card-title heading-phone mt-3">Phone</h4>
          <a href="tel:+421950707236" class="d-block">+421 950 707 236</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="png-Yuz"></div>
          <h4 class="card-title heading-e-mail mt-3">E-mail</h4>
          <a href="mailto:timicrafter605@gmail.com" class="d-block">timicrafter605@gmail.com</a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>
