<?php

use rp\data\game\GameCache;
use rp\event\character\AvailableCharactersChecking;
use rp\event\character\CharacterAddCreateForm;
use rp\event\event\EventCreateForm;
use rp\event\raid\AddAttendeesChecking;
use rp\system\event\listener\DefaultAddAttendeesChecking;
use rp\system\event\listener\WOWAvailableCharactersChecking;
use rp\system\event\listener\WOWCharacterAddCreateFormListener;
use rp\system\event\listener\WOWEventCreateFormListener;
use wcf\system\event\EventHandler;

return static function (): void {
    if (GameCache::getInstance()->getCurrentGame()->identifier !== 'wow') return;

    $eventHandler = EventHandler::getInstance();

    $eventHandler->register(AddAttendeesChecking::class, DefaultAddAttendeesChecking::class);
    $eventHandler->register(AvailableCharactersChecking::class, WOWAvailableCharactersChecking::class);
    $eventHandler->register(CharacterAddCreateForm::class, WOWCharacterAddCreateFormListener::class);
    $eventHandler->register(EventCreateForm::class, WOWEventCreateFormListener::class);
};
