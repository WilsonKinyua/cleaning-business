<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'permission'     => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'أدوار',
        'title_singular' => 'دور',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'address'                   => 'Address',
            'address_helper'            => ' ',
            'city'                      => 'City',
            'city_helper'               => ' ',
            'country'                   => 'Country',
            'country_helper'            => ' ',
            'profile_photo'             => 'Profile Photo',
            'profile_photo_helper'      => ' ',
            'description'               => 'Description',
            'description_helper'        => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
        ],
    ],
    'basicCRM'       => [
        'title'          => 'Basic CRM',
        'title_singular' => 'Basic CRM',
    ],
    'crmStatus'      => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'crmCustomer'    => [
        'title'          => 'Customers',
        'title_singular' => 'Customer',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'first_name'         => 'First name',
            'first_name_helper'  => ' ',
            'last_name'          => 'Last name',
            'last_name_helper'   => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'email'              => 'Email',
            'email_helper'       => ' ',
            'phone'              => 'Phone',
            'phone_helper'       => ' ',
            'address'            => 'Address',
            'address_helper'     => ' ',
            'skype'              => 'Skype',
            'skype_helper'       => ' ',
            'website'            => 'Website',
            'website_helper'     => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'crmNote'        => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'note'              => 'Note',
            'note_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'crmDocument'    => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'customer'             => 'Customer',
            'customer_helper'      => ' ',
            'document_file'        => 'File',
            'document_file_helper' => ' ',
            'name'                 => 'Document name',
            'name_helper'          => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'company'        => [
        'title'          => 'Companies',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'open_hours'             => 'Open Hours(Monday - Sunday)',
            'open_hours_helper'      => ' ',
            'logo'                   => 'Logo',
            'logo_helper'            => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'support_email_1'        => 'Support Email 1',
            'support_email_1_helper' => ' ',
            'support_email_2'        => 'Support Email 2',
            'support_email_2_helper' => ' ',
            'support_phone_1'        => 'Support Phone 1',
            'support_phone_1_helper' => ' ',
            'support_phone_2'        => 'Support Phone 2',
            'support_phone_2_helper' => ' ',
            'address_line'           => 'Address Line',
            'address_line_helper'    => ' ',
            'city'                   => 'City',
            'city_helper'            => ' ',
            'country'                => 'Country',
            'country_helper'         => ' ',
        ],
    ],
    'setting'        => [
        'title'          => 'Company Settings',
        'title_singular' => 'Company Setting',
    ],
    'category'       => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'siteSeting'     => [
        'title'          => 'Site Setings',
        'title_singular' => 'Site Seting',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'logo'              => 'Logo',
            'logo_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'location'          => 'Location',
            'location_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'caption'           => 'Caption',
            'caption_helper'    => ' ',
            'facebook'          => 'Facebook',
            'facebook_helper'   => ' ',
            'twitter'           => 'Twitter',
            'twitter_helper'    => ' ',
            'instagram'         => 'Instagram',
            'instagram_helper'  => ' ',
            'linkedin'          => 'Linkedin',
            'linkedin_helper'   => ' ',
            'youtube'           => 'Youtube',
            'youtube_helper'    => ' ',
        ],
    ],
    'booking'        => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'company'                 => 'Company',
            'company_helper'          => ' ',
            'order_type'              => 'Order Type',
            'order_type_helper'       => ' ',
            'customer'                => 'Customer',
            'customer_helper'         => ' ',
            'customer_phone'          => 'Customer Phone',
            'customer_phone_helper'   => ' ',
            'status'                  => 'Status',
            'status_helper'           => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'description'             => 'Description',
            'description_helper'      => ' ',
            'location'                => 'Location',
            'location_helper'         => ' ',
            'customer_email'          => 'Customer Email',
            'customer_email_helper'   => ' ',
            'customer_address'        => 'Customer Address',
            'customer_address_helper' => ' ',
        ],
    ],
    'subscriber'     => [
        'title'          => 'Subscribers',
        'title_singular' => 'Subscriber',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'location'       => [
        'title'          => 'Locations',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'city'              => 'City',
            'city_helper'       => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
        ],
    ],
    'review'         => [
        'title'          => 'Reviews',
        'title_singular' => 'Review',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'company'           => 'Company',
            'company_helper'    => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
            'review'            => 'Review',
            'review_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'newCompany'     => [
        'title'          => 'New Company',
        'title_singular' => 'New Company',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'business_name'        => 'Business Name',
            'business_name_helper' => ' ',
            'email'                => 'Email',
            'email_helper'         => ' ',
            'address'              => 'Address',
            'address_helper'       => ' ',
            'city'                 => 'City',
            'city_helper'          => ' ',
            'country'              => 'Country',
            'country_helper'       => ' ',
            'services'             => 'Services',
            'services_helper'      => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'site'           => [
        'title'          => 'Site',
        'title_singular' => 'Site',
    ],
    'aboutUs'        => [
        'title'          => 'About Us',
        'title_singular' => 'About Us',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'blog'           => [
        'title'          => 'Blog',
        'title_singular' => 'Blog',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'comment'        => [
        'title'          => 'Comments',
        'title_singular' => 'Comment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'comment'           => 'Comment',
            'comment_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'blog'              => 'Blog',
            'blog_helper'       => ' ',
        ],
    ],
    'userAlert'      => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'alert_text'        => 'Alert Text',
            'alert_text_helper' => ' ',
            'alert_link'        => 'Alert Link',
            'alert_link_helper' => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
        ],
    ],
    'service'        => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'company_name'         => 'Company Name',
            'company_name_helper'  => ' ',
            'service_name'         => 'Service Name',
            'service_name_helper'  => ' ',
            'service_photo'        => 'Service Photo',
            'service_photo_helper' => ' ',
            'service_price'        => 'Service Price',
            'service_price_helper' => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
        ],
    ],
];
