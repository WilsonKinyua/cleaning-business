<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public $sources = [
        [
            'model'      => '\App\Models\Booking',
            'date_field' => 'created_at',
            'field'      => 'customer',
            'prefix'     => 'Customer',
            'suffix'     => '',
            'route'      => 'admin.bookings.edit',
        ],
        [
            'model'      => '\App\Models\NewCompany',
            'date_field' => 'created_at',
            'field'      => 'business_name',
            'prefix'     => 'New Applications(Company)',
            'suffix'     => 'Applied',
            'route'      => 'admin.new-companies.edit',
        ],
    ];

    public function index()
    {
        $events = [];

        foreach ($this->sources as $source) {
            foreach ($source['model']::all() as $model) {
                $crudFieldValue = $model->getAttributes()[$source['date_field']];

                if (!$crudFieldValue) {
                    continue;
                }

                $events[] = [
                    'title' => trim($source['prefix'] . " " . $model->{$source['field']}
                        . " " . $source['suffix']),
                    'start' => $crudFieldValue,
                    'url'   => route($source['route'], $model->id),
                ];
            }
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
