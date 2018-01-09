<section>
	<div class="container blueBg featured">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="white">Featured Projects</h1>
			<ul>
				<?php
					/*$headerimg = "SELECT * FROM tbl_portfolio GROUP BY portfolio_title;";
					
					$result = mysqli_query($link, $headerimg);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo $row['portfolio_title'];
						}
					}*/
				?>
				<li class="image-holder white" id="all"><a href="#">All</a></li>
				<li class="image-holder white" id="web"><a href="#">Web</a></li>
			    <li class="image-holder white" id="design"><a href="#">Design</a></li>
			    <li class="image-holder white" id="other"><a href="#">For Fun</a></li>
		    </ul>
		</div>

		<article class="main-copy orangeBg col-sm-12">
			<h2 class="all">All</h2>
		    <p>lorem ipsum, blah blah.</p>
		</article>

		<!-- put the subimages here -->
		<ul class="subImagesContainer">
			<?php
					/*$headerimg = "SELECT * FROM tbl_portfolio WHERE portfolio_title = 'all';";

					$result = mysqli_query($link, $headerimg);
					$resultCheck = mysqli_num_rows($result);

					if($resultCheck > 0) {
						while($imgrow = mysqli_fetch_assoc($result)) {
						echo '<li><img src="'.$imgrow['portfolio_images'].'"></li>';
						}
					}*/
				?>
		</ul>

		<!--Lightbox: this is where the large image will go-->
		<section class="lightbox overlay">
			<!--add a close button-->
			<i class="fa fa-times close-lightbox"></i>
			<img src="#" alt="feature img" class="lightbox-img">
			<p class="img-desc">placeholder</p>
		</section>
	</div>
	</div>
</section>