<?php
	if ($view->result) {
		foreach ($view->result as $k => $node) {
			if ($node->nid == $row->nid) {
				if (!empty($view->result[$k+1]->nid)) {
			    $next_nid = $view->result[$k+1]->nid;
				}
			}
		}
	} 
	
  
  if (!empty($fields['entity_id']->content)) {
	  $top_right[] = '<span class="project-type">'. strip_tags($fields['entity_id']->content) .'</span>';
	}	
	$top_right[] = '<span class="project-view-online">'. ($fields['entity_id_2']->content ? strip_tags($fields['entity_id_2']->content, '<a>') : '<span class="offline">'. t('Site Offline') .'</span>') .'</span>';
  if($next_nid) {
    $top_right[] = '<a href="#project-'. $next_nid .'" class="next-link"><span>Next Project</span></a>';
  };
	
	
?>
<a name="project-<?php echo $row->nid; ?>" id="project-<?php echo $row->nid; ?>"></a>
<div class="clearfix">
  <h3 class="project-title"><?php echo $fields['title']->content; ?></h3> 
  <div class="project-top-right">
    <?php echo implode(' | ', $top_right); ?>
  </div>
</div>
<div class="project-screenshot"><?php echo $fields['field_site_photos']->content; ?></div>
<?php echo !empty($fields['entity_id_3']->content) ? '<div class="project-credits">'. t('Credits') .': '. strip_tags($fields['entity_id_3']->content, '<a><br><br />') .'</div>' : ''; ?>
<?php echo $fields['edit_node']->content; ?>