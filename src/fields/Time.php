<?php

namespace codemonauts\timefield\fields;

use codemonauts\timefield\resources\TimeFieldAssets;
use Craft;
use craft\base\ElementInterface;
use craft\base\Field;
use craft\base\PreviewableFieldInterface;
use LitEmoji\LitEmoji;
use yii\db\Schema;

class Time extends Field implements PreviewableFieldInterface
{
    /**
     * @var string The type of database column the field should have in the content table
     */
    public $columnType = Schema::TYPE_STRING;

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
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function getContentColumnType(): string
    {
        return $this->columnType;
    }

    /**
     * @inheritdoc
     */
    public function getInputHtml($value, ElementInterface $element = null): string
    {
        Craft::$app->getView()->registerAssetBundle(TimeFieldAssets::class);

        return Craft::$app->getView()->renderTemplate('timefield/input',
            [
                'name' => $this->handle,
                'value' => $value,
                'field' => $this,
            ]);
    }

    /**
     * @inheritdoc
     */
    public function serializeValue($value, ElementInterface $element = null)
    {
        if ($value !== null) {
            $value = LitEmoji::unicodeToShortcode($value);
        }

        return $value;
    }

    /**
     * @inheritdoc
     */
    public function getSearchKeywords($value, ElementInterface $element): string
    {
        $value = (string)$value;
        $value = LitEmoji::unicodeToShortcode($value);

        return $value;
    }
}
