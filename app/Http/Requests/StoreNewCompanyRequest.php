<?php

namespace App\Http\Requests;

use App\Models\NewCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNewCompanyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('new_company_create');
    }

    public function rules()
    {
        return [
            'business_name' => [
                'string',
                'required',
            ],
            'email'         => [
                'required',
            ],
            'address'       => [
                'string',
                'required',
            ],
            'city'          => [
                'string',
                'required',
            ],
            'country'       => [
                'string',
                'required',
            ],
            'services'      => [
                'required',
            ],
        ];
    }
}
