<?php

class HelperClass {
    public static function serializeCompteArray($array) {
        $newArr = [];
        foreach ($array as $item) {
            array_push($newArr, serialize($item));
        }
        return $newArr;
    }
    public static function serializeCompte($compte) {
        return serialize($compte);
    }
    public static function unserializeCompteArray($array) {
        $newArr = [];
        foreach ($array as $item) {
            array_push($newArr, unserialize($item));
        }
        return $newArr;
    }
}