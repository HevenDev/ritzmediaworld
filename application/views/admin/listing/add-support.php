<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Listing</title>
    <?php $this->load->view("Element/admin/header_common.php");?>

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
     <?php $this->load->view("Element/admin/header.php");?>
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Manage Listing</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=BASE_URL?>admin/dashboard">Home</a></li>
						<li><i class="fa fa-laptop"></i> Listing</li>						  	
					</ol>
				</div>
			</div>
              
           
		
			
          <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                        Add Listing
							
							 <br>
							<a style="float:right;margin-bottom:10px;" class="btn btn-primary admin-buttns" href="<?=BASE_URL?>admin/listing/support" title="Back">Back</a>
                          </header>
                         <?php
if(validation_errors())
echo'<div class="error" id="FLASH" name="FLASH">'.validation_errors().'</div>';
if($this->session->flashdata("error"))  echo '<div class="normal" id="FLASH" name="FLASH">'.$this->session->flashdata("error").'</div>';
?> 

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						<br><br>
<form method="post" action="<?=BASE_URL.'admin/listing/add_support';?>" id="" class="form-horizontal" role="form" enctype="multipart/form-data">

<input id="SaveStatus" name="submitF" type="hidden" value="1" />

                              
<div class="row">
                  <div class="col-lg-6">
							  
								 
				<div class="form-group">
				<label for="icode" class="col-md-12 ravi_margin">Hotel Type</label>
				<div class="col-md-12 ravi_margin">

				<select name="hotel_type" id="hotel_type" class="form-control">
				<option value="">Please Select</option>

				<option value="Hotel">Hotel</option>
				<option value="Resorts">Resorts</option>

				</select>
				</div>
				</div>

   
                              <div class="form-group">
                  <label for="icode" class="col-md-12 ravi_margin">Title</label>
                 <div class="col-md-12 ravi_margin">
<input class="form-control" value="<?=(isset($_POST['listing_title'])!='')?$_POST['listing_title']:''?>" name="listing_title" placeholder="Title" type="text">
                                    </div>
                                </div>
								
								

<div class="form-group">
<label for="icode" class="col-md-12 ravi_margin">Email ID</label>
<div class="col-md-12 ravi_margin">
<input class="form-control" value="<?=(isset($_POST['email_id'])!='')?$_POST['email_id']:''?>" name="email_id" placeholder="Email ID" type="text">
</div>
</div>



<div class="form-group">
<label for="icode" class="col-md-12 ravi_margin">Phone Number</label>
<div class="col-md-12 ravi_margin">
<input class="form-control" value="<?=(isset($_POST['phone_number'])!='')?$_POST['phone_number']:''?>" name="phone_number" placeholder="Phone Number" type="text">
</div>
</div>


<div class="form-group">
<label for="icode" class="col-md-12 ravi_margin">Mobile Number</label>
<div class="col-md-12 ravi_margin">
<input class="form-control" value="<?=(isset($_POST['mobile_number'])!='')?$_POST['mobile_number']:''?>" name="mobile_number" placeholder="Mobile Number" type="text">
</div>
</div>

                             	
                               
								 <div class="form-group">
                                    <label for="comment" class="col-md-12 ravi_margin">About Us</label>
                                    <div class="col-md-12 ravi_margin">
                                        <textarea name="listing_description" class="form-control ckeditor" rows="5" id="comment"><?=(isset($_POST['listing_description'])!='')?$_POST['listing_description']:''?></textarea>
                                    </div>
                                </div>  
								<div class="form-group">
		<label for="email" class="col-md-12 ravi_margin">About Us Image </label>
		<div class="col-md-12 ravi_margin">
		<input name="listing_image1" value="listing_image1" id="fileupload" class="form-control" placeholder="" type="file">
		<?php  $src = $this->image->getImageSrc("listings",@$_POST['listing_image1'],"");?>
		<img src="<?=$src?>" style="width:110px;"/>
		<span>Image Size must be (Width=760 px * Height= 470 px) - 2 MB</span>
		</div>
		</div>

						<div class="form-group" style="display:none;">
						<label for="comment" class="col-md-12 ravi_margin">Tarrif & Reservation</label>
						<div class="col-md-12 ravi_margin">
						<textarea name="approx_distance" class="form-control ckeditor" rows="5" id="approx_distance"><?=(isset($_POST['approx_distance'])!='')?$_POST['approx_distance']:''?></textarea>
						</div>
						</div> 
							<div class="form-group">
				<label for
<div class="form-group">
<label for="comment" class="col-md-12 ravi_margin">Tarrif & Reservation</label>
<div class="col-md-12 ravi_margin">
<textarea name="tarrif_desc" class="form-control ckeditor" rows="5" id="tarrif_desc"><?=(isset($_POST['tarrif_desc'])!='')?$_POST['tarrif_desc']:''?></textarea>
</div>
</div> 

</div>
</div>
	 <div class="col-lg-6">					
<div class="form-group">
<label for="icode" class="col-md-12 ravi_margin">Camp Surrounding</label>
<div class="col-md-12 ravi_margin">
<textarea name="camp_desc" class="form-control ckeditor" rows="5" id="camp_desc"><?=(isset($_POST['camp_desc'])!='')?$_POST['camp_desc']:''?></textarea>
</div>
</div>
<div class="form-group">
<label for="email" class="col-md-12 ravi_margin">Camp Surrounding Image</label>
<div class="col-md-12 ravi_margin">
<input name="listing_image2" value="listing_image2" id="fileupload" class="form-control" placeholder="" type="file">
<?php  $src = $this->image->getImageSrc("listings",$_POST['listing_image2'],"");?>
<img src="<?=$src?>" style="width:110px;"/>
<span>Image Size must be (400 px * 400 px) - 2 MB</span>
</div>
</div>


<div class="form-group">
<label for="email" class="col-md-12 ravi_margin">Camp Surrounding Video</label>
<div class="col-md-12 ravi_margin">
<input name="listing_video" value="listing_video" id="fileupload" class="form-control" placeholder="" type="file">
<?php  $src = $this->image->getImageSrc("listings/video",$_POST['listing_video'],"");?>
<?php if($src!=""){ ?><video width="320" height="240" controls>
  <source src="<?=$src?>" type="video/mp4">
Your browser does not support the video tag.
</video>
<?php } ?>
<span>Image Size must be (400 px * 400 px) - 2 MB</span>
</div>
</div>	

   </div> 
              
 				
		       
								<div class="form-group">
                                    <label for="sel3" class="col-md-12 ravi_margin">City</label>
                                  <div class="col-md-12 ravi_margin">
                                      <select name="city" id="city" class="form-control">
									<?php $AllCity = $this->listing_model->GetALLEnableCity();
									foreach($AllCity as $CityData){ ?>
										<option value="<?=$CityData['id']?>"><?=$CityData['name']?></option>
									<?php }
									?>
									 </select>
                                </div>
                                </div>
								
<div class="form-group">
<label for="comment" class="col-md-12 ravi_margin">Features</label>
<div class="col-md-12 ravi_margin">
<textarea name="property_features" class="form-control ckeditor" rows="5" id="property_features"><?=(isset($_POST['property_features'])!='')?$_POST['property_features']:''?></textarea>
</div>
</div> 

<div class="form-group">
<label for="comment" class="col-md-12 ravi_margin">Policies</label>
<div class="col-md-12 ravi_margin">
<textarea name="policies" class="form-control ckeditor" rows="5" id="policies"><?=(isset($_POST['policies'])!='')?$_POST['policies']:''?></textarea>
</div>
</div>   
						
						<div class="form-group">
<label for="icode" class="col-md-12 ravi_margin">Address</label>
<div class="col-md-12 ravi_margin">
<input class="form-control" value="<?=(isset($_POST['address'])!='')?$_POST['address']:''?>" name="address" placeholder="Address" type="text">
</div>
</div>                         


<div class="form-group">
<label for="comment" class="col-md-12 ravi_margin">Activities Description</label>
<div class="col-md-12 ravi_margin">
<textarea name="activities" class="form-control ckeditor" rows="5" id="activities"><?=(isset($_POST['activities'])!='')?$_POST['activities']:''?></textarea>
</div>
</div>  

<div class="form-group">
<label for="comment" class="col-md-12 ravi_margin">Map</label>
<div class="col-md-12 ravi_margin">
<textarea name="map" class="form-control ckeditor" rows="5" id="map"><?=(isset($_POST['map'])!='')?$_POST['map']:''?></textarea>
</div>
</div>  

								
<div class="form-group">
                                    <label for="sel4" class="col-md-12 ravi_margin">Status</label>
                                  <div class="col-md-12 ravi_margin">
                                      <select name="status" id="status" class="form-control">
									<option value="1" <?=(@$_POST['status']==1)?'selected':'';?>>Active</option>
									<option value="0" <?=(@$_POST['status']==0)?'selected':'';?>>In-active</option>
									
									 </select>
                                </div>
                                </div>  
								<div style="margin-top:10px" class="form-group">
								<!-- Button -->

								<div class="col-sm-12 text-center controls">
								<button type="submit" class="btn btn-default2">Submit</button>
								</div>
								</div>


								<div class="form-group">
								<div class="col-md-12 control">

								</div>
								</div> 
</div>
								
								
								
                                 
                            </form>   
                   
                  </div>
              </div>
            
		
              <!-- project team & activity end -->

          </section>
         <?php $this->load->view("Element/admin/footer_common.php");?>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

 <?php $this->load->view("Element/admin/footer.php");?>
<script>
 $(document).ready(function(){
    $('#myTable').DataTable();
})
 </script>
 
 <script>
 $(window).load(function (){
	 //show_state('101');
	  
 });
      function show_state(country,current_id2){ 
     
        
		 
        $.ajax({
			 url : "<?php echo base_url('user/show_state'); ?>",
          type: "POST",
          data: {'countryval': country ,'current_id':current_id2 },
		  dataType: 'json',
           success: function(data2){
         
           $("#state").html(data2);
           }, 
		   error: function(){
		   alert("there is error");
		   }
         });
		 
       }
	   
	    function show_city(state,current_id2) {
      
        if(state==""){ $("#city").prop("disabled",true); }else{ $("#city").prop("disabled",false); }
        $.ajax({
			 url : "<?php echo base_url('user/show_city'); ?>",
          type: "POST",
          data: {'state': state, 'current_id':current_id2 },
		  dataType: 'json',
           success: function(data){
           
           $("#city").html(data);
           }, 
		   error: function(){
		   alert("there is error");
		   }
         });
		 
       }
    
 </script>
  <script type="text/javascript" src="<?=ADMIN_DIR?>assets/ckeditor/ckeditor.js"></script>
  </body>
</html>
