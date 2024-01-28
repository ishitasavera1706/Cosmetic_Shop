<?php include_once('partials/main.php') ?>
<div class="pt-3 col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Payment</h4>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th> No. </th>
							<th> Customer Name </th>
							<th> Card Number </th>
							<th> Expiry </th>
							<th> CVV/CVC </th>
						</tr>
					</thead>
					<tbody>
						<?php  
						include "connect.php";
						$query = "select * from payment";
						$records= mysqli_query($conn,$query);
						while($data = mysqli_fetch_array($records))
						{
							?>
							<tr>
								<td><?php echo $data['payment_id']; ?></td>
								<td><?php echo $data['customer_name']; ?></td>
								<td><?php echo $data['card_number']; ?></td>
								<td><?php echo $data['expiry']; ?></td>
								<td><?php echo $data['cvv_cvc']; ?></td>
								<td>
									<a href="delete_payment.php?userid=<?php echo $data["payment_id"]; ?>"><i class="mdi mdi-delete text-danger"></i></a>
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