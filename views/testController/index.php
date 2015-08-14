<div class="row">
	<div class="col-md-4" style="margin:0; padding:10px;">
		<div class="block-heading-two">
			<h3><span>Đăng nhập</span></h3>
			<hr style="margin: 5px auto 20px auto">
		</div>
		<form action="" method="POST" role="form">
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="" placeholder="Tên đăng nhập">
			</div>
			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="" placeholder="Mật khẩu">
			</div>
			
			<button type="reset" class="btn btn-success">Reset</button>
			<button type="submit" class="btn btn-primary">Login</button><button class="whylogin">Tại sao tôi phải login?</button>
		</form>
		<div class="alert alert-info because">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thông tin hữu ích!</strong> 
			<br>Việc đăng nhập sẽ giúp bạn có thể xem được đáp án chi tiết của từng câu hỏi và đồng thời bài làm của bạn sẽ được lưu lại trên hệ thống.
		</div>
	</div>
	
	<div class="col-md-4" style="margin:0; padding:10px;">
	<form action="exam.php" method="GET">
		<div class="block-heading-two">
			<h3><span>Thiết lập test</span></h3>
		</div>		
		<!-- Accordion starts -->
		<div class="panel-group" id="accordion-alt3">
		 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
		  <div class="panel">	
			<!-- Panel heading -->
			 <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
					<i class="fa fa-angle-right"></i> Chọn đề thi
				  </a>
				</h4>
			 </div>
			 <div id="collapseOne-alt3" class="panel-collapse collapse">
				<!-- Panel body -->
				<div class="panel-body">
				  	<select name="testID" id="inputTest" class="form-control" required="required">
				  		<option value="1">Đề số 1</option>
				  		<option value="2">Đề số 2</option>
				  		<option value="3">Đề số 3</option>
				  		<option value="4">Đề số 4</option>
				  	</select>
				</div>
			 </div>
		  </div>
		  <div class="panel">
			 <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
					<i class="fa fa-angle-right"></i> Chọn số lượng câu hỏi
				  </a>
				</h4>
			 </div>
			 <div id="collapseTwo-alt3" class="panel-collapse collapse">
				<div class="panel-body">
				  <select name="numQues" id="inputNumQues" class="form-control" required="required">
				  	<option value="10">10 câu</option>
				  	<option value="20">20 câu</option>
				  	<option value="30">30 câu</option>
				  	<option value="50">50 câu</option>
				  </select>
				</div>
			 </div>
		  </div>
		  <div class="panel">
			 <div class="panel-heading">
				<h4 class="panel-title">
				  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
					<i class="fa fa-angle-right"></i> Thời gian làm bài
				  </a>
				</h4>
			 </div>
			 <div id="collapseThree-alt3" class="panel-collapse collapse">
				<div class="panel-body">
				  <!-- <select name="time" id="inputTime" class="form-control" required="required">
				  	<option value="10">10 phút</option>
				  	<option value="15">15 phút</option>
				  	<option value="20">20 phút</option>
				  	<option value="30">30 phút</option>
				  </select> -->
				  <input type="text" name="time" id="input" class="form-control" value="" required="required" placeholder="Nhập theo định dạng phút:giây (01:30 = 1'30s)">
				</div>
			 </div>
		  </div>
			
		  <button type="submit" name="action" value="begin" class="btn btn-danger" style="margin-top:15px;">Bắt đầu làm bài</button>
		</div>
	</form>
	</div>

	<div class="col-md-4" style="margin-top:20px;">
		<img src="<?php echo PATH_IMAGE;?>img1.png" alt="">
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('.whylogin').click(function() {
			$('.because').show();
			return false;
		});
	});
</script>