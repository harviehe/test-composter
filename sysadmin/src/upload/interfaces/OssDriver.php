<?php

namespace SysAdmin\upload\interfaces;

interface OssDriver
{

    public function save($objectName,$filePath);

}