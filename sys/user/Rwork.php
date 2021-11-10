<?php session_start();?>
<?php include_once 'head.php'; 
include_once '../connectdb.php';

if (!$_SESSION["UserID"]) {


    Header("Location: form_login.php");
} else { ?>


    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">งาน</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form   class="docs-search-form row gx-1 align-items-center">
					                    <div class="col-auto">
					                        <input type="text" id="search-docs" name="work_id" class="form-control search-docs" placeholder="Search">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
							    		    
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			    
			    <div class="row g-4">
				<?php
				$work_id = $_GET['work_id'];
				$sql = "SELECT * FROM work INNER JOIN user ON  work.estab = user.ID where  position LIKE '%".$work_id."%'";
										$result = $con->query($sql);
										if ($result->num_rows > 0) {
											// output data of each row
											while ($row = $result->fetch_assoc()) {
											?>
					 <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-thumb-holder p-3">
							    <span class="icon-holder">
	                                <i class="fas fa-file-alt text-file"></i>
	                            </span>
	                            <!-- <span class="badge bg-success">NEW</span> -->
	                             <a class="app-card-link-mask" href="#file-link"></a>
						    </div>
						   
							<div class="app-card-body p-3 has-card-actions">
							    
							    <h4 class="app-doc-title truncate mb-0"><a href="#file-link"><?php echo $row["position"]; ?></a></h4>
							    <div class="app-doc-meta">
								    <ul class="list-unstyled mb-0">
									    <li><span class="text-muted">ความเชี่ยวชาญ:</span> <?php echo $row["property"]; ?></li>
									    <li><span class="text-muted">บริษัท:</span> <?php echo $row["Firstname"]; ?></li>
									    <li><span class="text-muted">อายุ:</span> <?php echo $row["age"]; ?></li>
										<li><form action="rg_work.php" method="get">
										<input type="hidden" name="work" value="<?php echo $row["work_id"]; ?>">	
										<input type="hidden" name="business" value="<?php echo $row["ID"]; ?>">	
										<button class="badge bg-warning"> สมัครงาน</button> </form></li>
								    </ul>
							    </div><!--//app-doc-meta-->
							    
							    <div class="app-card-actions">
								   
						        </div><!--//app-card-actions-->
								    
						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<?php	
											}
										} else {
											echo "0 results";
										}
										$con->close();
										?>
				    
			    </div><!--//row-->
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

<?php } ?>