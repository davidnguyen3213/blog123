<?php

namespace App\Http\Requests;

use App\Http\Requests\Traits\UsesCustomErrorMessage;
use Illuminate\Foundation\Http\FormRequest;


class RequestCompanyOrderRequest extends FormRequest
{
    use UsesCustomErrorMessage;

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
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required',
            'request_id' => 'required',
            'company_id' => 'required',
            'device_token' => 'required',
        ];
    }
}