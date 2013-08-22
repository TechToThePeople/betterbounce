<?php

require_once 'bounce2activity.civix.php';

/**
 * Implementation of hook_civicrm_config
 */

function bounce2activity_civicrm_apiWrapper (&$wrappers,$apiRequest) {
  if ("event_bounce" != $apiRequest ["action"] || "mailing" != $apiRequest ["entity"]) {
//    return; 
  }
  $wrappers[] = CRM_Utils_API_BounceLogger::singleton();
}


/**
 * Implementation of hook_civicrm_config
 */
function bounce2activity_civicrm_config(&$config) {
  _bounce2activity_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function bounce2activity_civicrm_xmlMenu(&$files) {
  _bounce2activity_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function bounce2activity_civicrm_install() {
  return _bounce2activity_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function bounce2activity_civicrm_uninstall() {
  return _bounce2activity_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function bounce2activity_civicrm_enable() {
  return _bounce2activity_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function bounce2activity_civicrm_disable() {
  return _bounce2activity_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function bounce2activity_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _bounce2activity_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function bounce2activity_civicrm_managed(&$entities) {
  return _bounce2activity_civix_civicrm_managed($entities);
}
