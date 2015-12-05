<?php

/*
 * License plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-license
 * @package   hidev-license
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\license\goals;

use hidev\helpers\Helper;

/**
 * Goal for GitHub.
 */
class GitHubGoal extends \hidev\goals\DefaultGoal
{
    public function setName($value)
    {
        $this->setItem('name', $value);
    }

    public function getPackage()
    {
        return $this->getItem('package') ?: $this->package->name;
    }

    public function getVendor()
    {
        return $this->getItem('vendor') ?: $this->vendor->name;
    }
}
