<?php

namespace codemonauts\timefield\resources;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class TimeFieldAssets extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = '@codemonauts/timefield/resources';

        $this->depends = [
            CpAsset::class,
        ];

        $this->css = [
            'css/timefield.css',
        ];

        parent::init();
    }
}
