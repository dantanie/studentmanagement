<?php 
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);
  include_once "../../../api/controllers/Controllers.php";
  
    $controller = new StudentController();

    $courses = $controller->getCourses();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../pages/portal/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../pages/portal/assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../pages/portal/assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../pages/portal/assets/css/sweetalert2.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../pages/portal/assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../pages/portal/assets/favicon.png" />
</head>

<body style="background-image: url(../pages/portal/assets/images/background1.jpg);">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="#">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" id="password" name="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">First Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Your First Name" id="firstname" name="firstname">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Last Name</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter Your Last Name" id="lastname" name="lastname">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Age</label>
                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Enter Your Age" id="age" name="age">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Gender</label>
                  <div class="input-group">
                    <select id="gender" class="form-control">
                      <option selected value="Male">Male</option>
                      <option  value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Course</label>
                  <div class="input-group">
                    <select id="course" class="form-control" required>
                      <option  value="" selected>Select Course...</option>
                      <?php foreach ($courses as $course ) : ?>
                        <option  value="<?= $course['id'] ?>"><?=  $course["title"] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" id="submitBtn" type="button">Register</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © <?php echo date('Y') ?> Telvin. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../pages/portal/assets/vendors/js/jquery.js"></script>
  <script src="../pages/portal/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../pages/portal/assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../pages/portal/assets/js/off-canvas.js"></script>
  <script src="../pages/portal/assets/js/misc.js"></script>
  <script src="../pages/portal/assets/js/sweetalert2.min.js"></script>
  <!-- endinject -->

  <script>

  	$(document).ready(function(){
  		// alert("We are ready")
  		$("#submitBtn").on("click", function(){
  			const username = $("#username").val();
        const password = $("#password").val();
        const firstname = $("#firstname").val();
        const lastname = $("#lastname").val();
        const age = $("#age").val();
  			const gender = $("#gender").val();
        const course = $("#course").val();

  			if ( username == "" ){
  				showErrorAlert("Please enter username");
  				$("#username").focus();
  			}
  			else if (password == "" ){
  				showErrorAlert("Please enter Password");
  			}
        else if (firstname == "" ){
          showErrorAlert("Please enter Your First Name");
        }
        else if (lastname == "" ){
          showErrorAlert("Please enter Your Last Name");
        }
        else if (age == "" ){
          showErrorAlert("Please enter Your Age");
        }
        else if (gender == "" ){
          showErrorAlert("Please choose your gender");
        }
        else if (course == "" ){
          showErrorAlert("Please choose a course");
        }
  			else  {

  				//Converting data object to JSON string
  				//Before sending to server

  				const dataToBeSent = JSON.stringify({
  					action: 101,
  					data: {
  						username: username,
  						password: password,
              firstname: firstname,
              lastname: lastname,
              age : age,
              gender: gender,
              course: course
  					}
  				})

          console.log(dataToBeSent);
  				$.ajax({
  					url: '../../../api/request.php',
  					method: 'post',
  					data: dataToBeSent,
  					contentType: "application/json",
  					success: function(data){
              Swal.fire({
                  title: 'Success',
                  text: "Your account has been created successfully. Click on Ok to go be sent to login page to login",
                  type: 'success',
                  showCancelButton: false,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Ok'
                }).then((result) => {
                  if (result.value) {
                    location.href= "/login";
                  }
                })
  					},
  					error: function(e){
  						console.log('Error occured with request ', e.responseJSON.message)
  						showErrorAlert(e.responseJSON.message)
  					}
  				})
  			}
  		})



  		function showErrorAlert(msg){
  			Swal.fire({
  			  type : 'error',
			  title: 'Error Processing...',
			  text: msg,
			  animation: false,
			  customClass: 'animated tada'
			});
  		}
  	})

  </script>
</body>

</html>









