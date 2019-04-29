<?php
/**
 * @copyright Copyright (C) 2015-2019 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

declare(strict_types=1);

namespace app\assets;

use Yii;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class SalmonWorkListAsset extends AssetBundle
{
    public $sourcePath = '@app/resources/.compiled/stat.ink';
    public $js = [
        'salmon-work-list.js',
        'salmon-work-list-hazard.js',
    ];
    public $depends = [
        JqueryAsset::class,
    ];
}
