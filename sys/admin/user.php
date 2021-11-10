<?php include_once 'head.php';
include_once '../connectdb.php';


?>
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">ผู้ใช้งาน</h1>
				</div>
				<div class="col-auto">
					<div class="page-utilities">
						<div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							<div class="col-auto">
								<form class="table-search-form row gx-1 align-items-center">
									<div class="col-auto">
										<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
									</div>
									<div class="col-auto">
										<button type="submit" class="btn app-btn-secondary">Search</button>
									</div>
								</form>
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





			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">รหัส</th>
											<th class="cell">ชื่อ</th>
											<th class="cell">สิทธิการเข้าถึง</th>


											<!-- <th class="cell"></th> -->
										</tr>
									</thead>
									<tbody>
										<?php $sql = "SELECT * FROM user ";
										$result = $con->query($sql);

										if ($result->num_rows > 0) {
											// output data of each row
											while ($row = $result->fetch_assoc()) {
										?>
												<tr>
													<td class="cell">#<?php echo $row["ID"]; ?></td>
													<td class="cell"><span class="truncate"><?php echo $row["Firstname"]; ?></span></td>
													<td class="cell"><?php if ($row["Userlevel"]=='M') {
														echo 'ผู้หางาน';
																		}
																		if ($row["Userlevel"]=='B') {
																			echo 'บริษัท';
																		}else{
																			echo 'ผู้ดูแลระบบ';
																		} ?></td>
													<!-- <td class="cell"><a  href="editwork.php?id=<?php echo $row["work_id"]; ?>"><span class="badge bg-warning">edit</span></a> <a  href="delete.php?work_id=<?php echo $row["work_id"]; ?>"> <span class="badge bg-danger">del</span></a> <a  href="work_view.php?work_id=<?php echo $row["work_id"]; ?>"> <span class="badge bg-primary">View</span></a></td> -->
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