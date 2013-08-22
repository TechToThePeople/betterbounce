<?php

require_once 'betterbounce.civix.php';

/**
 * Implementation of hook_civicrm_config
 */

function betterbounce_civicrm_apiWrapper (&$wrappers,$apiRequest) {
  if ("event_bounce" != $apiRequest ["action"] || "mailing" != $apiRequest ["entity"]) {
//    return; 
  }
  $wrappers[] = CRM_Utils_API_BounceLogger::singleton();
}


/**
 * Implementation of hook_civicrm_config
 */
function betterbounce_civicrm_config(&$config) {
  _betterbounce_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function betterbounce_civicrm_xmlMenu(&$files) {
  _betterbounce_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function betterbounce_civicrm_install() {
  $r = civicrm_api("ActivityType","create",array("version"=>3,"name"=>"bounce","label"=>"Bounce", "is_reserved"=>1,"is_active"=>1,"component_id"=>4,"description"=>"mail bounced after a mailing","weight"=>1));
  print_r($r);
  return _betterbounce_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function betterbounce_civicrm_uninstall() {
  return _betterbounce_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function betterbounce_civicrm_enable() {
  return _betterbounce_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function betterbounce_civicrm_disable() {
  return _betterbounce_civix_civicrm_disable();
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
function betterbounce_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _betterbounce_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function betterbounce_civicrm_managed(&$entities) {
  return _betterbounce_civix_civicrm_managed($entities);
}
