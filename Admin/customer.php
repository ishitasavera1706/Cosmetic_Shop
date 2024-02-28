<?php include_once('partials/main.php') ?>
<div class="pt-3 col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                        <tr>
                            <th> No. </th>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> Username </th>
                            <th> Password </th>
                            <th> Email </th>
                            <th> Phone </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                            include "connect.php";
                              $query = "select * from register";
                              $records= mysqli_query($conn,$query);
                                while($data = mysqli_fetch_array($records))
                                {
                                  ?>
                                    <tr>
                                        <td><?php echo $data['reg_id']; ?></td>
                                        <td><?php echo $data['fname']; ?></td>
                                        <td><?php echo $data['lname']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['password']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['phone']; ?></td>
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











             