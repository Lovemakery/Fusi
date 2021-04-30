					<div class="col-lg-4">
                        <div class="card-box">
                            <div class="card-block">
                                <h4 class="card-title">Add Files</h4>
								<div class="table-responsive">
									<form id="add_file" method="post">
										<div class="form-group">
											<label>File:</label>
											  <div class="controls">
											   <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" required>
												<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
												<input type="hidden" name="id" value="<?php echo $session_id ?>"/>
											 </div>
										</div>
										<div class="form-group">
										<label>File name</label>
											<input  name="name""  type="text" autofocus="" id="focusedInput" class="form-control input focused" required>
										</div>
										<div class="form-group">
										<label>Content</label>
											<input name="desc"    type="text" autofocus="" id="focusedInput" class="form-control input focused" required>
										</div>
										<div class="form-group text-center">
											<button name="save" class="btn btn-primary account-btn">Add</button>
										</div>
									</form>
								</div>
                            </div>
                        </div>
                    </div>
					    	<script>
								jQuery(document).ready(function($){
									$("#add_file").submit(function(e){
										$.jGrowl("Uploading File Please Wait......", { sticky: true });
										e.preventDefault();
										var _this = $(e.target);
										var formData = new FormData($(this)[0]);
										$.ajax({
											type: "POST",
											url: "add_files_save.php",
											data: formData,
											success: function(html){
												// console.log(html)
												// return false
												$.jGrowl("file Successfully  Added", { header: 'File Added' });
												setTimeout(function(){
													window.location = 'files.php';
												},2000)
											},
											cache: false,
											contentType: false,
											processData: false
										});
									});
								});
								</script>
						 
						 