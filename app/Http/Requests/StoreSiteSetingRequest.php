<?php

namespace App\Http\Requests;

use App\Models\SiteSeting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSiteSetingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('site_seting_create');
    }

    public function rules()
    {
        return [
            'name'      => [
                'string',
                'required',
            ],
            'logo'      => [
                'required',
            ],
            'email'     => [
                'required',
            ],
            'phone'     => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'location'  => [
                'string',
                'required',
            ],
            'caption'   => [
                'string',
                'required',
            ],
            'facebook'  => [
                'string',
                'nullable',
            ],
            'twitter'   => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'linkedin'  => [
                'string',
                'nullable',
            ],
            'youtube'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
