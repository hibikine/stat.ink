<?php
/**
 * @copyright Copyright (C) 2015-2019 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@bouhime.com>
 */

declare(strict_types=1);

namespace app\assets;

use yii\web\AssetBundle;

class GameModeIconsAsset extends AssetBundle
{
    public $sourcePath = '@app/resources/gamemodes';
    public $css = [];
    public $js = [];
}