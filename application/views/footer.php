<footer class="site-footer">
	<div class="container">
		<div class="row text-center section-padding">
			<div class="col-xl-12 col-lg-12 col-sm-12">
				<div class="single-footer pb--40">
					<div class="brand-footer footer-title">
						<div class="w-100 text-center">
							<img src="<?php echo base_url();?>theme/image/logo.png" alt="" style="width:150px !important;height:auto !important;">
						</div>
					</div>
					<div class="footer-contact">
						<p>
							<span class="text text-center w-100">
								<?php 
									if(!empty($get_address_data))
									{
										foreach($get_address_data as $row)
										{
											echo $row['a_address'];
										}
									}
								?>
							</span>
						</p>
						<?php 
							if(!empty($get_contact_data))
							{
								?>
								<div class="contact-wrapper d-flex" style="flex-wrap: wrap;justify-content: space-evenly;">
								<?
									foreach($get_contact_data as $row)
									{
										?>
											<p><span class="text text-center w-100">+<?php echo $row['contact_number']; ?></span>
											</p>
										<?
									}
								?>
								</div>
								<?
							}
						?>
						<p>
							<span class="text text-center w-100">
								<?php 
									if(!empty($get_email_data))
									{
										foreach($get_email_data as $row)
										{
											?>
												<p><span class="text text-center w-100"><?php echo $row['a_email']; ?></span>
												</p>
											<?
										}
									}
								?>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<p class="copyright-heading">કોપીરાઇટ 2019 આકર પબ્લિકેશન. બધા રાઇટ આરક્ષિત.
				<a href="https://www.workoscope.com" style="color:#62ab00;">વર્કસ્કોપ ઇન્ક એસએમઇ ઇનિશિયેટિવ આઇએન</a>
				હેઠળ ડિઝાઇન અને વિકસિત</p>
			<a href="#" class="payment-block">
				<img src="<?php echo base_url();?>theme/image/icon/payment.png" alt="">
			</a>
			<p class="copyright-text">Copyright © 2019 <a href="#" class="author">Aakar Publication</a>. All Right
				Reserved.
				<br>
				Designed and Developed Under <a href="https://www.workoscope.com">Workoscope Inc SME Initiative IN</a>
			</p>
		</div>
	</div>
</footer>
