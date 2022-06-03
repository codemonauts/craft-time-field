<?php

namespace codemonauts\timefield\fields;

use codemonauts\timefield\resources\TimeFieldAssets;
use Craft;
use craft\base\ElementInterface;
use craft\base\Field;
use craft\base\PreviewableFieldInterface;

class Time extends Field implements PreviewableFieldInterface
{
    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('timefield', 'Time Field');
    }

    /**
     * @inheritdoc
     */
    public function getInputHtml(mixed $value, ?ElementInterface $element = null): string
    {
        Craft::$app->getView()->registerAssetBundle(TimeFieldAssets::class);

        return Craft::$app->getView()->renderTemplate('timefield/input',
            [
                'name' => $this->handle,
                'value' => $value,
                'field' => $this,
            ]);
    }
}
