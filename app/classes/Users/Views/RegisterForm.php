<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'vardas',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_no_space',
                            'validate_no_numeric',
                            'validate_string_lenght' => [
                                'max' => [
                                    'value' => 40,
                                    'message' => 'įvestas tekstas per ilgas',
                                ]
                            ]
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'pavardė',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_no_space',
                            'validate_string_lenght' => [
                                'max' => [
                                    'value' => 40,
                                    'message' => 'įvestas tekstas per ilgas',
                                ]
                            ]
                        ],
                    ],
                ],
                'email' => [
                    'label' => 'el. paštas',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_mail'
                        ]
                    ],
                ],
                'phone' => [
                    'label' => 'telefono numeris',
                    'type' => 'text',
//                    'extra' => [
//                        'validators' => [
//                            'validate_phone_number',
//                        ]
//                    ],
                ],
                'password' => [
                    'label' => 'slaptažodis',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Registruotis',
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }
}
