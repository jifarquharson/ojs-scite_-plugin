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

    // Register the plugin even when it is not enabled
    $success = parent::register($category, $path);

		if ($success && $this->getEnabled()) {
      // Do something when the plugin is enabled
    }

		return $success;
	}

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
	private function getPubId($smarty) {
		$application = Application::getName();
		return $submission->getStoredPubId('doi');
	}
}
	/**
	 * Add badge to article landing page
	 * @param $hookName string
	 * @param $params array
	 */
