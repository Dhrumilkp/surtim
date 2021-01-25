<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="width: 1480px;">
	<button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse"
		data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
		aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
				class="toggle-line"></span></span></button>
	<a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
		<div class="d-flex align-items-center"><img class="mr-2" src="theme/image/favicon.png" alt="" width="40"><span
				class="text-sans-serif">Surtimix</span></div>
	</a>
	<div class="collapse navbar-collapse" id="navbarStandard">
		<ul class="navbar-nav">
			<li class="nav-item dropdown dropdown-on-hover">
				<a class="nav-link" id="navbarDropdownHome" href="<?php echo base_url(); ?>home" role="button">Home</a>
			</li>
			<li class="nav-item dropdown dropdown-on-hover">
				<a class="nav-link" aria-haspopup="true" aria-expanded="true" href="<?php echo base_url(); ?>aabout">About Us</a>
			</li>
			<li class="nav-item dropdown dropdown-on-hover">
				<a class="nav-link" id="navbarDropdownDocumentation" href="<?php echo base_url(); ?>ashop">Shop</a>
			</li>
			<li class="nav-item dropdown dropdown-on-hover">
				<a class="nav-link" id="navbarDropdownComponents" href="<?php echo base_url(); ?>admincontact">Contact</a>
			</li>
		</ul>
	</div>
	<ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
		<li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="#"
				role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<div class="avatar avatar-xl">
					<img class="rounded-circle" src="assets/img/avatar.jpg" alt="">
				</div>
			</a>
			<div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
				<div class="bg-white rounded-soft py-2">
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
				</div>
			</div>
		</li>
	</ul>
</nav>
