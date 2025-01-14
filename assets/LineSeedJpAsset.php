<?php

/**
 * @copyright Copyright (C) 2015-2022 AIZAWA Hina
 * @license https://github.com/fetus-hina/stat.ink/blob/master/LICENSE MIT
 * @author AIZAWA Hina <hina@fetus.jp>
 */

declare(strict_types=1);

namespace app\assets;

use yii\web\AssetBundle;

final class LineSeedJpAsset extends AssetBundle
{
    public $sourcePath = '@app/resources/line-seed-jp';
    public $css = [
        'lineseedjp-otf-bd.min.css',
        'lineseedjp-otf-rg.min.css',
    ];
}
