<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
?>
			<dd class="published">
				<span class="icon-calendar"></span>
				<time datetime="<?php echo JHtml::_('date', $displayData['item']->publish_up, 'c'); ?>" itemprop="datePublished">					
					 <?php echo JHTML::_('date', $displayData['item']->publish_up, 'd'); ?><span><?php echo JHTML::_('date', $displayData['item']->publish_up, 'M'); ?></span>
				</time>
			</dd>