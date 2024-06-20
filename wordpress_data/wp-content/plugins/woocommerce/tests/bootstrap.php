<?php
// tests/YourPluginTest.php

class YourPluginTest extends WP_UnitTestCase {
    function test_sample() {
        $this->assertTrue(true);
    }

    function test_plugin_loaded() {
        $this->assertTrue(is_plugin_active('your-plugin/your-plugin.php'));
    }
}
