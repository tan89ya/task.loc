<?php
		function get_new_by_id($id) {
			global $db;
			$news = $db->query("SELECT * FROM news WHERE id = $id");
			foreach ($news as $new) {
				return $new;
			}
		}
?>

<?php require 'parts/header.php'; ?>
<?php $new = get_new_by_id($_GET['id']); ?>

	<main>

				<article class="news__article">
					<div class="container">
						<div class="breadcrumbs">
							<a href="/">Главная</a>&frasl;
							<span><?php echo $new["title"]; ?></span>
						</div>

						<div class="row">
							<h1><?php echo $new["title"]; ?></h1>
							<!-- <span class="date"><?php echo date("d.m.Y", strtotime($new["date"])); ?></span> -->
						</div>
						<div class="row article">
							<div class="col-xl-6">
								<span class="date"><?php echo date("d.m.Y", strtotime($new["date"])); ?></span>
								<h2 class="title"><?php echo $new["announce"]; ?></h2>
								<div class="announce"><?php echo $new["content"]; ?></div>
								<a href="/"><button class="button"><i class="fa-solid fa-arrow-left-long"></i>назад к новостям</button></a>
							</div>
							<div class="col-xl-6">
								<img class="news__image" src="images/<?php echo $new["image"]; ?>" alt="">
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	
	</main>
<?php require 'parts/fotter.php'; ?>


