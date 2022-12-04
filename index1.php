<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Frontend_Task"?></title>
	<link href="style1.css" rel ="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
    
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-primary bg-danger"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow sticky-top">
 <div class="container-fluid">
 	 <a class="navbar-brand" href="#"><?php echo"COMPANY-LOGO" ?></a>
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  <div class="collapse navbar-collapse" id="main_nav">

	<ul class="navbar-nav">
		<li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
		<li class="nav-item"><a class="nav-link" href="#"> About </a></li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">MultiLevel</a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 2 &raquo;</a> 
				
			  	 <ul class="submenu dropdown-menu">
				    <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
				    <li><a class="dropdown-item" href="#">Submenu item 2</a></li>
				    <li><a class="dropdown-item" href="#">Submenu item 3 &raquo; </a>
				    	<ul class="submenu dropdown-menu">
						    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
						    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
						</ul>
				    </li>
				    <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
				    <li><a class="dropdown-item" href="#">Submenu item 5</a></li>
				 </ul>
			  </li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 4 </a>
		    </ul>
		</li>

		<li>
		<a class="nav-item">
          <label href="#" class="desktop-item"></label>
          <!-- <input  id="showMega"> -->
		  <!-- <input type="checkbox" id="showMega"> -->
		  <a class="nav-link">
          <label for="showMega" class="mobile-item">Mega Menu</label>
		  </a>
		</a>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="pic.avif" alt="">
              </div>
              <div class="row">
                <header>Courses</header>
                <ul class="mega-links">
                  <li><a href="#">Web development</a></li>
                  <li><a href="#">Andriod development</a></li>
                  <li><a href="#">UX/UI</a></li>
                  <li><a href="#">Machine Learning</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Email Services</header>
                <ul class="mega-links">
                  <li><a href="#">Personal Email</a></li>
                  <li><a href="#">Business Email</a></li>
                  <li><a href="#">Mobile Email</a></li>
                  <li><a href="#">Web Marketing</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Videos</header>
                <ul class="mega-links">
                  <li><a href="#">Web-videos</a></li>
                  <li><a href="#">Andriod-videos</a></li>
                  <li><a href="#">Design-videos</a></li>
                  <li><a href="#">ML-videos</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Additional items  </a>
		    <ul class="dropdown-menu">
			  <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 2 &raquo; </a>
			  	 <ul class="submenu dropdown-menu">
				    <li><a class="dropdown-item" href="#">Sublevel-1 item 1</a></li>
				    <li><a class="dropdown-item" href="#">Sublevel-1 item 2</a></li>
				    <li><a class="dropdown-item" href="#">Sublevel-1 item 3</a></li>
				 </ul>
			  </li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 3 &raquo; </a>
			  	 <ul class="submenu dropdown-menu">
				    <li><a class="dropdown-item" href="#">Sublevel-2 submenu 1</a></li>
				    <li><a class="dropdown-item" href="#">Sublevel-2 submenu 2 &raquo;</a>
                        <ul class="submenu dropdown-menu">
						    <li><a class="dropdown-item" href="#">Multi level 1</a></li>
						    <li><a class="dropdown-item" href="#">Multi level 2</a></li>
						</ul>
                    </li>
				    <li><a class="dropdown-item" href="#">Sublevel-2 submenu 3</a></li>
				    <li><a class="dropdown-item" href="#">Sublevel-1 submenu 4</a></li>
				 </ul>
			  </li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 4 &raquo;</a>
			  	 <ul class="submenu dropdown-menu">
				    <li><a class="dropdown-item" href="#">Another submenu 1</a></li>
				    <li><a class="dropdown-item" href="#">Another submenu 2</a></li>
				</ul>
			  </li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 5 </a></li>
			  <li><a class="dropdown-item" href="#"> Dropdown item 6 </a></li>
		    </ul>
		</li>
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>

<section class="section-content py-5">
	
		<h6>DEMO Create</h6>
        
       
		<p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

		<a href="" class="btn btn-success"> Hello</a>

</section>

<section class="section-content py-5">
	
		<h6>DEMO Create</h6>
        
       
		<p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

		<a href="" class="btn btn-success"> Hello</a>

</section>

<section class="section-content py-5">
	
		<h6>DEMO Create</h6>
        
       
		<p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

		<a href="" class="btn btn-success"> Hello</a>

</section>
<script src="index.js"></script>
</body>
</html>