<?php include_once('partials/main.php') ?>
<a class="pl-3" href="add_category.php"><button type="button" class="btn btn-social-icon-text btn-facebook"><i class="mdi mdi-plus"></i>Add Category</button></a>
<div class="pt-3 col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                        <tr>
                            <th> No. </th>
                            <th> Name </th>
                            <th> Images </th>
                            <th colspan="2"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                            include "connect.php";
                              $query = "select * from category";
                              $records= mysqli_query($conn,$query);
                                while($data = mysqli_fetch_array($records))
                                {
                                  ?>
                                    <tr>
                                        <td><?php echo $data['category_id']; ?></td>
                                        <td><?php echo $data['category_name']; ?></td>
                                        <td><img src="<?php echo './upload/'.$data['images'] ?>" height="100" width="100"></td>
                                        <td>
                                          <a href="edit_category.php?userid=<?php echo $data["category_id"]; ?>"><i class="mdi mdi-grease-pencil text-info"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                          <a href="delete_category.php?userid=<?php echo $data["category_id"]; ?>"><i class="mdi mdi-delete text-danger"></i></a>
                                        </td>
                                    </tr> 
                                          <?php
                                }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
<?php include_once('partials/footer.php') ?>    











             