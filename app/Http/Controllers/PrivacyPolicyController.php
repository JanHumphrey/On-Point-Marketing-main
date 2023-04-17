<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        // Site Logo
        $logo_path = '/images/logo.png';
        $new_logo_path = '/images/logo_2.png';

        // banner contact
        $banner_pages = [
            'heading' => 'privacy policy',
        ];

        // Main Content
        $main_content = [
            'main-content' => [
                [
                    'description' => 'This privacy policy explains how we collect, use, and protect your personal information when you use our website.',
                ],
                [
                    'heading' => 'Information We Collect',
                    'description' => 'We may collect personal information from you, such as your name, email address, and other contact information when you sign up for our newsletter, fill out a form, or otherwise provide us with your personal information. We may also collect non-personal information such as your IP address, browser type, and the pages you visit on our website.',
                ],
                [
                    'heading' => 'How Re Use Your information',
                    'description' => 'We may use the personal information you provide to us to communicate with you, respond to your inquiries, and send you newsletters or other marketing materials. We may also use your information to improve our website and to personalize your experience. We may also use cookies or similar technologies to collect information about your browsing behavior and to serve personalized advertisements on our website and on other websites you visit.',
                ],
                [
                    'heading' => 'How We Protect Your Information',
                    'description' => 'We take reasonable steps to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet, or method of electronic storage, is completely secure. Therefore, we cannot guarantee the absolute security of your personal information.',
                ],
                [
                    'heading' => 'Sharing Your Information',
                    'description' => 'We may share your personal information with third-party service providers who assist us with the operation of our website and the provision of our services. We may also share your information with our advertising partners to serve personalized advertisements on our website and on other websites you visit.',
                ],
                [
                    'heading' => 'Your Rights',
                    'description' => 'You have the right to request access to and rectification or erasure of your personal information. You also have the right to object to the processing of your personal information or to request that we restrict the processing of your personal information. To exercise these rights, please contact us using the information below.',
                ],
                [
                    'heading' => 'Changes To This Privacy Policy',
                    'description' => 'We may update this privacy policy from time to time to reflect changes in our practices or to comply with legal requirements. If we make any material changes to this privacy policy, we will notify you by email (if we have your email address) or by posting the updated policy on our website.',
                ],
                [
                    'heading' => 'Contact Us',
                    'description' => 'If you have any questions or concerns about this privacy policy, or if you would like to exercise your rights as described above, please contact us at info@opmarketing.com.au.',
                ],
                [
                    'description' => 'By using our website, you consent to our privacy policy.',
                ],
            ]
        ];

        return view('pages.privacy-policy', compact('logo_path', 'new_logo_path','banner_pages', 'main_content'));
    }
}
