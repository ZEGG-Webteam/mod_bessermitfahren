<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_bessermitfahren
 *
 * @author      Florian Hallay
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('jquery.framework');

$document   = JFactory::getDocument();

if (!$bessermitfahren_js_loaded) {
    $document->addScript('https://www.bessermitfahren.de/api.js');
    $bessermitfahren_js_loaded = true;
}
?>
<span id="bmflink"><a target="_blank" rel="noopener" class="btn" href="https://www.bessermitfahren.de/nach/belzig/mitfahrgelegenheiten">Zur Mitfahrbörse</a></span>

<br/>


<script type="text/javascript">bmf.init({api:"3ebda0d3141df5124c59490ced6b6e6b", date:"", wordpress: "", to:"2951134"})</script>

