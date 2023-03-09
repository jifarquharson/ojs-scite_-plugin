<?php
/**
 * @file plugins/generic/sciteAnalytics/sciteAnalyticsPlugin.inc.php
 * 
 * Copyright 2023
 *
 * @author jifarquharson
 *
 */
import('lib.pkp.classes.plugins.GenericPlugin');
class sciteAnalyticsPlugin extends GenericPlugin {
	/**
	 * Called as a plugin is registered to the registry
	 * @param $category String Name of category plugin was registered to
	 * @return boolean True iff plugin initialized successfully; if false,
	 * 	the plugin will not be registered.
	 */
	public function register($category, $path, $mainContextId = NULL) {
		$success = parent::register($category, $path);
		if (!Config::getVar('general', 'installed') || defined('RUNNING_UPGRADE')) return $success;
		if ($success && $this->getEnabled()) {
			HookRegistry::register('Templates::Article::Details', array($this, 'insertBadge'));
		}
		return $success;
  	}
	/*public function register($category, $path, $mainContextId = NULL) {

    // Register the plugin even when it is not enabled
    $success = parent::register($category, $path);

		if ($success && $this->getEnabled()) {
      // Do something when the plugin is enabled
    }

		return $success;
	}*/

  /**
   * Provide a name for this plugin
   *
   * The name will appear in the plugins list where editors can
   * enable and disable plugins.
   */
	function getDisplayName() {
		return __('plugins.generic.sciteAnalytics.displayName');
	}
	/*public function getDisplayName() {
		return 'scite_ Analytics Badge';
	}/*

	/**
   * Provide a description for this plugin
   *
   * The description will appear in the plugins list where editors can
   * enable and disable plugins.
   */
	public function getDescription() {
		return 'This plugin integates a [scite.ai](https://scite.ai/badge) badge to give a breakdown of article citations.';
	}
	
	/**
	 * Insert Connected Papers badge
	 * 
	 * @param string $hookName Name of hook calling function
	 * @param array $params 
	 * @return boolean
	 */
	function insertBadge($hookName, $params) {

		$templateMgr = TemplateManager::getManager();

		// get DOI
		$submission = $templateMgr->getTemplateVars('article');
		$doi = $submission->getStoredPubId('doi');
		$templateMgr->assign('DOI', $doi);

		// get scite_ badge template
		$badge = $this->getTemplateResource('sciteBadge.tpl');

		if ($doi) {
			$output =& $params[2]; 
			$output .= $templateMgr->fetch($badge);
		}

		return false;
	}
}	
?>
