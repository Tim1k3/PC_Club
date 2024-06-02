<?php include 'header.php'; 
require_once 'classes/contactclass.php'; ?>

<?php 




// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $consent = isset($_POST['consent']) ? 'yes' : 'no';

    // Save data to the database
    $contact_object=new Contact();
    $contact_object->saveContactData($name, $email, $message, $consent);
header("Location: Thankyou.php");
    // Show SweetAlert and redirect using JavaScript
    // echo "<script>
    //     document.addEventListener('DOMContentLoaded', function() {
    //         Swal.fire({
    //             title: 'Thank you for contacting us!',
    //             text: 'We have received your message.',
    //             icon: 'success',
    //             confirmButtonText: 'OK'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 window.location.href = 'Thankyou.php';
    //             }
    //         });
    //     });
    // </script>";
}
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="contact">Our Contact</div>
      <form id="contactForm" method="POST" action="">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" placeholder="Enter your message" required></textarea>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="consent" name="consent">
          <label class="form-check-label" for="consent">Súhlas so spracovaním osobných údajov</label>
        </div>
        <button type="submit" class="btn btn-primary">Rezervovať</button>
      </form>
    </div>
    <div class="col-md-6">
      <div class="contact">Informácie o rezervácii</div>
      <div class="alert alert-info" role="alert">
        <strong>Ak ešte nemáte účet v našej kybernetickej aréne:</strong> Navštívte Nábrežie mládeže 1. Tam si môžete vytvoriť účet a začať hrať svoje obľúbené hry.
      </div>
      <div class="alert alert-info" role="alert">
        <strong>Ak už máte účet:</strong> Môžete si ho dobiť online a rezervovať si ľubovoľný voľný počítač, aby ste sa po príchode mohli okamžite pustiť do svojej obľúbenej hry.
      </div>
      <p class="text-muted">Kliknutím na tlačidlo Rezervovať môžete prejsť na rezerváciu počítača alebo si dobiť účet online.</p>
    </div>
  </div>
</div>

<style>
  body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    background-color: #d800fe;
    color: white;
  }

  .text-muted {
    color: white !important;
  }
  
  .card-text {
    color: #333;
  }
</style>

<!-- Include SweetAlert2
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

<?php include 'footer.php'; ?>
