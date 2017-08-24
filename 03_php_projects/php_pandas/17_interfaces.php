<?php

interface LionInterface {
    public function eat();
    public function poop();
    public function sleep($time);
}

class BabyLion implements LionInterface {
    public function eat() {
        return 'the lion is hungry.';
    }
    public function poop() {
        return 'the lion poops.'; 
    }
    public function sleep($time) {
        return $time - 10;
    }
}

$babyLion = new BabyLion;