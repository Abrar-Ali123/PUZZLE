<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TimeHunter\LaravelGoogleReCaptchaV3\Validations\GoogleReCaptchaV3ValidationRule;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
      
        return [
            'name' => ['bail','required', 'string', 'max:255'],
            'email' => ['bail','required', 'string', 'max:255'],
            'subject' => ['bail','required', 'string', 'max:255'],
            'msg' => ['bail','required', 'string', 'max:255'],
            'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('captcha')],

        ];
    }
}
