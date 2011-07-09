<?php //print_r($node); ?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($node->field_site_url[0]['url']) { ?>
	<h2 class="title"><a href="<?php print $node->field_site_url[0]['url']?>" target="_blank" title="Visit site"><?php print $title?></a></h2>
	<?php } else { ?>
	<h2 class="title"><?php print $title?></h2>
	<?php }; ?>
    <?php if ($node->project_type) { ?><?php print $node->project_type; ?><?php }; ?>
	<?php if ($node->project_tags) { ?><br /><?php print $node->project_tags; ?><?php }; ?>
    <?php if ($node->field_site_url[0]['url']) { ?>
	<br /><a href="<?php print $node->field_site_url[0]['url']?>" target="_blank" title="Visit site">Visit site >></a>
	<?php }; ?>
    <div class="content"><?php print $content?></div>
    <?php if ($links) { ?><div class="links" style="clear:both; "><?php print $links?></div><?php }; ?>
  </div>
