<?php include_once('partials/main.php') ?>
<div class="pt-3 col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Contact</h4>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th> No. </th>
              <th> Name </th>
              <th> Email </th>
              <th> Message </th>
              <th> Action </th>
            </tr>
          </thead>
          <tbody>
            <?php  
            include "connect.php";
            $query = "select * from contact";
            $records= mysqli_query($conn,$query);
            while($data = mysqli_fetch_array($records))
            {
              ?>
              <tr>
                <td><?php echo $data['contact_id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['message']; ?></td>
                <td>
                  <a href="delete_contact.php?userid=<?php echo $data["contact_id"]; ?>"><i class="mdi mdi-delete text-danger"></i></a>
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











