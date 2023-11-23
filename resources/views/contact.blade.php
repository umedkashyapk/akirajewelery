@include('includes.header')
<style>
	.site-main .page-title {
    background-image: url("{{asset('/assets/media/site-header.jpg')}}");
}
</style>
			<div id="site-main" class="site-main">
				<div id="main-content" class="main-content">
					<div id="primary" class="content-area">
						<div id="title" class="page-title">
							<div class="section-container">
								<div class="content-title-heading">
									<h1 class="text-title-heading">
										Contact Us
									</h1>
								</div>
								<div class="breadcrumbs">
									<a href="index.html">Home</a><span class="delimiter"></span>Contact Us
								</div>
							</div>
						</div>

						<div id="content" class="site-content" role="main">
							<div class="page-contact">
								<section class="section section-padding">
									<div class="section-container small">
										<!-- Block Contact Map -->
										<div class="block block-contact-map">
											<div class="block-widget-wrap">
												<iframe src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe>
											</div>
										</div>
									</div>
								</section>	

								<section class="section section-padding m-b-70">
									<div class="section-container">
										<!-- Block Contact Info -->
										<div class="block block-contact-info">
											<div class="block-widget-wrap">
												<div class="info-icon">
													<svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="512" viewBox="0 0 511.985 511.985" width="512"><g><g><path d="m256.002 19.995c-4.193 0-8.038-2.714-9.438-6.667-1.415-3.996-.091-8.565 3.231-11.192 3.218-2.545 7.81-2.846 11.333-.741 3.587 2.144 5.493 6.408 4.697 10.512-.902 4.643-5.097 8.088-9.823 8.088z"></path><path d="m486.898 258.449c12.552-6.567 20.748-20.113 19.768-35.14-.641-9.838-5.073-18.839-12.478-25.343-4.91-4.312-10.737-7.185-16.974-8.444-14.109-91.307-83.346-165.063-174.016-184.544-5.399-1.16-10.723 2.277-11.883 7.68-1.162 5.402 2.278 10.723 7.68 11.884 82.042 17.628 144.813 84.063 158.199 166.49-14.984 5.483-25.248 20.366-24.158 37.083.64 9.831 5.066 18.824 12.46 25.326-8.551 4.454-14.918 11.927-17.963 21.102-3.64 10.962-1.835 22.447 3.935 31.503-1.269-.047-2.548-.03-3.833.054-9.835.642-18.83 5.079-25.331 12.493-7.141 8.146-10.047 18.579-8.897 28.58-.57-.221-1.148-.429-1.732-.623-9.356-3.111-19.359-2.388-28.169 2.032-8.947 4.489-15.278 12.151-18.315 20.944l-81.746-89.114-.161-.16c-4.044-4.041-10.602-4.025-14.626.035l-.032.032c-.002.002-81.832 89.207-81.832 89.207-3.037-8.793-9.368-16.455-18.315-20.944-8.81-4.42-18.817-5.144-28.169-2.032-.584.194-1.162.402-1.732.623 1.15-10.002-1.756-20.435-8.897-28.581-6.501-7.413-15.496-11.85-25.331-12.492-1.284-.085-2.563-.103-3.831-.056 5.769-9.056 7.574-20.539 3.935-31.5-3.046-9.176-9.413-16.649-17.964-21.103 7.394-6.502 11.819-15.495 12.46-25.326 1.09-16.717-9.173-31.6-24.157-37.083 13.363-82.19 76.353-148.774 157.896-166.426 5.366-1.162 9.066-6.345 8.026-11.735-1.066-5.526-6.455-9.066-11.928-7.893-90.28 19.398-159.919 93.388-174.016 184.542-6.234 1.26-12.064 4.135-16.973 8.446-7.405 6.504-11.838 15.504-12.479 25.343-.98 15.028 7.216 28.573 19.768 35.14-10.777 9.503-15.465 24.89-10.66 39.366 3.107 9.358 9.668 16.946 18.478 21.365 5.21 2.614 10.837 3.935 16.5 3.935.477 0 .955-.01 1.433-.028-8.588 13.487-7.683 31.584 3.374 44.198 6.501 7.413 15.496 11.85 25.331 12.492.822.054 1.64.08 2.455.08 4.598 0 9.089-.848 13.29-2.48-1.698 14.954 5.912 30.08 20.119 37.209 5.21 2.614 10.836 3.934 16.499 3.934 3.914 0 7.847-.631 11.67-1.902 4.973-1.653 9.445-4.285 13.207-7.712l91.792 100.065c.005.005.018.019.04.04 4.089 3.962 10.592 3.958 14.72.036l.03-.029 91.836-100.113c3.762 3.427 8.234 6.058 13.207 7.712 3.824 1.271 7.755 1.902 11.67 1.902 5.662 0 11.289-1.32 16.499-3.934 14.206-7.128 21.817-22.255 20.119-37.209 4.201 1.632 8.691 2.48 13.29 2.48.815 0 1.634-.026 2.455-.08 9.835-.642 18.83-5.079 25.331-12.493 11.057-12.613 11.962-30.709 3.375-44.197.477.019.955.028 1.432.028 5.662 0 11.29-1.321 16.5-3.935 8.809-4.419 15.371-12.007 18.478-21.365 4.806-14.475.117-29.862-10.659-39.365zm-18.146-49.608c4.491-.292 8.841 1.184 12.229 4.16 3.391 2.979 5.422 7.101 5.716 11.61.607 9.302-6.459 17.364-15.749 17.971-4.492.296-8.841-1.183-12.23-4.159-3.391-2.978-5.421-7.101-5.715-11.609-.606-9.303 6.459-17.366 15.749-17.973zm-212.76 224.088-32.196-38.257 32.196-38.257 32.195 38.257zm10.006-95.702v-24.429l65.927 71.869h-26.004zm-20.011-24.429v24.429l-39.924 47.44h-26.003zm-220.7-88.188c.294-4.507 2.324-8.63 5.716-11.609 3.106-2.728 7.014-4.197 11.109-4.197.371 0 .746.012 1.121.036 9.29.607 16.355 8.67 15.749 17.973-.294 4.507-2.324 8.631-5.715 11.609-3.389 2.974-7.728 4.445-12.23 4.159-9.291-.606-16.357-8.668-15.75-17.971zm16.591 76.684c-4.032-2.023-7.036-5.497-8.459-9.783-2.937-8.849 1.863-18.438 10.7-21.377 1.749-.581 3.547-.87 5.337-.87 2.59 0 5.163.604 7.546 1.8 4.031 2.023 7.036 5.496 8.459 9.783 2.937 8.849-1.863 18.438-10.701 21.377-4.278 1.422-8.854 1.093-12.882-.93zm51.2 54.354c-3.389 2.977-7.74 4.454-12.23 4.16-4.499-.294-8.614-2.324-11.588-5.716-6.145-7.01-5.447-17.715 1.557-23.864 3.105-2.728 7.013-4.197 11.107-4.197.373 0 .747.012 1.123.036 4.499.294 8.614 2.324 11.588 5.716 6.142 7.011 5.445 17.717-1.557 23.865zm44.184 41.98c-4.28 1.422-8.854 1.093-12.882-.929-8.327-4.177-11.704-14.358-7.528-22.695 2.022-4.035 5.491-7.042 9.77-8.465 1.749-.581 3.546-.87 5.336-.87 2.59 0 5.164.604 7.547 1.8 8.326 4.177 11.704 14.357 7.528 22.694-2.021 4.036-5.492 7.042-9.771 8.465zm68.801 7.05 39.924 47.44v24.429l-65.927-71.869zm59.935 71.869v-24.429l39.923-47.44h26.004zm121.606-79.848c-4.029 2.023-8.604 2.352-12.882.929-4.279-1.423-7.749-4.429-9.771-8.465-4.175-8.337-.797-18.517 7.528-22.694 4.03-2.022 8.604-2.354 12.883-.93 4.279 1.423 7.748 4.429 9.77 8.465 4.176 8.337.799 18.518-7.528 22.695zm55.122-42.607c-2.974 3.392-7.09 5.423-11.588 5.717-4.488.293-8.841-1.183-12.229-4.16-.001 0-.001 0-.001 0-7.003-6.149-7.699-16.855-1.556-23.863 2.974-3.392 7.09-5.423 11.588-5.717.375-.024.749-.036 1.123-.036 4.094 0 8.001 1.469 11.108 4.197 7.002 6.148 7.699 16.853 1.555 23.862zm35.839-62.581c-1.423 4.286-4.426 7.76-8.459 9.783-4.03 2.023-8.604 2.353-12.882.93-8.838-2.939-13.638-12.528-10.7-21.378 1.422-4.285 4.426-7.759 8.458-9.782 4.03-2.023 8.604-2.353 12.882-.93 8.838 2.94 13.638 12.529 10.701 21.377z"></path></g></g></svg>
												</div>
												<div class="info-title">
													<h2>Need Help?</h2>
												</div>
												<div class="info-items">
													<div class="row">
														<div class="col-md-4 sm-m-b-30">
															<div class="info-item">
																<div class="item-tilte">
																	<h2>Phone</h2>
																</div>
																<div class="item-content">
																	810.222.5439
																</div>
															</div>
														</div>
														<div class="col-md-4 sm-m-b-30">
															<div class="info-item">
																<div class="item-tilte">
																	<h2>Customer Service</h2>
																</div>
																<div class="item-content">
																	<p>Monday to Friday</p>
																	<p>8:00am – 4:00pm Sydney, NSW time (UTC +10)</p>
																	<p>Saturday and Sunday closed</p>
																</div>
															</div>
														</div>
														<div class="col-md-4">
															<div class="info-item">
																<div class="item-tilte">
																	<h2>Returns</h2>
																</div>
																<div class="item-content small-width">
																	For information on Returns and Refunds, please click <a href="#">here.</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								<section class="section section-padding background-img bg-img-7 p-t-70 p-b-70 m-b-0">
									<div class="section-container small">
										<!-- Block Contact Form -->
										<div class="block block-contact-form">
											<div class="block-widget-wrap">
												<div class="block-title">
													<h2>Send Us Your Questions!</h2>
													<div class="sub-title">We’ll get back to you within two days.</div>
												</div>
												<div class="block-content">
													<form action="#" method="post" class="contact-form" novalidate="novalidate">
														<div class="contact-us-form">
															<div class="row">
																<div class="col-sm-12 col-md-6">
															        <label class="required">Name</label><br>
															        <span class="form-control-wrap">
															        	<input type="text" name="name" value="" size="40" class="form-control" aria-required="true">
															        </span>
															    </div>
																<div class="col-sm-12 col-md-6">
															        <label class="required">Email</label><br>
															        <span class="form-control-wrap">
														        		<input type="email" name="email" value="" size="40" class="form-control" aria-required="true">
														        	</span>
															    </div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<label class="required">Message</label><br>
																	<span class="form-control-wrap">
																		<textarea name="message" cols="40" rows="10" class="form-control" aria-required="true"></textarea>
																	</span>
																</div>
															</div>
															<div class="form-button">
												      			<input type="submit" value="Submit" class="button"></span>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div><!-- #content -->
					</div><!-- #primary -->
				</div><!-- #main-content -->
			</div>

		
			@include('includes.footer')