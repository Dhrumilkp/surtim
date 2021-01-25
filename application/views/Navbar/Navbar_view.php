<nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg" style="width: 1480px;">
	<button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse"
		data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
		aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
				class="toggle-line"></span></span></button>
	<a class="navbar-brand mr-1 mr-sm-3" href="../index.html">
		<div class="d-flex align-items-center"><img class="mr-2" src="theme/image/favicon.png" alt="" width="40"><span
				class="text-sans-serif">Aakar</span></div>
	</a>
	<div class="collapse navbar-collapse" id="navbarStandard">
		<ul class="navbar-nav">
			<li class="nav-item dropdown dropdown-on-hover">
				<a class="nav-link" id="navbarDropdownHome" href="<?php echo base_url(); ?>home" role="button">Home</a>
			</li>
			<li class="nav-item dropdown dropdown-on-hover">
				<a class="nav-link" aria-haspopup="true" aria-expanded="true" href="<?php echo base_url(); ?>aabout">About Publication</a>
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
					<a class="dropdown-item font-weight-bold text-warning" href="#!"><svg
							class="svg-inline--fa fa-crown fa-w-20 mr-1" aria-hidden="true" focusable="false"
							data-prefix="fas" data-icon="crown" role="img" xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 640 512" data-fa-i2svg="">
							<path fill="currentColor"
								d="M528 448H112c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h416c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm64-320c-26.5 0-48 21.5-48 48 0 7.1 1.6 13.7 4.4 19.8L476 239.2c-15.4 9.2-35.3 4-44.2-11.6L350.3 85C361 76.2 368 63 368 48c0-26.5-21.5-48-48-48s-48 21.5-48 48c0 15 7 28.2 17.7 37l-81.5 142.6c-8.9 15.6-28.9 20.8-44.2 11.6l-72.3-43.4c2.7-6 4.4-12.7 4.4-19.8 0-26.5-21.5-48-48-48S0 149.5 0 176s21.5 48 48 48c2.6 0 5.2-.4 7.7-.8L128 416h384l72.3-192.8c2.5.4 5.1.8 7.7.8 26.5 0 48-21.5 48-48s-21.5-48-48-48z">
							</path>
						</svg>
						<span>GoPro</span></a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url(); ?>logout">Logout</a>
				</div>
			</div>
		</li>
	</ul>
</nav>
