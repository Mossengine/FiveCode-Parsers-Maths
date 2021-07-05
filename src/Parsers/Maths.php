<?php namespace Mossengine\FiveCode\Parsers;

use Mossengine\FiveCode\FiveCode;
use Mossengine\Helper;

/**
 * Class Maths
 * @package Mossengine\FiveCode\Parsers
 */
class Maths extends ParsersAbstract {

    /**
     * @return array|string
     */
    public static function register() : array {
        return [
            'maths.addition' => function($fiveCode, $mixedData) { return self::addition($fiveCode, (array) $mixedData); },
            'maths.subtract' => function($fiveCode, $mixedData) { return self::subtract($fiveCode, (array) $mixedData); },
            'maths.divide' => function($fiveCode, $mixedData) { return self::divide($fiveCode, (array) $mixedData); },
            'maths.multiply' => function($fiveCode, $mixedData) { return self::multiply($fiveCode, (array) $mixedData); },
            'maths.random' => function($fiveCode, $mixedData) { return self::random($fiveCode, (array) $mixedData); },
        ];
    }

    /**
     * @param FiveCode $fiveCode
     * @param array $mixedData
     * @return array|\ArrayAccess|mixed|null
     */
    public static function addition(FiveCode $fiveCode, array $mixedData = []) {
        $value = array_shift($mixedData);
        foreach ($mixedData as $arg) {
            $value += floatval($arg);
        }
        return $fiveCode->result($value);
    }

    /**
     * @param FiveCode $fiveCode
     * @param array $mixedData
     * @return array|\ArrayAccess|mixed|null
     */
    public static function subtract(FiveCode $fiveCode, array $mixedData = []) {
        $value = array_shift($mixedData);
        foreach ($mixedData as $arg) {
            $value -= floatval($arg);
        }
        return $fiveCode->result($value);
    }

    /**
     * @param FiveCode $fiveCode
     * @param array $mixedData
     * @return array|\ArrayAccess|mixed|null
     */
    public static function divide(FiveCode $fiveCode, array $mixedData = []) {
        $value = array_shift($mixedData);
        foreach ($mixedData as $arg) {
            $value /= floatval($arg);
        }
        return $fiveCode->result($value);
    }

    /**
     * @param FiveCode $fiveCode
     * @param array $mixedData
     * @return array|\ArrayAccess|mixed|null
     */
    public static function multiply(FiveCode $fiveCode, array $mixedData = []) {
        $value = array_shift($mixedData);
        foreach ($mixedData as $arg) {
            $value *= floatval($arg);
        }
        return $fiveCode->result($value);
    }

    /**
     * @param FiveCode $fiveCode
     * @param array $mixedData
     * @return array|\ArrayAccess|mixed|null
     */
    public static function random(FiveCode $fiveCode, array $mixedData = []) {
        return $fiveCode->result(
            mt_rand(
                Helper::Array()->Get($mixedData, 0, 0),
                Helper::Array()->Get($mixedData, 1, 1)
            )
        );
    }

}