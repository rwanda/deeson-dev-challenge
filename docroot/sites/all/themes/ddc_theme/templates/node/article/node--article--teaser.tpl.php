<?php
/**
 * @file
 * Template file for article teasers.
 */
?>
<div class="contextual-links-region">
  <?php print render($title_suffix); ?>
  <article>
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
      <div class="media">
        <div class="pull-left">
          <?php print render($content['field_author_image']); ?>
        </div>
        <div class="media-body">
          <h2><?php print $linked_title; ?></h2>
          <?php print render($content['body']); ?>
        </div>
      </div>
    </div>
  </article>
</div>
