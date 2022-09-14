<?php
	// define title desc
	 $title = 'Select Template';
	//$desc = 'page description';
	 // delete image
	
	// include header file
	include("header/header.php");
	// email sent 
	if(isset($_POST['mailSend'])){
		include "email-sent.php";
	}

	// delete image
	if(isset($_GET['delete']))	{
		unlink($_GET['delete']);
	}

	// upload image
	if(isset($_FILES['image']['name'])){
		if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
		$f_name         =$_FILES['image']['name'];
		$f_tmp          =$_FILES['image']['tmp_name'];
		$f_size         =$_FILES['image']['size'];
		$f_extension    =explode('.',$f_name);
		$f_extension    =strtolower(end($f_extension));
		$f_newfile      =uniqid().'.'.$f_extension;
		$store          ="src/tempImg/".$f_newfile;
		
		if(!move_uploaded_file($f_tmp,$store))
		{
			echo 'Image Upload Failed .';
		}
		else
		{
		   header("Refresh:0");
		   
		}
	 }	
	}
	
?>
	<!-- main content strat ====================================================-->
  <section>
  	<div class="container-fluid py-5">
		<div class="row">
			<div class="col-sm-4">
				<h3>Select Image</h3>
				<form method="POST" role="form" enctype="multipart/form-data" id="imgUploadForm" >
 					<input type="file" id="image" name ="image" class=""  placeholder="Choose product Image" required="required" >
 				</form><br/>

				<div class="row">
				<?php 
				foreach(glob('src/tempImg/*.*') as $filename){
				 echo '<div class="col-sm-6"><i class="fa fa-trash delBtn" data-src="'.$filename.'" ></i> ';
			     echo '<img class="imgsBtn" src="'.$base_url.$filename.'" width="100%" style="cursor:pointer"  >';
			     echo '</div>';
			 	}
			 	?>
			 </div>
			</div>
			<!-- Template Part ====================================== -->
			<div class="col-sm-8">
				<h2>View Template &nbsp;&nbsp; <button class="btn btn-success selectTemp pull-right hidden" >Select Template</button> </h2>
				<div class="templateIs hidden">
					<?php include "template1.php"; ?>
				</div>

			</div>
		</div>
	</div>
  </section>

  <!-- mysend modal ==================================== -->
  <div class="modal" id="emailModal"  tabindex="-1" style="z-index: 99999">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Send Mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mailBOdy">
        <form id="mailFOrm" name="sendMail" method="post" action="" >
        	<div class="form-group">
        		<label>Subject</label>
        		<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required >
        	</div>
        	<div class="form-group">
        		<label>To <small>Email Id's</small></label>
        		<textarea name="emailTo" id="emailTo" rows="3" class="form-control" required></textarea>
        	</div>

        	<div class="form-group">
        		<input type="hidden" id="emailMsg" name="message" />
        		<button type="submit" class="btn btn-success" id="mailSend" name="mailSend" >Send <i class="fa fa-send"></i></button>
        	</div>
        </form>
      </div>
     
    </div>
  </div>
</div>
  <!--// mysend modal ==================================== -->

	<!--// main content strat ====================================================-->

	<script type="text/javascript">
		$(document).ready(function(){
			$(".imgsBtn").click(function(){
				var img = $(this).attr('src');
				$("#imgChange").attr("src",img);
				$(".templateIs").removeClass("hidden");
				$(".selectTemp").removeClass("hidden");
			});
			// when click select template button
			$(".selectTemp").click(function(){
				var msgHtml = $(".templateIs").html();
				$("#emailMsg").val(msgHtml);
				$("#emailModal").modal("show");
			});

			// upload image
			$("#image").change(function(){
				$("#imgUploadForm").submit();
			});
			// deleteImg image
			$(".delBtn").click(function(){
				var src = $(this).attr("data-src");
				window.location.href = "?delete="+src; 
			});
		});
	</script>

	<?php
		if(isset($_GET['delete']) OR isset($_FILES['image']['name']) OR isset($emailSent) )	{ ?>
			<script type="text/javascript">
				$(document).ready(function(){
					var url = "<?php echo $base_url.'email'; ?>";
					window.location.href = url; 
				});
			</script>
		<?php }	?>

<?php // include("header/footer.php"); ?>