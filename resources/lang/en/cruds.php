<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
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
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
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
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'auditLog' => [
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
    'partnersManagement' => [
        'title'          => 'Partners Management',
        'title_singular' => 'Partners Management',
    ],
    'vouchersManagement' => [
        'title'          => 'Vouchers Management',
        'title_singular' => 'Vouchers Management',
    ],
    'settingsManagement' => [
        'title'          => 'Settings Management',
        'title_singular' => 'Settings Management',
    ],
    'location' => [
        'title'          => 'Location',
        'title_singular' => 'Location',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'image'             => 'Image',
            'image_helper'      => ' ',
            'lat'               => 'Lat',
            'lat_helper'        => ' ',
            'long'              => 'Long',
            'long_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'company' => [
        'title'          => 'Company',
        'title_singular' => 'Company',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'name'                   => 'Name',
            'name_helper'            => ' ',
            'logo_color'             => 'Logo Color',
            'logo_color_helper'      => ' ',
            'logo_white'             => 'Logo White',
            'logo_white_helper'      => ' ',
            'icon'                   => 'Icon',
            'icon_helper'            => ' ',
            'favicon'                => 'Favicon',
            'favicon_helper'         => ' ',
            'primary_color'          => 'Primary Color',
            'primary_color_helper'   => ' ',
            'secondary_color'        => 'Secondary Color',
            'secondary_color_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'partner' => [
        'title'          => 'Partner',
        'title_singular' => 'Partner',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'name'                  => 'Name',
            'name_helper'           => ' ',
            'url'                   => 'Url',
            'url_helper'            => ' ',
            'logo'                  => 'Logo',
            'logo_helper'           => ' ',
            'lat'                   => 'Lat',
            'lat_helper'            => ' ',
            'lng'                   => 'Lng',
            'lng_helper'            => ' ',
            'facebook'              => 'Facebook',
            'facebook_helper'       => ' ',
            'instagram'             => 'Instagram',
            'instagram_helper'      => ' ',
            'tiktok'                => 'Tiktok',
            'tiktok_helper'         => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'gallery'               => 'Gallery',
            'gallery_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'category'              => 'Category',
            'category_helper'       => ' ',
            'en_description'        => 'En Description',
            'en_description_helper' => ' ',
            'es_description'        => 'Es Description',
            'es_description_helper' => ' ',
            'fr_description'        => 'Fr Description',
            'fr_description_helper' => ' ',
            'nl_description'        => 'Nl Description',
            'nl_description_helper' => ' ',
        ],
    ],
    'voucher' => [
        'title'          => 'Voucher',
        'title_singular' => 'Voucher',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'guid'                   => 'Guid',
            'guid_helper'            => ' ',
            'en_description'         => 'En Description',
            'en_description_helper'  => ' ',
            'es_description'         => 'Es Description',
            'es_description_helper'  => ' ',
            'nl_description'         => 'Nl Description',
            'nl_description_helper'  => ' ',
            'fr_description'         => 'Fr Description',
            'fr_description_helper'  => ' ',
            'is_multi_use'           => 'Is Multi Use',
            'is_multi_use_helper'    => ' ',
            'is_for_group'           => 'Is For Group',
            'is_for_group_helper'    => ' ',
            'group_size'             => 'Group Size',
            'group_size_helper'      => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'commission_type'        => 'Commission Type',
            'commission_type_helper' => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
        ],
    ],
    'partnerUser' => [
        'title'          => 'Partner Users',
        'title_singular' => 'Partner User',
    ],
    'partnerCategory' => [
        'title'          => 'Partner Category',
        'title_singular' => 'Partner Category',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'en_name'               => 'En Name',
            'en_name_helper'        => ' ',
            'spa_name'              => 'Spa Name',
            'spa_name_helper'       => ' ',
            'fr_name'               => 'Fr Name',
            'fr_name_helper'        => ' ',
            'nl_name'               => 'Nl Name',
            'nl_name_helper'        => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'en_description'        => 'En Description',
            'en_description_helper' => ' ',
            'es_description'        => 'Es Description',
            'es_description_helper' => ' ',
            'fr_description'        => 'Fr Description',
            'fr_description_helper' => ' ',
            'nl_description'        => 'Nl Description',
            'nl_description_helper' => ' ',
        ],
    ],
    'voucherRedeem' => [
        'title'          => 'Voucher Redeems',
        'title_singular' => 'Voucher Redeem',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'voucher'           => 'Voucher',
            'voucher_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'commissionType' => [
        'title'          => 'Commission Types',
        'title_singular' => 'Commission Type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'partnerDashboard' => [
        'title'          => 'Partner Dashboard',
        'title_singular' => 'Partner Dashboard',
    ],

];
