<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class ContactFormService
{
    public function sendContactEmail(array $contactData)
    {
        try {
            // Send email
            Mail::to(config('mail.contact_email', 'susantodika123@gmail.com'))
                ->send(new ContactFormMail($contactData));

            Log::info('Contact form submitted', [
                'name' => $contactData['name'],
                'email' => $contactData['email'],
                'subject' => $contactData['subject']
            ]);

            return [
                'success' => true,
                'message' => 'Message sent successfully! I\'ll get back to you soon.'
            ];

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return [
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again later.'
            ];
        }
    }
}