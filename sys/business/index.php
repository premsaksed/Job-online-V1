<?php include_once 'head.php';
include_once '../connectdb.php';


?>
<?php
$estab =$_SESSION["UserID"];
?>

<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">WORK</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								

							</div>
							<!--//col-->
							<div class="col-auto">

								<!-- <select class="form-select w-auto" >
										  <option selected value="option-1">All</option>
										  <option value="option-2">This week</option>
										  <option value="option-3">This month</option>
										  <option value="option-4">Last 3 months</option>
										  
									</select> -->
							</div>
							<div class="col-auto">
								<a class="btn btn-secondary" href="inwork.php">
									เพิ่ม
								</a>
							</div>
						</div>
						<!--//row-->
					</div>
					<!--//table-utilities-->
				</div>
				<!--//col-auto-->
			</div>
			<!--//row-->


		

<?php $UserID= $_SESSION["UserID"]; ?>
			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">รหัสงาน</th>
											<th class="cell">รายละเอียด</th>
											<th class="cell">อายุ</th>
											<th class="cell">วันที่</th>
											<th class="cell">ความเชี่ยวชาญ</th>
											<th class="cell">บริษัท</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										<?php $sql = "SELECT work.work_id,user.Firstname,work.work_id,work.position,work.age,work.ed_qual,work.estab,work.property,work.date,work.time FROM work INNER JOIN user ON  work.estab = user.ID where work.estab =$UserID";
										$result = $con->query($sql);
										if ($result->num_rows > 0) {
											// output data of each row
											while ($row = $result->fetch_assoc()) {
											?>
										<tr>
											<td class="cell">#<?php echo $row["work_id"]; ?></td>
											<td class="cell"><span class="truncate"><?php echo $row["position"]; ?></span></td>
											<td class="cell"><?php echo $row["age"]; ?></td>
											<td class="cell"><span><?php echo $row["date"]; ?></span><span class="note"><?php echo $row["time"]; ?></span></td>
											<td class="cell"><?php echo $row["property"]; ?></td>
											<td class="cell"><?php echo $row["Firstname"]; ?></td>
											<td class="cell"><a  href="editwork.php?id=<?php echo $row["work_id"]; ?>"><span class="badge bg-warning">edit</span></a> <a  href="delete.php?work_id=<?php echo $row["work_id"]; ?>"> <span class="badge bg-danger">del</span></a> <a  href="work_view.php?work_id=<?php echo $row["work_id"]; ?>"> <span class="badge bg-primary">View</span></a></td>
										</tr>

									<?php	
											}
										} else {
											echo "0 results";
										}
										$con->close();
										?>
									</tbody>
								</table>
							</div>
							<!--//table-responsive-->

						</div>
						<!--//app-card-body-->
					</div>
					<!--//app-card-->
					
					<!--//app-pagination-->

				</div>
				<!--//tab-pane-->

				



		</div>
		<!--//container-fluid-->
	</div>
	<!--//app-content-->

	<footer class="app-footer">
		<div class="container text-center py-3">
			<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

		</div>
	</footer>
	<!--//app-footer-->

</div>
<!--//app-wrapper-->


<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


<!-- Page Specific JS -->
<script src="assets/js/app.js"></script>

</body>

</html>
