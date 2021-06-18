<!DOCTYPE html>

<!-- Fontfaces CSS-->  <!-- Bootstrap CSS-->   <!-- Main CSS-->
<?php include'./public/head.php'; ?>


<body class="animsition">

    <div class="page-wrapper">
        
		<?php 

		// Left Menu
		include './include/left_menu.php';

		// Header 
		include './include/header.php';

		?>
		
    </div>
	<div class="page-container2">
      <!-- BREADCRUMB-->
      <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="home.php">Home</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
	</div>	
	<!-- Jquery JS--> <!-- Main JS-->
    <?php include'./public/js.php'; ?>

</body>



