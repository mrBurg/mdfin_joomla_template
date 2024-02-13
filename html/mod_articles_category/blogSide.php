<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<?php
$cats = $params->get('catid');
$firstCatId = $cats[0];
?>

<!-- <h3><?php echo '<a href="'. JRoute::_(ContentHelperRoute::getCategoryRoute($firstCatId)) .'">'.$module->title.'</a>'; ?></h3> -->

<ul class="category-module<?php echo $moduleclass_sfx; ?>">
    <?php foreach ($list as $item) : ?>
        <?php $images = json_decode($item->images); ?>
        <li>
            <?php if ($images->image_intro) :?>
                <a class="mod-news-img" style="background-image: url('<?php echo htmlspecialchars($images->image_intro); ?>');" href="<?php echo $item->link; ?>"></a>
            <?php endif; ?>

            <div class="rightpart">
                <?php if ($item->displayDate) : ?>
                    <div class="mod-articles-category-date">
                        <?php echo JHTML::_('date', $item->publish_up, 'd'); ?><br><span><?php echo JHTML::_('date', $item->publish_up, 'M'); ?></span>
                    </div>
                <?php endif; ?>
                <h4><a class="mod-articles-category-title" href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h4>
                <?php if ($params->get('show_introtext')) :?>
                    <p><?php echo $item->displayIntrotext; ?></p>
                <?php endif; ?>
                
                
                <a class="readmore" href="<?php echo $item->link; ?>">read more »</a>
                

	        </div>
	</li>
	<?php endforeach; ?>
</ul>