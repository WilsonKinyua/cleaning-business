<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreSiteSetingRequest;
use App\Http\Requests\UpdateSiteSetingRequest;
use App\Http\Resources\Admin\SiteSetingResource;
use App\Models\SiteSeting;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteSetingsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('site_seting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SiteSetingResource(SiteSeting::all());
    }

    public function store(StoreSiteSetingRequest $request)
    {
        $siteSeting = SiteSeting::create($request->all());

        if ($request->input('logo', false)) {
            $siteSeting->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        return (new SiteSetingResource($siteSeting))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(SiteSeting $siteSeting)
    {
        abort_if(Gate::denies('site_seting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SiteSetingResource($siteSeting);
    }

    public function update(UpdateSiteSetingRequest $request, SiteSeting $siteSeting)
    {
        $siteSeting->update($request->all());

        if ($request->input('logo', false)) {
            if (!$siteSeting->logo || $request->input('logo') !== $siteSeting->logo->file_name) {
                if ($siteSeting->logo) {
                    $siteSeting->logo->delete();
                }

                $siteSeting->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($siteSeting->logo) {
            $siteSeting->logo->delete();
        }

        return (new SiteSetingResource($siteSeting))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(SiteSeting $siteSeting)
    {
        abort_if(Gate::denies('site_seting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteSeting->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
