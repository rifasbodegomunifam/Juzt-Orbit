<?php
return [
    'title' => 'Campos de Prueba',
    'slug' => 'test-fields',
    'location' => [
        [
            ['param' => 'post_type', 'operator' => '==', 'value' => 'post']
        ]
    ],
    'fields' => [
        'test_text' => [
            'type' => 'text',
            'label' => 'Campo de Texto',
            'required' => true,
            'validation' => [
                'min_length' => 3,
                'message' => 'Debe tener al menos 3 caracteres'
            ]
        ],
        'test_number' => [
            'type' => 'number',
            'label' => 'Campo Numérico',
            'validation' => [
                'min' => 0,
                'max' => 100
            ]
        ],
        'test_image' => [
            'type' => 'image',
            'label' => 'Campo Image'
        ]
    ]
];