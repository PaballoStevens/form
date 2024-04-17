<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class FormTest extends TestCase
{
    use RefreshDatabase;

    public function testFormValidation()
    {
        $validator = Validator::make([
            'name' => '',
            'email' => 'invalid-email',
            'message' => 'Enter your message',
        ], [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'message' => 'nullable|string',
        ]);

        $this->assertTrue($validator->fails());
    }

    public function testFormSubmission()
    {
        $response = $this->post('/form', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'Enter your message',
        ]);

        $response->assertRedirect('/thank-you');
    }
}
