<?php

namespace APP\DependencyInversion;

class Matchs {
    public function __construct(array $players) {
        echo "DefenceInterfaces Close Principle\n";

        foreach ($players as $player) {
            $className = "APP\\DependencyInversion\\Players\\{$player}Player";
            if (class_exists($className)) {
                $playerInstance = new $className();
                $playerInstance->player();
            } else {
                echo "Class $className not found.\n";
            }
        }
    }
}