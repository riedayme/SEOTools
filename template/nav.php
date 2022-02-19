<?php defined('BASEPATH') OR exit('no direct script access allowed');
?>
<!-- ======== sidebar-nav start =========== -->
<aside class="sidebar-nav-wrapper">
	<div class="navbar-logo">
		<h1 class="text-light fw-bold">
			<?php echo $webconfig['title']; ?>
		</h1>
	</div>
	<nav class="sidebar-nav">
		<ul>
			<li class="nav-item <?php if(preg_match("/\/[a-z]+\/$/",$_SERVER['REQUEST_URI']) or $_SERVER['REQUEST_URI'] == '/'){echo "active";}?>">
				<a href="./">
					<span class="icon"><i class="lni lni-dashboard"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>

			<li class="nav-item <?php if($_GET['module'] == 'keywordsuggest'){echo "active";}?>">
				<a href="./?module=keywordsuggest">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">Keyword Suggest</span>
				</a>
			</li>

			<li class="nav-item <?php if($_GET['module'] == 'googlesuggest'){echo "active";}?>">
				<a href="./?module=googlesuggest">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">Google Suggest</span>
				</a>
			</li>

			<span class="divider"><hr></span>

			<li class="nav-item <?php if($_GET['module'] == 'wordtextspinner'){echo "active";}?>">
				<a href="./?module=wordtextspinner">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">Word Text Spinner</span>
				</a>
			</li>	

			<li class="nav-item <?php if($_GET['module'] == 'wordcounter'){echo "active";}?>">
				<a href="./?module=wordcounter">
					<span class="icon"><i class="lni lni-layout"></i></span>
					<span class="text">Word Counter</span>
				</a>
			</li>	

		</ul>
	</nav>
</aside>
<div class="overlay"></div>
<!-- ======== sidebar-nav end =========== -->