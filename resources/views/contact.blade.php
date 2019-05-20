<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@extends('includes/head')
@extends('includes/header')


<!-- Content
============================================= -->

<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
				<ol class="breadcrumb">
					<li><a href="/home">Home</a></li>
					<li class="active">Contact</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Google Map
					============================================= -->
					<div class="col-md-6 bottommargin">

						<section id="google-map" class="gmap" style="height: 240px;"></section>

					</div><!-- Google Map End -->

					<div class="col-md-6">

						<!-- Contact Info
						============================================= -->
						<div class="col_two_fifth">

							<address>
								<strong>Address:</strong><br>
								Saraswat Baug, <br> Jogeshwari East, Mumbai - 400060.
							</address>
							<abbr title="Phone Number"><strong>Phone:</strong></abbr> +91-8896678556 <br>
							<abbr title="Email Address"><strong>Email:</strong></abbr> info@companyname.com 

						</div><!-- Contact Info End -->

						<!-- Testimonials
						============================================= -->
						<div class="col_three_fifth col_last">

							<div class="widget notoppadding noborder">

								<div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
									<i class="i-plain i-small color icon-twitter nobottommargin" style="margin-right: 15px;"></i>
									<div class="flexslider" style="width: auto;">
										<div class="slider-wrap">
											<div class="slide"></div>
										</div>
									</div>
								</div>

							</div>

						</div><!-- Testimonial End -->

						<div class="clear"></div>

						<!-- Modal Contact Form
						============================================= -->
						<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge hidden-xs center">Click here to Send an Email</a>
						<!-- <a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block visible-xs center">Send an Email</a> -->

						<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
									</div>
									<div class="modal-body">

										<div class="contact-widget">
											<div class="contact-form-result"></div>
											<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

												<div class="form-process"></div>

												<div class="col_half">
													<label for="template-contactform-name">Name <small>*</small></label>
													<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
												</div>

												<div class="col_half col_last">
													<label for="template-contactform-email">Email <small>*</small></label>
													<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
												</div>

												<div class="clear"></div>

												<div class="col_half">
													<label for="template-contactform-phone">Phone</label>
													<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
												</div>

												<div class="col_half col_last">
													<label for="template-contactform-service">Services</label>
													<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
														<option value="">-- Select One --</option>
														<option value="portrait">Portrait/Lifestyle photography</option>
														<option value="Commercial">Commercial photography</option>
														<option value="Event">Event photography</option>
														<option value="other">Other Event</option>
													</select>
												</div>

												<div class="clear"></div>

												<div class="col_full">
													<label for="template-contactform-subject">Subject <small>*</small></label>
													<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
												</div>

												<div class="col_full">
													<label for="template-contactform-message">Message <small>*</small></label>
													<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
												</div>

												<div class="col_full hidden">
													<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
												</div>

												<div class="col_full">
													<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
												</div>

											</form>

										</div>


									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Modal Contact Form End -->

					</div>

				</div>

			</div>

		</section>


<!-- #content end -->
@extends('includes/footer')

</div><!-- #wrapper end -->
@extends('includes/foot')