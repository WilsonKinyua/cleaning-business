<?php

namespace App\Http\Requests;

use App\Models\SiteSeting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroySiteSetingRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('site_seting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:site_setings,id',
        ];
    }
}
