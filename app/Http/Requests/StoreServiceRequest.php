<?php

namespace App\Http\Requests;

use App\Models\Service;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_create');
    }

    public function rules()
    {
        return [
            'company_name_id' => [
                'required',
                'integer',
            ],
            'service_name'    => [
                'string',
                'required',
            ],
            'service_photo'   => [
                'required',
            ],
            'service_price'   => [
                'required',
            ],
            'description'     => [
                'required',
            ],
        ];
    }
}
