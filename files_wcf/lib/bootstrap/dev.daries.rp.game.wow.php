<?php

use rp\data\game\GameCache;
use rp\event\character\CharacterAddCreateForm;
use rp\system\event\listener\WOWCharacterAddCreateFormListener;
use wcf\system\event\EventHandler;

return static function (): void {
    if (GameCache::getInstance()->getCurrentGame()->identifier !== 'wow') return;

    $eventHandler = EventHandler::getInstance();

    $eventHandler->register(CharacterAddCreateForm::class, WOWCharacterAddCreateFormListener::class);
};
