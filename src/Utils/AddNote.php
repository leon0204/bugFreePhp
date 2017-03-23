<?php

namespace BugFree\Utils;

/**
 * Class AddNote
 * @package BugFree\Utils
 */

class AddNote
{
    /**
     * @param $filepath 添加注释文件路径 支持文件目录，单文件，多文件(数组)
     * 用佛祖保佑单个文件
     */
    static public function bugfree($filepath)
    {
        //头部添加文字
        $originStr   = file_get_contents($filepath);
        dump($originStr);
        dump('--------------------准备插入--------------------');
        $arr = explode('php',$originStr);
        $path = __DIR__.'/../Configs/fozu.txt';
//        dd($path);
        $Add =  file_get_contents($path);
//        dd($Add);
        $arr[1] = PHP_EOL.$Add.$arr[1];
        $strAdd = implode('php',$arr);
        dump('--------------------插入ing--------------------');
        $wocha    = file_put_contents($filepath,$strAdd);
        $originStr   = file_get_contents($filepath);
        dump('--------------------插入完成--------------------');
        dump($originStr);
    }
}