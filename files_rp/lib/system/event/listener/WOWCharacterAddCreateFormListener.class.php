<?php

namespace rp\system\event\listener;

use rp\data\classification\ClassificationCache;
use rp\data\race\RaceCache;
use rp\data\server\ServerCache;
use rp\data\skill\SkillCache;
use rp\event\character\CharacterAddCreateForm;
use rp\system\form\builder\field\DynamicSelectFormField;
use wcf\system\form\builder\field\IntegerFormField;
use wcf\system\form\builder\field\SingleSelectionFormField;
use wcf\system\form\builder\field\validation\FormFieldValidationError;
use wcf\system\form\builder\field\validation\FormFieldValidator;

/**
 * Creates the character equipment form.
 * 
 * @author  Marco Daries
 * @copyright   2023-2024 Daries.dev
 * @license Raidplaner is licensed under Creative Commons Attribution-ShareAlike 4.0 International
 */
final class WOWCharacterAddCreateFormListener
{
    public function __invoke(CharacterAddCreateForm $event)
    {
        $section = $event->form->getNodeById('characterGeneralSection');
        $section->appendChildren([
            SingleSelectionFormField::create('raceID')
                ->label('rp.race.title')
                ->required()
                ->options(['' => 'wcf.global.noSelection'] + RaceCache::getInstance()->getRaces())
                ->addValidator(new FormFieldValidator('check', function (SingleSelectionFormField $formField) {
                    $value = $formField->getSaveValue();

                    if (empty($value)) {
                        $formField->addValidationError(new FormFieldValidationError('empty'));
                    }
                })),
            DynamicSelectFormField::create('classificationID')
                ->label('rp.classification.title')
                ->required()
                ->options(ClassificationCache::getInstance()->getClassifications())
                ->triggerSelect('raceID')
                ->optionsMapping(static function () {
                    $races = ClassificationCache::getInstance()->getClassificationRaces();

                    $mapping = \array_reduce(\array_keys($races), function ($carry, $classificationID) use ($races) {
                        foreach ($races[$classificationID] as $raceID) {
                            $carry[$raceID][] = $classificationID;
                        }
                        return $carry;
                    }, []);

                    return $mapping;
                })
                ->addValidator(new FormFieldValidator('check', function (SingleSelectionFormField $formField) {
                    $value = $formField->getSaveValue();

                    if (empty($value)) {
                        $formField->addValidationError(new FormFieldValidationError('empty'));
                    }
                })),
            DynamicSelectFormField::create('talent1')
                ->label('rp.character.wow.talent.primary')
                ->required()
                ->options(SkillCache::getInstance()->getSkills())
                ->triggerSelect('classificationID')
                ->optionsMapping(ClassificationCache::getInstance()->getClassificationSkills())
                ->addValidator(new FormFieldValidator('check', function (SingleSelectionFormField $formField) {
                    $value = $formField->getSaveValue();

                    if (empty($value)) {
                        $formField->addValidationError(new FormFieldValidationError('empty'));
                    }
                })),
            DynamicSelectFormField::create('talent2')
                ->label('rp.character.wow.talent.secondary')
                ->nullable()
                ->options(SkillCache::getInstance()->getSkills())
                ->triggerSelect('classificationID')
                ->optionsMapping(ClassificationCache::getInstance()->getClassificationSkills()),
            IntegerFormField::create('level')
                ->label('rp.character.wow.level')
                ->required()
                ->minimum(1)
                ->maximum(80)
                ->value(0),
            SingleSelectionFormField::create('serverID')
                ->label('rp.server.title')
                ->options(['' => 'wcf.global.noSelection'] + ServerCache::getInstance()->getServers())
                ->nullable(),
        ]);
    }
}
