<?php

namespace App\Http\Requests;

use App\Models\Booking;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBookingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('booking_edit');
    }

    public function rules()
    {
        return [
            'company'          => [
                'string',
                'required',
            ],
            'order_type'       => [
                'string',
                'nullable',
            ],
            'customer'         => [
                'string',
                'nullable',
            ],
            'customer_phone'   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'status'           => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'description'      => [
                'string',
                'nullable',
            ],
            'location'         => [
                'string',
                'nullable',
            ],
            'customer_address' => [
                'string',
                'required',
            ],
        ];
    }
}
