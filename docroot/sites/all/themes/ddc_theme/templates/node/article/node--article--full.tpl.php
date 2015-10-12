<?php
/**
 * @file
 * Template file for article full view.
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <article>
    <div class="media">
      <div class="pull-right col-md-3">
        <h4><?php print render($content['field_author']); ?></h4>
        <?php print render($content['field_author_image']); ?>
        <?php print render($content['field_author_description']); ?>
      </div>
      <div class="media-body col-md-8">
        <h1><?php print $title; ?></h1>
        <h2 class="subtitle"><?php print render($content['field_subtitle']); ?></h2>
        <div class="article-date"><?php print format_date($node->created, 'article'); ?></div>
          <!--render value output for testing-->
        <?php //print render($content['field_special_article']['#items']['0']['value']); ?>
        <?php print render($content['body']); ?>
      </div>
    </div>
  </article>
</div>
