<?php

/**
 * @author  Marco Daries
 * @copyright   2023-2024 Daries.dev
 * @license Raidplaner is licensed under Creative Commons Attribution-ShareAlike 4.0 International
 */

use rp\data\game\GameCache;
use rp\util\RPGameInstall;

$gameID = GameCache::getInstance()->getGameByIdentifier('wow')?->gameID;
$packageID = $this->installation->getPackageID();

// Battle for Azeroth
$battleForAzeroth = [
    [
        'title' => [
            'de' => 'Uldir Normal',
            'en' => 'Uldir Normal',
        ],
        'icon' => 'uldir',
    ],
    [
        'title' => [
            'de' => 'Uldir Heroisch',
            'en' => 'Uldir Heroic',
        ],
        'icon' => 'uldir',
    ],
    [
        'title' => [
            'de' => 'Uldir Mythisch (20)',
            'en' => 'Uldir Mythic (20)',
        ],
        'icon' => 'uldir',
    ],
    [
        'title' => [
            'de' => "Schlacht um Dazar'alor Normal",
            'en' => "Battle of Dazar'alor Normal",
        ],
        'icon' => 'bod',
    ],
    [
        'title' => [
            'de' => "Schlacht um Dazar'alor Heroisch",
            'en' => "Battle of Dazar'alor Heroic",
        ],
        'icon' => 'bod',
    ],
    [
        'title' => [
            'de' => "Schlacht um Dazar'alor Mythisch (20)",
            'en' => "Battle of Dazar'alor Mythic (20)",
        ],
        'icon' => 'bod',
    ],
    [
        'title' => [
            'de' => 'Tiegel der Stürme Normal',
            'en' => 'Crucible of Storms Normal',
        ],
        'icon' => 'cos',
    ],
    [
        'title' => [
            'de' => 'Tiegel der Stürme Heroisch',
            'en' => 'Crucible of Storms Heroic',
        ],
        'icon' => 'cos',
    ],
    [
        'title' => [
            'de' => 'Tiegel der Stürme Mythisch (20)',
            'en' => 'Crucible of Storms Mythic (20)',
        ],
        'icon' => 'cos',
    ],
    [
        'title' => [
            'de' => 'Der Ewige Palast Normal',
            'en' => 'The Eternal Palace Normal',
        ],
        'icon' => 'tep',
    ],
    [
        'title' => [
            'de' => 'Der Ewige Palast Heroisch',
            'en' => 'The Eternal Palace Heroic',
        ],
        'icon' => 'tep',
    ],
    [
        'title' => [
            'de' => 'Der Ewige Palast Mythisch (20)',
            'en' => 'The Eternal Palace Mythic (20)',
        ],
        'icon' => 'tep',
    ],
    [
        'title' => [
            'de' => "Ny'alotha, die Erwachte Stadt Normal",
            'en' => "Ny'alotha, the Waking City Normal",
        ],
        'icon' => 'twc',
    ],
    [
        'title' => [
            'de' => "Ny'alotha, die Erwachte Stadt Heroisch",
            'en' => "Ny'alotha, the Waking City Heroic",
        ],
        'icon' => 'twc',
    ],
    [
        'title' => [
            'de' => "Ny'alotha, die Erwachte Stadt Mythisch (20)",
            'en' => "Ny'alotha, the Waking City Mythic (20)",
        ],
        'icon' => 'twc',
    ],
];

(new RPGameInstall(
    $gameID,
    'Battle for Azeroth',
    $battleForAzeroth,
    $packageID
))->install();

// Legion
$legion = [
    [
        'title' => [
            'de' => 'Smaragdgrüner Albtraum Normal',
            'en' => 'Emerald Nightmare Normal',
        ],
        'icon' => 'en',
    ],
    [
        'title' => [
            'de' => 'Smaragdgrüner Albtraum Heroisch',
            'en' => 'Emerald Nightmare Heroic',
        ],
        'icon' => 'en',
    ],
    [
        'title' => [
            'de' => 'Smaragdgrüner Albtraum Mythisch (20)',
            'en' => 'Emerald Nightmare Mythic (20)',
        ],
        'icon' => 'en',
    ],
    [
        'title' => [
            'de' => 'Die Nachtfestung Normal',
            'en' => 'Nighthold Normal',
        ],
        'icon' => 'nh',
    ],
    [
        'title' => [
            'de' => 'Die Nachtfestung Heroisch',
            'en' => 'Nighthold Heroic',
        ],
        'icon' => 'nh',
    ],
    [
        'title' => [
            'de' => 'Die Nachtfestung Mythisch (20)',
            'en' => 'Nighthold Mythic (20)',
        ],
        'icon' => 'nh',
    ],
    [
        'title' => [
            'de' => 'Die Prüfung der Tapferkeit Normal',
            'en' => 'Trials of Valor Normal',
        ],
        'icon' => 'tov',
    ],
    [
        'title' => [
            'de' => 'Die Prüfung der Tapferkeit Heroisch',
            'en' => 'Trials of Valor Heroic',
        ],
        'icon' => 'tov',
    ],
    [
        'title' => [
            'de' => 'Die Prüfung der Tapferkeit Mythisch (20)',
            'en' => 'Trials of Valor Mythic (20)',
        ],
        'icon' => 'tov',
    ],
    [
        'title' => [
            'de' => 'Grabmal des Sargeras Normal',
            'en' => 'Tomb of Sargeras Normal',
        ],
        'icon' => 'tos',
    ],
    [
        'title' => [
            'de' => 'Grabmal des Sargeras Heroisch',
            'en' => 'Tomb of Sargeras Heroic',
        ],
        'icon' => 'tos',
    ],
    [
        'title' => [
            'de' => 'Grabmal des Sargeras Mythisch (20)',
            'en' => 'Tomb of Sargeras Mythic (20)',
        ],
        'icon' => 'tos',
    ],
    [
        'title' => [
            'de' => 'Antorus, der Brennende Thron Normal',
            'en' => 'Antorus, The Burning Throne Normal',
        ],
        'icon' => 'atbt',
    ],
    [
        'title' => [
            'de' => 'Antorus, der Brennende Thron Heroisch',
            'en' => 'Antorus, The Burning Throne Heroic',
        ],
        'icon' => 'atbt',
    ],
    [
        'title' => [
            'de' => 'Antorus, der Brennende Thron Mythisch (20)',
            'en' => 'Antorus, The Burning Throne Mythic (20)',
        ],
        'icon' => 'atbt',
    ],
];

(new RPGameInstall(
    $gameID,
    'Legion',
    $legion,
    $packageID
))->install();

// WoD
$wod = [
    [
        'title' => [
            'de' => 'Hochfels Normal',
            'en' => 'Highmaul Normal',
        ],
        'icon' => 'hm',
    ],
    [
        'title' => [
            'de' => 'Hochfels Heroisch',
            'en' => 'Highmaul Heroic',
        ],
        'icon' => 'hm',
    ],
    [
        'title' => [
            'de' => 'Hochfels Mystisch (20)',
            'en' => 'Highmaul Mythic (20)',
        ],
        'icon' => 'hm',
    ],
    [
        'title' => [
            'de' => 'Schwarzfelsgießerei Normal',
            'en' => 'Blackrock Foundry Normal',
        ],
        'icon' => 'brf',
    ],
    [
        'title' => [
            'de' => 'Schwarzfelsgießerei Heroisch',
            'en' => 'Blackrock Foundry Heroic',
        ],
        'icon' => 'brf',
    ],
    [
        'title' => [
            'de' => 'Schwarzfelsgießerei Mythisch (20)',
            'en' => 'Blackrock Foundry Mythic (20)',
        ],
        'icon' => 'brf',
    ],
];

(new RPGameInstall(
    $gameID,
    'WoD',
    $wod,
    $packageID
))->install();

// Mop
$mop = [
    [
        'title' => [
            'de' => "Mogu'shangewölbe (10)",
            'en' => "Mogu'shan Vaults (10)",
        ],
        'icon' => 'mv',
    ],
    [
        'title' => [
            'de' => "Mogu'shangewölbe (25)",
            'en' => "Mogu'shan Vaults (25)",
        ],
        'icon' => 'mv',
    ],
    [
        'title' => [
            'de' => 'Das Herz der Angst (10)',
            'en' => 'Heart of Fear (10)',
        ],
        'icon' => 'hf',
    ],
    [
        'title' => [
            'de' => 'Das Herz der Angst (25)',
            'en' => 'Heart of Fear (25)',
        ],
        'icon' => 'hf',
    ],
    [
        'title' => [
            'de' => 'Terrasse des Endlosen Frühlings (10)',
            'en' => 'Terrace of Endless Spring (10)',
        ],
        'icon' => 'tes',
    ],
    [
        'title' => [
            'de' => 'Terrasse des Endlosen Frühlings (25)',
            'en' => 'Terrace of Endless Spring (25)',
        ],
        'icon' => 'tes',
    ],
    [
        'title' => [
            'de' => 'Thron des Donners (10)',
            'en' => 'Throne of Thunder (10)',
        ],
        'icon' => 'tot',
    ],
    [
        'title' => [
            'de' => 'Thron des Donners (25)',
            'en' => 'Throne of Thunder (25)',
        ],
        'icon' => 'tot',
    ],
    [
        'title' => [
            'de' => 'Schlacht um Orgrimmar',
            'en' => 'Siege of Orgrimma',
        ],
        'icon' => 'soo',
    ],
];

(new RPGameInstall(
    $gameID,
    'Mop',
    $mop,
    $packageID
))->install();

// Classic
$classic = [
    [
        'title' => [
            'de' => 'Wrath of the Lich King',
            'en' => 'Wrath of the Lich King',
        ],
        'icon' => 'wotlk',
    ],
    [
        'title' => [
            'de' => 'Cataclysm',
            'en' => 'Cataclysm',
        ],
        'icon' => 'cata',
    ],
    [
        'title' => [
            'de' => 'Burning Crusade',
            'en' => 'Burning Crusade',
        ],
        'icon' => 'bc',
    ],
    [
        'title' => [
            'de' => 'Classic',
            'en' => 'Classic',
        ],
        'icon' => 'classic',
    ],
    [
        'title' => [
            'de' => 'Mists of Pandaria',
            'en' => 'Mists of Pandaria',
        ],
        'icon' => 'mop',
    ],
];

(new RPGameInstall(
    $gameID,
    'Classic',
    $classic,
    $packageID
))->install();
