
<!DOCTYPE html>
<html>
<head>
	<title>images</title>
	<!-- ------links------- -->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ---------style---------- -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- -----------bootstrap------------ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- -------jquery--------- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- -------java------- -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
				<div class="row"  id="akimfo">
					<div class="col-lg-6 ">
					
						<img src="images/1.jpg" class="img-fluid">
						
					</div>
					<div class="col-lg-6">
						<h3>my name: <span>laila</span></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<br>
						<button class="btn btn-primary btn1"> hide me</button>
					</div>
				</div>
				<div class="row"  id="laila">
					<div class="col-lg-6 ">
					
						<img src="images/5.jpg" class="img-fluid">
						
					</div>
					<div class="col-lg-6">
						<h3>my name: <span>laila</span></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<br>
						<button class="btn btn-primary btn2"> hide me</button>
					</div>
				</div>
				<div class="row"  id="girish">
					<div class="col-lg-6 ">
					
						<img src="images/3.jpg" class="img-fluid">
						
					</div>
					<div class="col-lg-6">
						<h3>my name: <span>Girish</span></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<br>
						<button class="btn btn-primary btn3"> hide me</button>
					</div>
				</div>
				<div class="row"  id="nana">
					<div class="col-lg-6 ">
					
						<img src="images/4.jpg" class="img-fluid">
						
					</div>
					<div class="col-lg-6">
						<h3>my name: <span>nana</span></h3>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<br>
						<button class="btn btn-primary btn4"> hide me</button>
					</div>
				</div>
		
		</div>			
		<div class="col-lg-3">
			<div class="card" style="width: 18rem;">
 				 <img src="images/1.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<button class="btn btn-success btn1">Click Me</button>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card" style="width: 18rem;">
 				 <img src="images/5.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<button class="btn btn-success btn2">Click Me</button>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card" style="width: 18rem;">
 				 <img src="images/3.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<button class="btn btn-success btn3">Click Me</button>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card" style="width: 18rem;">
 				 <img src="images/4.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<button class="btn btn-success btn4">Click Me</button>
				</div>
			</div>
		</div>
		
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#akimfo').hide();
		$('#laila').hide();
		$('#girish').hide();
		$('#nana').hide();

		$('.btn1').click(function(){
			$("#akimfo").toggle(1000);
		});
		$('.btn2').click(function(){
			$("#laila").toggle(1000);
		});
		$('.btn3').click(function(){
			$("#girish").toggle(1000);
		});
		$('.btn4').click(function(){
			$("#nana").toggle(1000);
		});
		
	});
</script>
</body>
</html>