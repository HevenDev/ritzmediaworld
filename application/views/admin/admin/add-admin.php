<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Add New Admin</title>
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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Add Admin</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?=BASE_URL?>admin/dashboard">Home</a></li>
						<li><i class="fa fa-laptop"></i>Add New Admin</li>						  	
					</ol>
				</div>
			</div>
              
           
		
			
          <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Add New Admin
                          </header>
                          <div class="panel-body">
                          <?php
                    if(validation_errors())
                    echo'<div class="error" id="FLASH" name="FLASH">'.validation_errors().'</div>';
                    if($this->session->flashdata("error")){ 
                        echo '<div class="alert alert-danger" role="alert">'.$this->session->flashdata("error").'</div>';}
                    else if($this->session->flashdata("success")){ 
                        echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata("success").'</div>';}
                    if(isset($_SESSION['error'])){
                        unset($_SESSION['error']);
                    }
                    else if(isset($_SESSION['success'])){
                        unset($_SESSION['success']);
                    }
                ?>
                              <form class="form-horizontal" action="<?=BASE_URL.'admin/add-admin'?>" method="post">
							  <input id="SaveStatus" name="submitF" type="hidden" value="1" />
							    <div class="form-group">
                                      <label class="col-sm-2 control-label">Admin Roles</label>
                                      <div class="col-sm-6">
                                      <select name="roles" class="form-control">
									  <option value="">Select Role</option>
									  <option value="Super Admin">Super Admin</option>
									  <option value="Admin">Admin</option>
									  </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Username</label>
                                      <div class="col-sm-6">
                                          <input type="text" name="username" id="username" value="<?=(isset($_POST['username'])!='')?$_POST['username']:''?>" class="form-control">
                                      </div>
                                  </div>
								 
								   <div class="form-group">
                                      <label class="col-sm-2 control-label">Email Id</label>
                                      <div class="col-sm-6">
                                          <input type="text" name="email_id" id="email_id" value="<?=(isset($_POST['email_id'])!='')?$_POST['email_id']:''?>" class="form-control">
                                      </div>
                                  </div>
								  
								   <div class="form-group">
                                      <label class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-6">
                                          <input type="text" name="password" id="password" value="<?=(isset($_POST['password'])!='')?$_POST['password']:''?>" class="form-control">
                                      </div>
                                  </div>
								
								  
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Status</label>
                                      <div class="col-sm-6" >
                                     <select name="status" class="form-control">
									 <option value="1">Active</option>
									 <option value="0">Archive</option>
									 </select>
                                      </div>
                                  </div>
								  
								  
								  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" name="submitForm" type="submit">Submit</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
								  
                              </form>
                          </div>
                      </section>
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
 $(window).load(function (){
	 show_state('101');
 });
      function show_state(country){ 
       
         if(country==""){ $("#state").prop("disabled",true); }else{ $("#state").prop("disabled",false); }
		 
        $.ajax({
			 url : "<?php echo base_url('admin/user/show_state'); ?>",
          type: "POST",
          data: {'countryval': country},
		  dataType: 'json',
           success: function(data2){
           
           $("#state").html(data2);
           }, 
		   error: function(){
		   alert("there is error");
		   }
         });
		 
       }
	   
	    function show_city(state) {
      
        if(state==""){ $("#city").prop("disabled",true); }else{ $("#city").prop("disabled",false); }
        $.ajax({
			 url : "<?php echo base_url('admin/user/show_city'); ?>",
          type: "POST",
          data: {'state': state},
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

  </body>
</html>
