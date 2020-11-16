<?php 
	$title = "Home";
	require_once "header.acc.php";

?>

	<div class="news-list">
		<div class="news">
			<div class="news-detail">
				<div class="news-owner-image">
					<img src="<?php echo $_SESSION['image'] ?>" height="100%" width="100%">
				</div>
				<div class="news-name">
					<div class="news-owner-name"><a href="#">NeuronHub</a></div>
					<div class="news-category">Introduction</div>
				</div>
			</div>
			<div class="news-content">
				<div class="news-image">
					<img src="../images/buysell.jpg" height="100%" width="100%">
				</div>
				<div class="news-text">
				<p>This is a testing page for news in neuronhub if there is any mistake, you can please correct me in any platform either github facebook.</p>
				</div>
			</div>
			<div class="news-react">
				<div class="news-react-details">
					<div class="like-news">
						<form>
							<button>
								<i class="fa fa-thumbs-up"></i>
								<span>372</span>
							</button>
						</form>
					</div>
					<div class="comments">
						<form>
							<button>
								<i class="fa fa-comment"></i>
								<span>415</span>
							</button>
						</form>
					</div>
				</div>
				<div class="comment-news">
					<form method="post">
						<input type="text" name="comment" placeholder="Comment">
						<button type="submit">Post</button>
					</form>
				</div>
			</div>
		</div>


		<div class="news">
			<div class="news-detail">
				<div class="news-owner-image">
					<img src="../images/buysell.jpg" height="100%" width="100%">
				</div>
				<div class="news-name">
					<div class="news-owner-name"><a href="#">NeuronHub</a></div>
					<div class="news-category">Introduction</div>
				</div>
			</div>
			<div class="news-content">
				<div class="news-image">
					<img src="../images/group.jpeg" height="100%" width="100%">
				</div>
				<div class="news-text">
				<p>This is a testing page for news in neuronhub if there is any mistake, you can please correct me in any platform either github facebook.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="news-react">
				<div class="news-react-details">
					<div class="like-news">
						<form method="post">
							<button>
								<i class="fa fa-thumbs-up"></i>
								<span>372</span>
							</button>
						</form>
					</div>
					<div class="comments">
						<form method="post">
							<button>
								<i class="fa fa-comment"></i>
								<span>415</span>
							</button>
						</form>
					</div>
				</div>
				<div class="comment-news">
					<form method="post">
						<input type="text" name="comment" placeholder="Comment">
						<button type="submit">Post</button>
					</form>
				</div>
			</div>
		</div>


	</div>
	<div class="important-news">
		<p>To pass important news <a href="#"><button class="create-news">Contact Admin</button></a></p>
	</div>
<?php
	require_once "footer.acc.php";
?>
