<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'company_create',
            ],
            [
                'id'    => 39,
                'title' => 'company_edit',
            ],
            [
                'id'    => 40,
                'title' => 'company_show',
            ],
            [
                'id'    => 41,
                'title' => 'company_delete',
            ],
            [
                'id'    => 42,
                'title' => 'company_access',
            ],
            [
                'id'    => 43,
                'title' => 'setting_access',
            ],
            [
                'id'    => 44,
                'title' => 'category_create',
            ],
            [
                'id'    => 45,
                'title' => 'category_edit',
            ],
            [
                'id'    => 46,
                'title' => 'category_show',
            ],
            [
                'id'    => 47,
                'title' => 'category_delete',
            ],
            [
                'id'    => 48,
                'title' => 'category_access',
            ],
            [
                'id'    => 49,
                'title' => 'service_create',
            ],
            [
                'id'    => 50,
                'title' => 'service_edit',
            ],
            [
                'id'    => 51,
                'title' => 'service_show',
            ],
            [
                'id'    => 52,
                'title' => 'service_delete',
            ],
            [
                'id'    => 53,
                'title' => 'service_access',
            ],
            [
                'id'    => 54,
                'title' => 'site_seting_create',
            ],
            [
                'id'    => 55,
                'title' => 'site_seting_edit',
            ],
            [
                'id'    => 56,
                'title' => 'site_seting_show',
            ],
            [
                'id'    => 57,
                'title' => 'site_seting_delete',
            ],
            [
                'id'    => 58,
                'title' => 'site_seting_access',
            ],
            [
                'id'    => 59,
                'title' => 'booking_show',
            ],
            [
                'id'    => 60,
                'title' => 'booking_access',
            ],
            [
                'id'    => 61,
                'title' => 'subscriber_show',
            ],
            [
                'id'    => 62,
                'title' => 'subscriber_access',
            ],
            [
                'id'    => 63,
                'title' => 'location_create',
            ],
            [
                'id'    => 64,
                'title' => 'location_edit',
            ],
            [
                'id'    => 65,
                'title' => 'location_show',
            ],
            [
                'id'    => 66,
                'title' => 'location_delete',
            ],
            [
                'id'    => 67,
                'title' => 'location_access',
            ],
            [
                'id'    => 68,
                'title' => 'review_show',
            ],
            [
                'id'    => 69,
                'title' => 'review_access',
            ],
            [
                'id'    => 70,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
