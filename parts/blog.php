<div class="container news">
	<div class="row">
		<h1>Новости</h1>
	</div>
	
	<div class="row">
		<?php
			function get_news_all($limit, $offset) {
				global $db;
				$news = $db->query("SELECT * FROM news ORDER BY id DESC LIMIT $limit OFFSET $offset");
				return $news;
			}
			$page = isset($_GET['page']) ? $_GET['page']: 1;
			$limit = 4;
			$offset = $limit * ($page - 1);
			$page_count = ceil(count($new) / $limit);
		
			$news = get_news_all($limit, $offset);
			foreach ($news as $new):
		?>
		
			<div class="col-md-6">
				<article class="news__blog">
					<a href="/news.php?id=<?php echo $new["id"]; ?>">
						<span class="date"><?php echo date("d.m.Y", strtotime($new["date"])); ?></span>
						<h2 class="title"><?php echo $new["title"]; ?></h2>
						<div class="announce"><?php echo $new["announce"]; ?></div>
						<button class="button">Подроднее<i class="fa-solid fa-arrow-right-long"></i></button>
					</a>
				</article>
			</div>

	<?php endforeach; ?>
	</div>

	<div class="row">
		<div class="col pagination">

			<?php for($p = 0; $p <= $page_count; $p++) :?>
				<?php if ($page == $p ) {
					 'class="active"';
				} ?>
					<a href="?page=<?php echo $p + 1; ?>"><button class="button"><?php echo $p + 1; ?></button></a>
				<?php endfor;?>



				





			
		</div>
		
	</div>
</div>