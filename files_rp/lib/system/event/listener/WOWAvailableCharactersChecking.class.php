<?php

namespace rp\system\event\listener;

use rp\data\character\CharacterProfile;
use rp\data\event\Event;
use rp\event\character\AvailableCharactersChecking;
use rp\system\character\AvailableCharacter;

/**
 * Creates the character equipment form.
 * 
 * @author  Marco Daries
 * @copyright   2023-2024 Daries.dev
 * @license Raidplaner is licensed under Creative Commons Attribution-ShareAlike 4.0 International
 */
final class WOWAvailableCharactersChecking
{
    public function __invoke(AvailableCharactersChecking $eventChecking)
    {
        /** @var Event $event */
        $event = $eventChecking->getEvent();

        /** @var CharacterProfile $character */
        foreach ($eventChecking->getCharacters() as $characterID => $character) {
            if ($event->requiredLevel !== 0 && $character->level < $event->requiredLevel) {
                continue;
            }

            $availableCharacter = new AvailableCharacter(
                $character->getObjectID(),
                $character->getTitle(),
                $character->raceID,
                $character->classificationID,
            );
            $eventChecking->setAvailableCharacter($character->getObjectID(), $availableCharacter);
        }
    }
}
