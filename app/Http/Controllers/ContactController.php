<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        // Site Logo
        $logo_path = '/images/logo.png';
        $new_logo_path = '/images/logo_2.png';

          // banner contact
        $banner_pages = [
            'heading' => 'work with us',
        ];
 
        // Frequently asked questions
        $frequently_asked_questions = [
            'heading' => 'frequent asked questions',
            'description' => '',
            'frequently_asked_questions_1' =>
            [
                'question_1' => [
                    [
                        'question' => 'Lorem ipsum dolor sit amet 1?',
                        'answer_heading' => 'Vestibulum dignissim at dui?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. Mauris ut enim id neque rhoncus hendrerit vel id arcu. Curabitur hendrerit gravida purus. Duis tristique nisi enim, quis maximus nunc ullamcorper ut. Vestibulum consectetur rutrum mi. Maecenas in mauris et nibh dapibus euismod.'
                    ]
                ],
                'question_2' => [
                    [
                        'question' => 'consectetur adipiscing elit?',
                        'answer_heading' => 'Vestibulum dignissim at bb?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. Mauris ut enim id neque rhoncus hendrerit vel id arcu. Curabitur hendrerit gravida purus. Duis tristique nisi enim, quis maximus nunc ullamcorper ut. Vestibulum consectetur rutrum mi. Maecenas in mauris et nibh dapibus euismod.'
                    ]
                ],
                'question_3' => [
                    [
                        'question' => 'Vestibulum dignissim at duia?',
                        'answer_heading' => 'Vestibulum dignissim at gg?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. Mauris ut enim id neque rhoncus hendrerit vel id arcu. Curabitur hendrerit gravida purus. Duis tristique nisi enim, quis maximus nunc ullamcorper ut. Vestibulum consectetur rutrum mi. Maecenas in mauris et nibh dapibus euismod.'
                    ]
                ],
                'question_4' => [
                    [
                        'question' => 'Nulla laoreet in ante ac viverra?',
                        'answer_heading' => 'Vestibulum dignissim at ad?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. Mauris ut enim id neque rhoncus hendrerit vel id arcu. Curabitur hendrerit gravida purus. Duis tristique nisi enim, quis maximus nunc ullamcorper ut. Vestibulum consectetur rutrum mi. Maecenas in mauris et nibh dapibus euismod.'
                    ]
                ],
                'question_5' => [
                    [
                        'question' => 'In cursus sed libero id consectetur?',
                        'answer_heading' => 'Vestibulum dignissim at ss?',
                        'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. Mauris ut enim id neque rhoncus hendrerit vel id arcu. Curabitur hendrerit gravida purus. Duis tristique nisi enim, quis maximus nunc ullamcorper ut. Vestibulum consectetur rutrum mi. Maecenas in mauris et nibh dapibus euismod.'
                    ]
                ]
            ]

        ];

        return view('pages.contact', compact('logo_path', 'new_logo_path','banner_pages', 'frequently_asked_questions'));
    }
}
