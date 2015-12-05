<?php

/*
 * GitHub plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-github
 * @package   hidev-github
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\github;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'goals' => [
            'github' => 'hidev\github\goals\GitHubGoal',
        ],
    ];
}
