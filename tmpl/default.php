<?php 
    // no direct access
    defined( '_JEXEC' ) or die( 'Restricted access' );
    defined('DS') or define("DS", DIRECTORY_SEPARATOR);
    $document = JFactory::getDocument();
    $document->addStyleSheet(JURI::root().'modules/mod_jlms_search/mod_jlms_search.css' );
	
	echo '
		<script type="text/javascript">
			jlms_site_host = "'.JURI::root().'";
		</script>
		<script type="text/javascript" src="'.JURI::root().'components/com_jlms/js/ukconflict.js"></script>
		<script type="text/javascript" src="'.JURI::root().'components/com_jlms/js/uikit.min.js"></script>
	';

    $search = JFactory::getApplication()->input->get("search", "", "raw");
    JHtml::_('behavior.core');
?>

<div class="jlms-module-search">
    <form 
        class="jlms-search-form uk-search uk-search-default" 
        name="jlms-search-form-<?php echo $module->id ?>" 
        action="<?php echo JRoute::_("index.php?option=com_jlms&view=jlmssearch") ?>" 
        method="get">
        <button type="submit" class="uk-search-icon-flip uk-search-icon uk-icon" uk-search-icon="">
            <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg>
        </button>
        <input class="uk-search-input" type="search" placeholder="<?php echo JText::_("JLMS_SEARCH_PLACEHOLDER"); ?>" name="search" value="<?php echo $search; ?>" />

        <input type="hidden" name="module_id" value="<?php echo $module->id ?>" />
    </form>
</div>
