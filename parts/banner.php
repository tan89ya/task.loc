<?php
	function get_news() {
		global $db;
		$news = $db->query("SELECT * FROM news ORDER BY id DESC");
		foreach ($news as $new) {
			return $new;
		}
	}
?>
<?php $new = get_news(); ?>
<div class="banner" style="background-image: url(images/<?php echo $new["image"]; ?>);">
	<div class="container">
		<div class="row">
			<h1><?php echo $new["title"]; ?></h1>
			<h2><?php echo $new["announce"]; ?></h2>
		</div>
	</div>
</div>
