<?php

namespace codemonauts\timefield;

use \craft\base\Plugin;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use yii\base\Event;
use codemonauts\timefield\fields\Time;

class TimeField extends Plugin
{
    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();

        Event::on(Fields::class, Fields::EVENT_REGISTER_FIELD_TYPES, function(RegisterComponentTypesEvent $event) {
            $event->types[] = Time::class;
        });
    }
}
