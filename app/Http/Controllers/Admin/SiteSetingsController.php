<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySiteSetingRequest;
use App\Http\Requests\StoreSiteSetingRequest;
use App\Http\Requests\UpdateSiteSetingRequest;
use App\Models\SiteSeting;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SiteSetingsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('site_seting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteSetings = SiteSeting::with(['media'])->get();

        return view('admin.siteSetings.index', compact('siteSetings'));
    }

    public function create()
    {
        abort_if(Gate::denies('site_seting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.siteSetings.create');
    }

    public function store(StoreSiteSetingRequest $request)
    {
        $siteSeting = SiteSeting::create($request->all());

        if ($request->input('logo', false)) {
            $siteSeting->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $siteSeting->id]);
        }

        return redirect()->route('admin.site-setings.index');
    }

    public function edit(SiteSeting $siteSeting)
    {
        abort_if(Gate::denies('site_seting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.siteSetings.edit', compact('siteSeting'));
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

        return redirect()->route('admin.site-setings.index');
    }

    public function show(SiteSeting $siteSeting)
    {
        abort_if(Gate::denies('site_seting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.siteSetings.show', compact('siteSeting'));
    }

    public function destroy(SiteSeting $siteSeting)
    {
        abort_if(Gate::denies('site_seting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteSeting->delete();

        return back();
    }

    public function massDestroy(MassDestroySiteSetingRequest $request)
    {
        SiteSeting::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('site_seting_create') && Gate::denies('site_seting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new SiteSeting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
