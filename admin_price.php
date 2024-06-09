<h2>Price</h2>
               <?php
               include_once('classes/Home.php');
                $contact_object = new Home();
                $contacts = $contact_object->select();
                if(isset($_POST['delete_contact'])){
                  $contact_id = $_POST['delete_contact'];
                  // print_r($contact_id);
                  $contact_object->delete($contact_id);
                  header('Location: admin.php');
                  die();
                }
                echo '<table class="admin-table">';
                echo '<tr>
                        <th>room</th>
                        <th>characteristics</th>
                        <th>time1</th>
                        <th>time2</th>
                        <th>Delete</th>
                        <th>Edit</th>
                      </tr>';
                foreach($contacts as $c){
                  echo '<tr>';
                  echo '<td>'.$c->room;'</td>';
                  echo '<td>'.$c->characteristics;'</td>';
                  echo '<td>'.$c->time1;'</td>';
                  echo '<td>'.$c->time2;'</td>';
                  echo '<td>
                          <form action ="" method="POST">
                            <button type="submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazat</button>
                          </form>
                        </td>';
                  echo '<td>
                      <form action="price-update.php" method="POST">
                        <button type="submit" name="edit" value="'.$c->id.'"'.'>Editovat</button>
                        </form>
                    </td>';
                }
                
                echo '</table>';
               ?>