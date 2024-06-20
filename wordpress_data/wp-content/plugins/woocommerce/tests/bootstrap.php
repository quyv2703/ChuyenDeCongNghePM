<?php
// tests/bootstrap.php

$_tests_dir = getenv('WP_TESTS_DIR');
if (!$_tests_dir) {
    $_tests_dir = rtrim(sys_get_temp_dir(), '/\\') . '/wordpress-tests-lib';
}

require_once $_tests_dir . '/includes/functions.php';

tests_add_filter('muplugins_loaded', '_manually_load_plugin');

function _manually_load_plugin() {
    require dirname(__FILE__) . '/../wp-content/plugins/your-plugin/your-plugin.php';
}

require $_tests_dir . '/includes/bootstrap.php';
