<?php

class BookApplication {
    private static $instance = null;

    // Private constructor to prevent instantiation from outside
    private function __construct() {}

    // Method to get the singleton instance
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}