<?php
    $ron = ['name' => 'Ron Weasley', 'knuts' => 10, 'sickles' => 2, 'galleons' => 5];
    $ron['euros'] = 15;
    $knuts = $ron['knuts'];
    $knuts += $ron['sickles'] * 29;
    $knuts += $ron['galleons'] * 17 * 29;
    $knuts += $ron['euros'] * 61;
    echo $ron['name'].' possède l\'équivalent de '.$knuts.' noises';

    /* Ron possède 2 Mornille(sickles) */
    /* Ron possède 68 noises(Knuts) */
    /* En ajoutant 5 Gallions(galleons), Ron possède 2533 noises.
    /* En ajoutant 15 euros, Ron possède 3448 nioses.