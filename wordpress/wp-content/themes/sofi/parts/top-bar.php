<!-- <div class="top-bar-container contain-to-grid show-for-medium-up">
	<nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
        </ul>
		<section class="top-bar-section">
        	<?php foundationpress_top_bar_l(); ?>
        	<?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div> -->

<div id="sofi-sec-nav">
	<div class="row">
		<div class="columns small-12">
			<div class="pull-right">
				<div class="mint-social ">
					<ul class="l-inline">
						<li class="icn">
							<a href="https://twitter.com/MCFoundation" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img/icons/Twitter_logo_white.png" alt=""></a>
						</li>
						<li class="icn">
							<a href="https://www.flickr.com/photos/mastercardfoundation/" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img/icons/flickr.png" alt=""></a>
						</li>
						<li class="icn">
							<a href="https://www.youtube.com/channel/UCRaxyvl99d3cK9Q4BvlCpUw" target="_blank"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img/icons/youtube_034.png" alt=""></a>
						</li>
						<li class="sb-search-li" id="sb-search-li">				 		
							<!--form role="search" method="get" id="searchform" action="http://mastercardfdnsymposium.org/">
								<input type="text" value="" name="s" id="s" placeholder="Search" />
								<input type="submit" id="searchsubmit" value="" />
							</form-->
							<div id="sb-search" class="sb-search">
								<form role="search" method="get" id="searchform" action="http://mastercardfdnsymposium.org/">
									<input class="sb-search-input" placeholder="Search" value="" name="s" type="text">
									<input class="sb-search-submit" id="searchsubmit" value="" type="submit">
									<span class="sb-icon-search"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img/icons/search.png" alt=""></span>
								</form>
							</div> 
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="sofi-main-nav">
	<div class="row">
		<div class="medium-12 columns">
			<ul class="inline-list">
				<?php foundationpress_top_bar_l(); ?>
				<li class="logo"><a href="../"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/css/img/SoFI2015_Logo.png" alt="The MasterCard Foundation Symposium on Financial Inclusion 2015 with the Boulder Institute of Microfinance"></a></li>
				<?php foundationpress_top_bar_r(); ?>
			</ul>
		</div>
	</div>
</div>
