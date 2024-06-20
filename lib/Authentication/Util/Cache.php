<?php

namespace CyberSource\Authentication\Util;

class Cache
{
    private $file_cache = array();

    public function __construct()
    {

    }

    public function fetchFromCache($key)
    {
        if ($this->checkIfExistInCache($key))
        {
            return $this->file_cache[$key];
        }

        return false;
    }

    public function storeInCache($key, $value)
    {
        if (!$this->checkIfExistInCache($key))
        {
            $this->file_cache[$key] = $value;
            return true;
        }

        return false;
    }

    public function checkIfExistInCache($key)
    {
        foreach ($this->file_cache as $cache_key => $cache_value)
        {
            if (isset($cache_value))
            {
                return true;
            }
        }

        return false;
    }
}
