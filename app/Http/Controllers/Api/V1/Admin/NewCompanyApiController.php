<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\NewCompanyResource;
use App\Models\NewCompany;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewCompanyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('new_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewCompanyResource(NewCompany::all());
    }

    public function show(NewCompany $newCompany)
    {
        abort_if(Gate::denies('new_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewCompanyResource($newCompany);
    }

    public function destroy(NewCompany $newCompany)
    {
        abort_if(Gate::denies('new_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newCompany->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
