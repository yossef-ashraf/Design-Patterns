<?php

namespace APP\OpenClose;

class Matchs {
    public function __construct(array $players) {
        echo "Open Close Principle\n";

        foreach ($players as $player) {
            $className = "APP\\OpenClose\\Players\\{$player}Player";
            if (class_exists($className)) {
                $playerInstance = new $className();
                $playerInstance->player();
            } else {
                echo "Class $className not found.\n";
            }
        }
    }
}