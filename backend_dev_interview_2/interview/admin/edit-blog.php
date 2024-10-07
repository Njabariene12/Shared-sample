<?php 
session_start();
include "includes/sessions.php";
include "../includes/connect.php";


$blogid = $_GET['id'];

$res = $conn->query("SELECT * FROM blog b JOIN category c ON c.category_id=b.category_id WHERE b.blog_id='$blogid'");
$row = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/header.php";?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


    <?php include "includes/navbar.php";?>


    <?php include "includes/sidebar.php";?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Post </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Post Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-lg-10 mx-auto">
				<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes.php">

					<!-- Cab Detail START -->
					<div class="card card-primary shadow">
                        <div class="card-header">
                                <h3 class="card-title">Enter Details</h3>
              
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                            </div>
                          </div>
						
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-12">
									<label class="form-label">Title</label>
									<input class="form-control" type="text" name="tit" value="<?php echo $row['blog_title'];?>" placeholder="Enter Blog Name">
								</div>

								<!-- Desc -->
								<div class="col-12">
									<label class="form-label">Short Description (20 - 30 Characters)</label>
									<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"><?php echo $row['blog_description'];?></textarea>
								</div>

                                <!-- Desc 
								<div class="col-12">
									<label class="form-label">Long Description (50 Words)</label>
									<textarea class="form-control" rows="6" name="ldesc" placeholder="Enter Description"></textarea>
								</div>-->

                                 <!-- Desc -->
								<div class="col-12">
									<label class="form-label">Content</label>
									<textarea class="form-control" id="summernote3" name="content"><?php echo $row['blog_content'];?></textarea>
								</div>

                                <div class="col-md-7 mb-3">
									<label class="form-label">Tags (seperate using a comma " , ")</label>
									<textarea class="form-control" name="tags"  placeholder="business, saving ... etc"><?php echo $row['tags'];?></textarea>
								</div>

                                <div class="col-md-5 mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-control " name="cat" >
                                        <?php 
                                    $catres = $conn->query("SELECT * FROM category");
                                    
                                    while($catrow = $catres->fetch_assoc()){?>
                                    <option <?php if($row['category_id'] == $catrow['category_id']){echo "selected";}?> value="<?php echo $catrow['category_id'];?>"><?php echo $catrow['category_name'];?></option>
                                    <?php } ?>
                                    </select>
                                </div>

                               

                               
								
                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status" >
                                        <option <?php if($row['blog_status'] == 0){echo "selected";}?> value="0">Unpublished</option>
                                        <option <?php if($row['blog_status'] == 1){echo "selected";}?> value="1">Active</option>
                                        <option <?php if($row['blog_status'] == 2){echo "selected";}?> value="2">Disabled</option>
                                    </select>
                                </div>


								

								
							</div>
						</div>
                        <div class="card-footer">
                            <div class="text-end">
                                <button type="submit" name="edit-blog" class="btn btn-primary mb-0">Update Article</button>
                                </form>
                            </div>
                        </div>
					</div>
					<!-- Cab Detail END card-->

<hr class="my-2">

<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes.php">
                    
    <!-- Cab Detail START -->
    <div class="card shadow mt-3">
        <div class="card-header">
            Change Image
        </div>
        <!-- Card body -->
        <div class="card-body">
            <div class="row g-3">
                <!-- Car name -->
                <div class="col-8 mx-auto" >
                    <img src="../uploads/<?php echo $row['blog_image'];?>" style="max-width:400px">
                </div>

                <!-- Desc -->
                <div class="col-12">
                    <label class="form-label">Change Photo (Recommended 1:1)</label>
                    <input class="form-control" type="file" accept="image/*" name="photos" oninput="this.form.submit();" placeholder="Choose Photo">
                    <input type="hidden" name="edit-blog-img" value="<?php echo $blogid;?>">
                </div>
                
                                                
            </div>
        </div>
    </div>
    <!-- Cab Detail END -->
    </form>


    <hr class="my-2">



    <form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes.php">

        <!-- Cab Detail START -->
        <div class="card shadow">
            
            <!-- Card body -->
            <div class="card-body">
                <div class="row g-3">
                    <!-- Car name -->
                    <div class="col-12">
                        <label class="form-label">SEO Page Title (70 characters maximum)</label>
                        <input class="form-control" type="text" max-length="70" name="tit" value="<?php echo $row['seo_title'];?>" placeholder="Enter title" >
                    </div>

                    <!-- Desc -->
                    <div class="col-12">
                        <label class="form-label">SEO Page Description (160  characters Maximum)</label>
                        <textarea class="form-control" rows="4" max-length="160" name="desc" placeholder="Enter Description"><?php echo $row['seo_description'];?></textarea>
                    </div>

                    <!-- Desc -->
                    <div class="col-12">
                        <label class="form-label">SEO Keywords (seperate using a comma " , ")</label>
                        <textarea class="form-control" rows="4" name="kw" placeholder="Enter Keywords"><?php echo $row['seo_keywords'];?></textarea>
                    </div>
                    <input type="hidden" name="elemid" value="<?php echo $blogid;?>">
                                                    
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" name="seo-blog" class="btn btn-primary mb-0">Save Changes</button>
                </form>
            </div>
        </div>
        <!-- Cab Detail END -->

					
			</div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "includes/footer.php";?>
 
</div>
<!-- ./wrapper -->

<?php include "includes/scripts.php";?>
</body>
</html>
