<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNewCompanyRequest;
use App\Models\NewCompany;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewCompanyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('new_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newCompanies = NewCompany::all();

        return view('admin.newCompanies.index', compact('newCompanies'));
    }

    public function show(NewCompany $newCompany)
    {
        abort_if(Gate::denies('new_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newCompanies.show', compact('newCompany'));
    }

    public function destroy(NewCompany $newCompany)
    {
        abort_if(Gate::denies('new_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newCompany->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewCompanyRequest $request)
    {
        NewCompany::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
