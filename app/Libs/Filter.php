<?php
declare(strict_types=1);

namespace App\Libs;

class Filter extends \SlimLittleTools\Libs\Filter
{
    // ルールを追加したい時は「filter+ルール名」のメソッドを追加してください
    /**
     * 例
    public static function filterHirakana($s)
    {
        return mb_convert_kana($s, 'HcV', 'UTF-8');
    }
     */


}

