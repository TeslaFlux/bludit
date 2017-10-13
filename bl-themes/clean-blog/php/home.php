<!-- Page Header -->
<header class="masthead" style="background-image: url('https://source.unsplash.com/1600x900/?nature')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-10 mx-auto">
				<div class="site-heading">
					<h1><?php echo $Site->title() ?></h1>
					<span class="subheading"><?php echo $Site->description() ?></span>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto">

			<!-- Content -->
			<?php
				foreach ($content as $page):
			?>

				<div class="post-preview">
					<a href="<?php echo $page->permalink() ?>">
						<h2 class="post-title"><?php echo $page->title() ?></h2>
						<h3 class="post-subtitle"><?php echo $page->description() ?></h3>
					</a>
					<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2017</p>
				</div>
				<hr>

			<?php
				endforeach
			?>

			<!-- Pager -->
			<div class="clearfix">
				<a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a>
			</div>

		</div>
	</div>
</div>

<hr>