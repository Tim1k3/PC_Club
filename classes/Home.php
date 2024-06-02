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
}
?>