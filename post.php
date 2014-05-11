<?php ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Single Post Template</title>

	<?php include'inc.style_post.php' ?>

</head>
<body class="l-body headertype_sticky headerpos_top no_pagesections col_contside">

	<!-- HEADER -->
	<div class="l-header">
		<div class="l-header-h">

			<!-- subheader -->
			<div class="l-subheader">
				<div class="l-subheader-h i-cf">
					
					<?php include'inc.logoSection_blogpost.php' ?>

				</div>
			</div>

		</div>
	</div>
	<!-- /HEADER -->

	<!-- MAIN -->
	<div class="l-main">
		<div class="l-main-h">
			
			<section class="l-section">
				
				<div class="l-subsection">
					<div class="l-subsection-h">
						<div class="l-subsection-hh g-html i-cf">
							
							<div class="l-content">

								<div class="w-blogpost meta_tagscomments">
									<div class="w-blogpost-h">
										<div class="w-blogpost-image"></div>
										<div class="w-blogpost-content">
											<h1 class="w-blogpost-title">This is Just a Single Post</h1>
											<div class="w-blogpost-meta">
												<div class="w-blogpost-meta-date">
													<i class="fa fa-calendar"></i>
													<span class="w-blogpost-meta-date-month">March</span>
													<span class="w-blogpost-meta-date-day">23</span>
													<span class="w-blogpost-meta-date-year">2013</span>
												</div>

												<div class="w-blogpost-meta-comments">
													<i class="fa fa-comment"></i>
													<a class="w-blogpost-meta-comments-h" href="#comments">13 comments</a>
												</div>
											</div>
											<div class="w-blogpost-text i-cf">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
												<img src="img/placeholder/500x500.gif" alt="">
												<p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
												<p>Lorem ipsum dolor sit amet, <a href="javascript:void(0);">this is a text link</a>. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapien ut justo. Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
												<p>Vestibulum sed sem eleifend, eleifend justo ac, viverra tellus. Sed quis tortor at urna feugiat porttitor vel id dui. Aliquam euismod lorem a nulla congue, nec aliquet enim ultrices. Maecenas nulla sem, aliquam vel interdum ut, mattis quis augue. Quisque vel nibh sed nisl cursus tristique eu id purus. Etiam eleifend a mauris a tincidunt. Sed fermentum risus vitae nisl convallis consequat. Curabitur eget lacus vestibulum, pharetra nisi vel, dignissim tellus.</p>
												<p>Donec metus magna, molestie id metus non, molestie condimentum risus. In feugiat semper sapien, et pharetra leo feugiat sit amet. Aliquam lacinia feugiat ullamcorper. Ut egestas mi sit amet felis accumsan accumsan. Donec facilisis, nulla et feugiat faucibus, velit ante blandit tellus, eu tristique tortor neque a tortor. Fusce quis ante lacus. Sed porta venenatis hendrerit. Integer non ligula nec augue ultrices bibendum. Donec tempus quis libero vitae tincidunt. Mauris vestibulum scelerisque luctus.</p>
												
												<h1>Header one</h1>
												<h2>Header two</h2>
												<h3>Header three</h3>
												<h4>Header four</h4>
												<h5>Header five</h5>
												<h6>Header six</h6>
												
												<p>Single line blockquote:</p>
												<blockquote>Stay hungry. Stay foolish.</blockquote>
												<p>Multi line blockquote with a cite reference:</p>
												<blockquote>People think focus means saying yes to the thing you've got to focus on. But that's not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I'm actually as proud of the things we haven't done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs - Apple Worldwide Developers' Conference, 1997</cite></blockquote>

												<h4>Unordered Lists (Nested)</h4>
												<ul>
													<li>List item one
														<ul>
															<li>List item one
																<ul>
																	<li>List item one</li>
																	<li>List item two</li>
																	<li>List item three</li>
																	<li>List item four</li>
																</ul>
															</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
														</ul>
													</li>
													<li>List item two</li>
													<li>List item three</li>
													<li>List item four</li>
												</ul>
												
												<h4>Ordered Lists (Nested)</h4>
												<ol>
													<li>List item one
														<ol>
															<li>List item one
																<ol>
																	<li>List item one</li>
																	<li>List item two</li>
																	<li>List item three</li>
																	<li>List item four</li>
																</ol>
															</li>
															<li>List item two</li>
															<li>List item three</li>
															<li>List item four</li>
														</ol>
													</li>
													<li>List item two</li>
													<li>List item three</li>
													<li>List item four</li>
												</ol>
												
												<h4>HTML Tags</h4>
												
												<h6>Address Tag</h6>
												<address>
													1 Infinite Loop
													Cupertino, CA 95014
													United States
												</address>

												<h6>Abbreviation Tag</h6>
												<p>The abbreviation <abbr title="Seriously">srsly</abbr> stands for "seriously".</p>

												<h6>Code Tag</h6>
												<p>You will learn later on in these tests that <code>word-wrap: break-word;</code> will be your best friend.</p>

												<h6>Delete Tag</h6>
												<p>This tag will let you <del>strikeout text</del>, but this tag is no longer supported in HTML5 (use the <code>&lt;strike&gt;</code> instead).</p>

												<h6>Emphasize Tag</h6>
												<p>The emphasize tag should <em>italicize</em> text.</p>

												<h6>Preformatted Tag</h6>
												<p>This tag styles large blocks of code.</p>
												<pre>
													.post-title {
													margin: 0 0 5px;
													font-weight: bold;
													font-size: 38px;
													line-height: 1.2;
													and here's a line of some really, really, really, really long text, just to see how the PRE tag handles it and to find out how it overflows;
												}</pre>

												<h6>Strong Tag</h6>
												<p>This tag shows <strong>bold text.</strong></p>

												<h6>Subscript Tag</h6>
												<p>Getting our science styling on with H<sub>2</sub>O, which should push the "2" down.</p>

												<h6>Superscript Tag</h6>
												<p>Still sticking with science and Isaac Newton's E = MC<sup>2</sup>, which should lift the 2 up.</p>

											</div>
										</div>

										<div class="w-tags layout_block title_atleft">
											<div class="w-tags-h">
												<div class="w-tags-title">
													<p class="w-tags-title-h">Tags:</p>
												</div>
												<div class="w-tags-list">
													<div class="w-tags-item">
														<a class="w-tags-item-link" href="javascript:void(0);">design</a>
													</div>
													<div class="w-tags-item">
														<a class="w-tags-item-link" href="javascript:void(0);">video</a>
													</div>
													<div class="w-tags-item">
														<a class="w-tags-item-link" href="javascript:void(0);">music</a>
													</div>
													<div class="w-tags-item">
														<a class="w-tags-item-link" href="javascript:void(0);">photography</a>
													</div>
												</div>
											</div>
										</div>	
										
									</div>
								</div>

								<?php //include'inc.comments.php' ?>

							</div>

							<?php include'inc.sidebar.php' ?>
							
						</div>
					</div>
				</div>

			</section>

		</div>
	</div>
	<!-- /MAIN -->

	<?php include'inc.footer.php' ?>

</body>
</html>
