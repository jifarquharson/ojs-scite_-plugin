<?php
import('lib.pkp.classes.plugins.GenericPlugin');
class sciteAnalyticsPlugin extends GenericPlugin {
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
	public function getDisplayName() {
		return 'scite_ Analytics Badge';
	}

	/**
   * Provide a description for this plugin
   *
   * The description will appear in the plugins list where editors can
   * enable and disable plugins.
   */
	public function getDescription() {
		return 'This plugin integates a [scite.ai](https://scite.ai/badge) badge to give a breakdown of article citations.';
	}
}
