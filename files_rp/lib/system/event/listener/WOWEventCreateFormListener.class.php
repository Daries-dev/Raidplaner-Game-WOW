<?php

namespace rp\system\event\listener;

use rp\event\event\EventCreateForm;
use wcf\system\form\builder\container\FormContainer;
use wcf\system\form\builder\field\IntegerFormField;

/**
 * Set condition for event form.
 * 
 * @author  Marco Daries
 * @copyright   2023-2024 Daries.dev
 * @license Raidplaner is licensed under Creative Commons Attribution-ShareAlike 4.0 International
 */
final class WOWEventCreateFormListener
{
    public function __invoke(EventCreateForm $eventForm)
    {
        if ($eventForm->eventController !== 'dev.daries.rp.event.controller.raid') return;

        /** @var FormContainer $conditionContainer */
        $conditionContainer = $eventForm->form->getNodeById('condition');
        $conditionContainer->appendChildren([
            IntegerFormField::create('requiredLevel')
                ->label('rp.character.wow.level')
                ->minimum(0)
                ->maximum(120)
                ->value(0),
        ]);
    }
}
