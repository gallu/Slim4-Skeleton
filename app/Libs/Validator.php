<?php
declare(strict_types=1);

namespace App\Libs;

class Validator extends \SlimLittleTools\Libs\Validator
{
    // ルールを追加したい時は「validateExec+ルール名」のメソッドを追加してください

    /**
     * 例
    public static function validateExecHirakana($datum, $param)
    {
        if (1 === preg_match( '/\A[ぁ-ん 　ー]+\z/u', $datum)) {
            return true;
        }
        return false;
    }
     */

}

