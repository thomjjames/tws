<div id="page">
  <a name="top" id="top"></a>
  <div class="top clearfix">
    <div class="inner_width">
	  <div class="logo"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">TomsWebStuff.com</a></div>
	  <div class="top_right">
	    <div class="nav_bar">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'navlist',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>			
      </div>
	  </div>
    </div>
  </div>


  <div class="main_content clearfix">
    <div class="inner_width clearfix">
      <?php if ($page['highlighted']) { ?><div id="mission"><?php print render($page['highlighted']); ?></div><?php } ?>
      
	  <div class="main clearfix">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>      
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php print $messages ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
	  </div>
	  
    <?php if ($page['sidebar_right']) { ?>
      <div class="sidebar_right">
				<?php print render($page['sidebar_right']); ?>
      </div>
	  <?php } ?>	  
	</div>  
  </div>  
  
  <div id="footer" class="clearfix">
    <div class="inner_width">
	    <?php print render($page['footer']); ?>
	  </div>
  </div>
  <?php if ($top_link) { ?>
    <div class="top-link-wrapper">
      <a href="#top" id="top-link-a">Back to the top</a>
    </div> 
  <?php }; ?>
</div>