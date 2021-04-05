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
                'title' => 'site_seting_create',
            ],
            [
                'id'    => 50,
                'title' => 'site_seting_edit',
            ],
            [
                'id'    => 51,
                'title' => 'site_seting_show',
            ],
            [
                'id'    => 52,
                'title' => 'site_seting_delete',
            ],
            [
                'id'    => 53,
                'title' => 'site_seting_access',
            ],
            [
                'id'    => 54,
                'title' => 'booking_show',
            ],
            [
                'id'    => 55,
                'title' => 'booking_access',
            ],
            [
                'id'    => 56,
                'title' => 'subscriber_show',
            ],
            [
                'id'    => 57,
                'title' => 'subscriber_access',
            ],
            [
                'id'    => 58,
                'title' => 'location_create',
            ],
            [
                'id'    => 59,
                'title' => 'location_edit',
            ],
            [
                'id'    => 60,
                'title' => 'location_show',
            ],
            [
                'id'    => 61,
                'title' => 'location_delete',
            ],
            [
                'id'    => 62,
                'title' => 'location_access',
            ],
            [
                'id'    => 63,
                'title' => 'review_show',
            ],
            [
                'id'    => 64,
                'title' => 'review_access',
            ],
            [
                'id'    => 65,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 66,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 67,
                'title' => 'new_company_show',
            ],
            [
                'id'    => 68,
                'title' => 'new_company_delete',
            ],
            [
                'id'    => 69,
                'title' => 'new_company_access',
            ],
            [
                'id'    => 70,
                'title' => 'site_access',
            ],
            [
                'id'    => 71,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 72,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 73,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 74,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 75,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 76,
                'title' => 'blog_create',
            ],
            [
                'id'    => 77,
                'title' => 'blog_edit',
            ],
            [
                'id'    => 78,
                'title' => 'blog_show',
            ],
            [
                'id'    => 79,
                'title' => 'blog_delete',
            ],
            [
                'id'    => 80,
                'title' => 'blog_access',
            ],
            [
                'id'    => 81,
                'title' => 'comment_show',
            ],
            [
                'id'    => 82,
                'title' => 'comment_delete',
            ],
            [
                'id'    => 83,
                'title' => 'comment_access',
            ],
            [
                'id'    => 84,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 85,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 86,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 87,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 88,
                'title' => 'service_create',
            ],
            [
                'id'    => 89,
                'title' => 'service_edit',
            ],
            [
                'id'    => 90,
                'title' => 'service_show',
            ],
            [
                'id'    => 91,
                'title' => 'service_delete',
            ],
            [
                'id'    => 92,
                'title' => 'service_access',
            ],
            [
                'id'    => 93,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
