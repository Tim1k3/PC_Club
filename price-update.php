<?php
include('header.php');
include('classes/Home.php');
$price_object = new Home();
if(isset($_POST['edit'])){
  $edit_id = $_POST['edit'];
$price_data = $price_object->select_single($edit_id);

}
if($price_data){
  $room = $price_data->room;
  $characteristics = $price_data->characteristics;
  $time1 = $price_data->time1;
  $time2 = $price_data->time2;
}
if(isset($_POST['edit_id'])){
  $edit_id = $_POST['edit_id'];
  $new_data = array('room'=>$_POST['room'], 'characteristics'=>$_POST['characteristics'], 'time1'=>$_POST['time1'], 'time2'=>$_POST['time2']);
  $price_object->edit($edit_id, $new_data);
  header('Location: admin.php');
  die();
}
?> 
<main>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h1> Editovat price </h1>
              <form action="" method="POST">
                <label for="room">room:</label>
                <br>
                <input type="text" id ="room" name="room" value="<?php echo $room?>" required>
                <br>
                <label for="characteristics">characteristics</label>
                <br>
                <input type="text" id ="characteristics" name="characteristics" value="<?php echo $characteristics?>" required>
                <br>
                <label for="time1">time1</label>
                <br>
                <input type="text" id ="time1" name="time1" value="<?php echo $time1?>" required>
                <br>
                <label for="time2">time2</label>
                <br>
                <input type="text" id ="time2" name="time2" value="<?php echo $time2?>" required>
                <br>
                <button type="submit" name="edit_id" value="<?php echo $edit_id?>">Ulozit zmeny </button>
              </form>
               
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('footer.php')
?>