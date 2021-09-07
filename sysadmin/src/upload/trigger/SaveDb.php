<?php

namespace SysAdmin\upload\trigger;


use think\facade\Db;

/**
 * 保存到数据库
 * Class SaveDb
 */
class SaveDb
{

    /**
     * 保存上传文件
     * @param $tableName
     * @param $data
     */
    public static function trigger($tableName, $data)
    {
        Db::name($tableName)->save($data);
    }

}