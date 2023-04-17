<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Site Logo
        $logo_path = '/images/logo.png';
        $new_logo_path = '/images/logo_2.png';

        // Banner Section
        $banner = [
            'heading' => 'We Create & Supercharge Your <span class="primary-color">Business</span>',
            'subheading' => 'A digital agency that helps you bring your ideas to life',
            'buttonText' => 'LET\'S WORK TOGETHER',
            'buttonUrl' => '#',
            'image' => 'images/megaphone.png'
        ];

        // Below the banner Section
        $below_the_banner_boxes = [
            [
                'heading' => 'who we are',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur.',
                'buttonUrl' => '#',
                'buttonText' => 'Learn More'
            ],
            [
                'heading' => 'our services',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur.',
                'buttonUrl' => '#',
                'buttonText' => 'Learn More'
            ]
        ];

        // Feature Section
        $feature_boxes = [
            [
                'class' => 'branding-strategy-box',
                'heading' => 'BRANDING STRATEGY',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. '
            ],
            [
                'class' => 'web-platform-box',
                'heading' => 'Web PLATFORM',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. '
            ],
            [
                'class' => 'digital-marketing-box',
                'heading' => 'digital marketing',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. '
            ]
        ];

        // Why on point section
        $why_on_point = [
            'heading' => 'Why on Point?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper.',
            'boxes' => [
                [
                    'image' => 'images/icon_1.png',
                    'heading' => 'highly experienced',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur.',
                ],
                [
                    'image' => 'images/icon_2.png',
                    'heading' => 'amazing results',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. ',
                ],
                [
                    'image' => 'images/icon_3.png',
                    'heading' => 'effective solutions',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. ',
                ],

            ]
        ];

        // Our recent work section
        $our_recent_work = [
            'heading' => 'our recent work',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper.',
            'slider' => [
                [
                    'image' => 'images/recent_work_1.png',
                    'Label' => 'Slide 1'
                ],
                [
                    'image' => 'images/recent_work_2.png',
                    'Label' => 'Slide 2'
                ],
                [
                    'image' => 'images/recent_work_3.png',
                    'Label' => 'Slide 3'
                ],
                [
                    'image' => 'images/recent_work_4.png',
                    'Label' => 'Slide 4'
                ],
                [
                    'image' => 'images/recent_work_5.png',
                    'Label' => 'Slide 5'
                ]
            ]
        ];

        // People who trust us section
        $people_who_trust_us = [
            'heading' => 'people who trust us',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper.',
            'testimonials' => [
                [
                    'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. ',
                    'name' => 'ED CAGOCO'
                ],
                [
                    'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. ',
                    'name' => 'Olive Yew'
                ],
                [
                    'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. ',
                    'name' => 'Aida Bugg'
                ],
                [
                    'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. ',
                    'name' => 'Maureen Biologist'
                ],
                [
                    'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dignissim at dui a ullamcorper. Nulla laoreet in ante ac viverra. In cursus sed libero id consectetur. Etiam vitae elementum diam, vitae lobortis erat. ',
                    'name' => 'Peg Legge'
                ]
            ]
        ];


        // Companies we work with
        $companies_we_work_with = [
            'heading' => 'companies we work with',
            'description' => '',
            'company_logos' => [
                [
                    'image' => 'images/company_logo/company_1.png',
                    'label' => 'Company Logo 1'
                ],
                [
                    'image' => 'images/company_logo/company_2.png',
                    'label' => 'Company Logo 2'
                ],
                [
                    'image' => 'images/company_logo/company_3.png',
                    'label' => 'Company Logo 3'
                ],
                [
                    'image' => 'images/company_logo/company_4.png',
                    'label' => 'Company Logo 4'
                ],
                [
                    'image' => 'images/company_logo/company_5.png',
                    'label' => 'Company Logo 5'
                ],
                [
                    'image' => 'images/company_logo/company_6.png',
                    'label' => 'Company Logo 6'
                ],
                [
                    'image' => 'images/company_logo/company_7.png',
                    'label' => 'Company Logo 7'
                ],
                [
                    'image' => 'images/company_logo/company_8.png',
                    'label' => 'Company Logo 8'
                ],
                [
                    'image' => 'images/company_logo/company_9.png',
                    'label' => 'Company Logo 9'
                ],
                [
                    'image' => 'images/company_logo/company_10.png',
                    'label' => 'Company Logo 10'
                ],
                [
                    'image' => 'images/company_logo/company_11.png',
                    'label' => 'Company Logo 11'
                ],
                [
                    'image' => 'images/company_logo/company_12.png',
                    'label' => 'Company Logo 12'
                ],
                [
                    'image' => 'images/company_logo/company_13.png',
                    'label' => 'Company Logo 13'
                ],
                [
                    'image' => 'images/company_logo/company_14.png',
                    'label' => 'Company Logo 14'
                ],
                [
                    'image' => 'images/company_logo/company_15.png',
                    'label' => 'Company Logo 15'
                ],
                [
                    'image' => 'images/company_logo/company_16.png',
                    'label' => 'Company Logo 16'
                ],
                [
                    'image' => 'images/company_logo/company_17.png',
                    'label' => 'Company Logo 17'
                ]
            ]
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

        return view('pages.home', compact('logo_path', 'new_logo_path', 'below_the_banner_boxes', 'feature_boxes', 'banner', 'why_on_point', 'our_recent_work', 'people_who_trust_us', 'companies_we_work_with', 'frequently_asked_questions'));
    }
}
