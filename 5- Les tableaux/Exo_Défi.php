<?php
$student1 = [
  'fullName' => 'Hugo',
  'marks' => [
      [
          'name' => 'mathématiques',
          'values' => [18, 12, 14, 8, 16]
      ],
      [
          'name' => 'physique',
          'values' => [11, 9, 7, 14, 18]
      ],
  ]
];

$student2 = [
    'fullName' => 'Simone',
    'marks' => [
        [
            'name' => 'informatique',
            'values' => [12, 11, 12, 10, 17]
        ],
        [
            'name' => 'chimie',
            'values' => [12, 8, 18, 14, 11]
        ],
    ]
];

$result1 = [
  [
    'name' => $student1['marks'][0]['name'],
    'average' => array_sum($student1['marks'][0]['values'])/count($student1['marks'][0]['values'])
  ],
  [
    'name' => $student1['marks'][1]['name'],
    'average' => array_sum($student1['marks'][1]['values'])/count($student1['marks'][1]['values'])
  ]
];

$result2 = [
  [
    'name' => $student2['marks'][0]['name'],
    'average' => array_sum($student2['marks'][0]['values'])/count($student2['marks'][0]['values'])
  ],
  [
    'name' => $student2['marks'][1]['name'],
    'average' => array_sum($student2['marks'][1]['values'])/count($student2['marks'][1]['values'])
  ]
];

var_dump($result1,$result2);