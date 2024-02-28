<?php include_once('partials/main.php') ?>
<div class="pt-3 col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                        <tr>
                            <th> No. </th>
                            <th> Customer Name </th>
                            <th> City </th>
                            <th> Address </th>
                            <th> Phone </th>
                            <th> Product </th>
                            <th> Price </th>
                            <th colspan="2"> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php  
                            include "connect.php";
                              $query = "select * from use_order";
                              $records= mysqli_query($conn,$query);
                                while($data = mysqli_fetch_array($records))
                                {
                                  ?>
                                    <tr>
                                        <td><?php echo $data['order_id']; ?></td>
                                        <td><?php echo $data['customer_name']; ?></td>
                                        <td><?php echo $data['city']; ?></td>
                                        <td><?php echo $data['addr']; ?></td>
                                        <td><?php echo $data['phone']; ?></td>
                                        <td><?php echo $data['product_name']; ?></td>
                                        <td><?php echo $data['price']; ?></td>
                                        <td>
                                          <a href="delete_order.php?userid=<?php echo $data["order_id"]; ?>"><i class="mdi mdi-delete text-danger"></i></a>
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











             