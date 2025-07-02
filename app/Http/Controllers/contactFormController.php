<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Services\ContactFormService;
use Illuminate\Http\JsonResponse;

class ContactFormController extends Controller
{
    protected $contactFormService;

    public function __construct(ContactFormService $contactFormService)
    {
        $this->contactFormService = $contactFormService;
    }

    public function store(ContactFormRequest $request): JsonResponse
    {
        $result = $this->contactFormService->sendContactEmail($request->validated());

        if ($result['success']) {
            return response()->json([
                'message' => $result['message']
            ], 200);
        }

        return response()->json([
            'message' => $result['message']
        ], 500);
    }
}