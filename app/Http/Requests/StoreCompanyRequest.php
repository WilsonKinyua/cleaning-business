<?php

namespace App\Http\Requests;

use App\Models\Company;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_create');
    }

    public function rules()
    {
        return [
            'name'            => [
                'string',
                'required',
            ],
            'open_hours'      => [
                'required',
            ],
            'support_email_1' => [
                'required',
            ],
            'support_phone_1' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'support_phone_2' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'address_line'    => [
                'string',
                'nullable',
            ],
            'description'     => [
                'required',
            ],
            'logo'            => [
                'required',
            ],
        ];
    }
}
