<?php
include "dbconnection.php";
class Home extends Database{
    private $db;
    public function __construct()
        {
            $this->db = $this->createconnection();
        }
public function room (){
    $sql="SELECT * FROM price";
    $query_run = $this->db->query($sql);
    $data=$query_run->fetchAll();
    echo'<div class="row">';
    for ($i=0; $i<count($data);$i++){
    echo '<div class="col-md-6">
      <div class="card mb-4">
        <div class="card-body">
          <h3 class="card-title main-arena">'.$data[$i]->room.'</h3>
          <p class="card-text">'.$data[$i]->characteristics.'"</p>
          <div>
            <h4>Weekdays</h4>
            <p>'.$data[$i]->time1.'</p>
          </div>
          <div>
            <h4>Weekends</h4>
            <p>'.$data[$i]->time2.'</p>
          </div>
        </div>
      </div>
    </div>';
    }
    
      echo "</div>";          
}
public function select(){
    try{
        $sql = "SELECT * FROM price";
        $query =  $this->db->query($sql);
        $portfolio = $query->fetchAll();
        return $portfolio;
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
public function delete(){
    try{
        $data = array('contact_id'=>$_POST['delete_contact']);
        $query = "DELETE FROM price WHERE id = :contact_id";
        $query_run =  $this->db->prepare($query);
        $query_run->execute($data);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
public function select_single($price_id){
  try{
      $data = array('price_id'=>$price_id);
      $query= "SELECT * FROM price WHERE id = :price_id";
      $query_run = $this->db->prepare($query);
      $query_run->execute($data);
      $contact_data = $query_run->fetch();
      return $contact_data;
  }
  catch(PDOException $e){
      echo $e->getMessage();
  }
}
public function edit($price_id, $new_data){
  try{
      $data=array('price_id'=>$price_id, 'room'=>$new_data['room'], 'characteristics'=>$new_data['characteristics'], 'time1' => $new_data['time1'], 'time2' => $new_data['time2']);
      $query="UPDATE price SET room = :room, characteristics = :characteristics, time1 = :time1, time2 = :time2 WHERE id = :price_id";
      $query_run = $this->db->prepare($query);
      $query_run->execute($data);
  }
  catch(PDOException $e){
      echo $e->getMessage();
  }
}
}
?>