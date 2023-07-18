<?php
    $teams = [
        [
            'name' => 'Golden Guardians', 
            'members' => [
                ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
                ['firstName' => 'Can', 'lastName' => 'Çelik'],
                ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
                ['firstName' => 'Victor', 'lastName' => 'Huang'],
                ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],  
                ['firstName' => 'Yuri', 'lastName' => 'Jew'], 
            ]
        ],
        [
            'name' => 'Immortals', 
            'members' => [
                ['firstName' => 'Paul', 'lastName' => 'Boyer'],
                ['firstName' => 'Jake', 'lastName' => 'Puchero'],
                ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
                ['firstName' => 'Johnny', 'lastName' => 'Ru'],
                ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],  
            ]
        ],
    ];

    echo $teams[0]['name'];
    echo '<br>';
    echo 'MR ' .$teams[1]['members'][0]['lastName'];

    $teams[0]['coach'] = ['firstName' => 'Nick', 'lastName' => 'Smith'];
    $teams[1]['coach'] = ['firstName' => 'Thomas', 'lastName' => 'Si-Hassen'];
    echo '<br>';
    echo $teams[0]['coach']['lastName'].'<br>'.$teams[1]['coach']['lastName'];
