
@include('includes.header')


<div id="site-main" class="site-main">
	<div id="main-content" class="main-content">
		<div id="primary" class="content-area">
			<div id="title" class="page-title">
				<div class="section-container">
					<div class="content-title-heading">
						<h1 class="text-title-heading">
							Bora Armchair
						</h1>
					</div>
					<div class="breadcrumbs">
						<a href="index.html">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Details
					</div>
				</div>
			</div>

			<div id="content" class="site-content" role="main">
				<div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">
					<div class="product-top-info">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="row">

									<div class="product-images col-lg-7 col-md-12 col-12">
										<div class="row">
											<div class="col-md-2">
												<!-- <div class="content-thumbnail-scroll"><i class="slick-arrow fa fa-angle-left" style=""></i>
													<div class="image-thumbnail slick-carousel slick-vertical slick-initialized slick-slider" data-asnavfor=".image-additional" data-centermode="true" data-focusonselect="true" data-columns4="5" data-columns3="4" data-columns2="4" data-columns1="4" data-columns="4" data-nav="true" data-vertical="&quot;true&quot;" data-verticalswiping="&quot;true&quot;">
													@foreach($product as $product)
														<div class="slick-list draggable" style="height: 524px;">
															<div class="slick-track" style="opacity: 1; height: 1965px; transform: translate3d(0px, -524px, 0px);">
																<div class="img-item slick-slide slick-cloned" style="width: 116px;" data-slick-index="-5" id="" aria-hidden="true" tabindex="-1">
																	<span class="img-thumbnail-scroll">
																		<img width="600" height="600" src="{{asset('admin/product/'.$product->image)}}" alt="">
																	</span>
																</div>
																
															
									
															</div>
														</div>
														@endforeach
													</div>
													<i class="slick-arrow fa fa-angle-right" style=""></i>
												</div> -->
											</div>
											<div class="col-md-10">
												<div class="scroll-image main-image">
													<!-- <i class="slick-arrow fa fa-angle-left" style=""></i> -->
													<div class="image-additional slick-carousel slick-initialized slick-slider" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">





														<div class="slick-list draggable">
															<div class="slick-track" style="opacity: 1; width: 3190px;">
																<div class="img-item slick-slide slick-current slick-active" style="width: 638px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" data-slick-index="0" aria-hidden="false" tabindex="0">
																	<img width="900" height="900" src="{{asset('admin/product/'.$product_details->image)}}" alt="" title="">
																</div>
																
															</div>
														</div>
													</div>
													<!-- <i class="slick-arrow fa fa-angle-right" style=""></i> -->
												</div>
											</div>
										</div>
									</div>

									<div class="product-info col-lg-5 col-md-12 col-12 ">
										<h1 class="title">{{$product_details->titel}}</h1>
										<span class="price">
											<del aria-hidden="true"><span>$100.00</span></del>
											<ins><span>{{$product_details->price}}</span></ins>
										</span>
										<div class="rating">
											<div class="star star-5"></div>
											<div class="review-count">
												(3<span> reviews</span>)
											</div>
										</div>
										<div class="description">
											<p> {{$product_details->description}} </p>
										</div>
										
										<div class="buttons">
											<div class="add-to-cart-wrap">
												<div class="quantity">
													<button type="button" class="plus">+</button>
													<input type="number" class="qty" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
													<button type="button" class="minus">-</button>
												</div>
												<div class="btn-add-to-cart">
													<a href="{{'addtocart/'.$product_details->id}" tabindex="0">Add to cart</a>
												</div>
											</div>
											<div class="btn-quick-buy" data-title="Wishlist"  >
												<button class="product-btn" class="button-next-reregister">Buy It Now</button>
											</div>
											<div class="btn-wishlist" data-title="Wishlist">
											<a href=""  tabindex="0">Bay Now</a>
											</div>
											<div class="btn-compare" data-title="Compare">
												<button class="product-btn">Compare</button>
											</div>
										</div>
										<div class="product-meta">
											<span class="sku-wrapper">SKU: <span class="sku">D2300-3-2-2</span></span>
											<span class="posted-in">Category: <a href="shop-grid-left.html" rel="tag">Bracelets</a></span>
											<span class="tagged-as">Tags: <a href="shop-grid-left.html" rel="tag">Hot</a>, <a href="shop-grid-left.html" rel="tag">Trend</a></span>
										</div>
										<div class="social-share">
											<a href="#" title="Facebook" class="share-facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
											<a href="#" title="Twitter" class="share-twitter"><i class="fa fa-twitter"></i>Twitter</a>
											<a href="#" title="Pinterest" class="share-pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product-tabs">
						<div class="section-padding">
							<div class="section-container p-l-r">
								<div class="product-tabs-wrap">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#additional-information" role="tab">Additional information</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
										</li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane fade show active" id="description" role="tabpanel">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
											<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
										</div>
										<div class="tab-pane fade" id="additional-information" role="tabpanel">
											<table class="product-attributes">
												<tbody>
													<tr class="attribute-item">
														<th class="attribute-label">Color</th>
														<td class="attribute-value">Antique, Chestnut, Grullo</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane fade" id="reviews" role="tabpanel">
											<div id="reviews" class="product-reviews">
												<div id="comments">
													<h2 class="reviews-title">1 review for <span>Bora Armchair</span></h2>
													<ol class="comment-list">
														<li class="review">
															<div class="content-comment-container">
																<div class="comment-container">
																	<img src="media/user.jpg" class="avatar" height="60" width="60" alt="">
																	<div class="comment-text">
																		<div class="rating small">
																			<div class="star star-5"></div>
																		</div>
																		<div class="review-author">Peter Capidal</div>
																		<div class="review-time">January 12, 2023</div>
																	</div>
																</div>
																<div class="description">
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
																</div>
															</div>
														</li>
													</ol>
												</div>
												<div id="review-form">
													<div id="respond" class="comment-respond">
														<span id="reply-title" class="comment-reply-title">Add a review</span>
														<form action="" method="post" id="comment-form" class="comment-form">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
															</p>
															<div class="comment-form-rating">
																<label for="rating">Your rating</label>
																<p class="stars">
																	<span>
																		<a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a>
																	</span>
																</p>
															</div>
															<p class="comment-form-comment">
																<textarea id="comment" name="comment" placeholder="Your Reviews *" cols="45" rows="8" aria-required="true" required=""></textarea>
															</p>
															<div class="content-info-reviews">
																<p class="comment-form-author">
																	<input id="author" name="author" placeholder="Name *" type="text" value="" size="30" aria-required="true" required="">
																</p>
																<p class="comment-form-email">
																	<input id="email" name="email" placeholder="Email *" type="email" value="" size="30" aria-required="true" required="">
																</p>
																<p class="form-submit">
																	<input name="submit" type="submit" id="submit" class="submit" value="Submit">
																</p>
															</div>
														</form><!-- #respond -->
													</div>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!-- #main-content -->
</div>
<!-- models -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  top: -10px;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.btn1{
	border-radius: 30px;
    width: 121px;
}
/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  border-radius: 25px;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<div class="form-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Register</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="Mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter mobile No." name="mobile" required>
    
	
	<label for="OTP"><b class="btn ">Send OTP</b><input type="text" placeholder="Enter OTP" name="otp	" required> 
    

</label>
	<!-- <label for="psw"><b> OTP </b></label> -->


    <button type="submit" class="btn">Register</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<!-- end models -->

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

@include('includes.footer')