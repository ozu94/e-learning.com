<div class="row">
	<div class="col-md-8 testStart">
		<div class="block-heading-two">
			<h3 class="text-center">Part 5_<span class="color">TOEIC_Đề số 1</span></h3>
		</div>
		<hr>
		<form action="exam.php" method="GET" role="form">
			<div class="form-group">
			<?php	
				foreach ($Questions as $key => $value) {
					echo "<label for=''>Câu ".$value['id'].": ".$value['question']."</label><br>";
			?>
				<div class="radio" ><label><input type="radio" name="<?php echo $value['id']; ?>" id="input" value="a">A. <?php echo $value['a']; ?></label></div>
				<div class="radio" ><label><input type="radio" name="<?php echo $value['id']; ?>" id="input" value="b">B. <?php echo $value['b']; ?></label></div>
				<div class="radio" ><label><input type="radio" name="<?php echo $value['id']; ?>" id="input" value="c">C. <?php echo $value['c']; ?></label></div>
				<div class="radio" ><label><input type="radio" name="<?php echo $value['id']; ?>" id="input" value="d">D. <?php echo $value['d']; ?></label></div>
			<?php echo "<br>"; } ?>
			</div>
			<hr>
			<center><button type="submit" name="action" value="finish" class="btn btn-color">Submit</button></center>
		</form>
	</div>

	<div class="col-md-4">
		<div class="panel panel-info" id="sidebar">
			  <div class="panel-heading">
					<h3 class="panel-title text-center">Time Remaining</h3>
			  </div>
			  <div class="panel-body">
				<form name="cd" class="text-center">
        		<label id="txt" for="input-id" name="disp"></label>
				</form>
			  </div>
		</div>
	</div>
</div>

<script language="javascript">
// Created by: Neill Broderick :: http://www.bespoke-software-solutions.co.uk/downloads/downjs.php

var mins
var secs;

function cd(startMins,startSecs) {
    mins = 1 * m(startMins); // change minutes here
    secs = 0 + s(":"+startSecs); // change seconds here (always add an additional second to your total)
    redo();
}

function m(obj) {
    for(var i = 0; i < obj.length; i++) {
        if(obj.substring(i, i + 1) == ":")
        break;
    }
    return(obj.substring(0, i));
}

function s(obj) {
    for(var i = 0; i < obj.length; i++) {
        if(obj.substring(i, i + 1) == ":")
        break;
    }
    return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
    var disp;
    if(mins <= 9) {
        disp = " 0";
    } else {
        disp = " ";
    }
    disp += mins + " minutes : ";
    if(secs <= 9) {
        disp += "0" + secs + " seconds";
    } else {
        disp += secs + " seconds";
    }
    return(disp);
}

function redo() {
    secs--;
    if(secs == -1) {
        secs = 59;
        mins--;
    }
    // document.cd.disp.value = dis(mins,secs); // setup additional displays here.
    $('#txt').html(dis(mins,secs));
    if((mins == 0) && (secs == 0)) {
        window.alert("Time is up. Press OK to continue."); // change timeout message as required
        // window.location = "yourpage.htm" // redirects to specified page once timer ends and ok button is pressed
    } else {
        cd = setTimeout("redo()",1000);
    }
}

function init() {
  cd("0","10");
}
window.onload = init;
</script>

<script src="<?php echo PATH_JS ?>stickySidebar.js"></script>	
<script>
	$(document).ready(function() {
		$('#sidebar').stickySidebar({
			sidebarTopMargin: 20,
			footerThreshold: 100
		});
	});
</script>