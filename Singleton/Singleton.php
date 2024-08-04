<?php

namespace Pattern\Singleton;

class Singleton {
    /**
     * The single instance of the class.
     */
    private static $instance = null;

    public $object_hash = null;

    /**
     * Private constructor to prevent direct creation of object.
     */
    private function __construct() {
        // Initialization code here
    }

    /**
     * Prevent object cloning.
     */
    private function __clone() {
        // Nothing here
    }

    /**
     * Prevent object unserialization.
     */
    private function __wakeup() {
        // Nothing here
    }

    /**
     * Static method to get the single instance of the class.
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
            self::$instance->object_hash = spl_object_hash(self::$instance);
        }
        return self::$instance;
    }

    /**
     * Example method to demonstrate singleton usage.
     */
    public function doSomething() {
        echo "Doing something!";
    }

    /**
     * Method to get the length of the object hash.
     */
    public function getCountObjectHash(): int {
        return strlen($this->object_hash);
    }

    /**
     * Method to get the object hash.
     */
    public function getObjectHash(): string {
        return $this->object_hash;
    }
}