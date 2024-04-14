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
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'partners_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'vouchers_management_access',
            ],
            [
                'id'    => 21,
                'title' => 'settings_management_access',
            ],
            [
                'id'    => 22,
                'title' => 'location_create',
            ],
            [
                'id'    => 23,
                'title' => 'location_edit',
            ],
            [
                'id'    => 24,
                'title' => 'location_show',
            ],
            [
                'id'    => 25,
                'title' => 'location_delete',
            ],
            [
                'id'    => 26,
                'title' => 'location_access',
            ],
            [
                'id'    => 27,
                'title' => 'company_create',
            ],
            [
                'id'    => 28,
                'title' => 'company_edit',
            ],
            [
                'id'    => 29,
                'title' => 'company_show',
            ],
            [
                'id'    => 30,
                'title' => 'company_delete',
            ],
            [
                'id'    => 31,
                'title' => 'company_access',
            ],
            [
                'id'    => 32,
                'title' => 'partner_create',
            ],
            [
                'id'    => 33,
                'title' => 'partner_edit',
            ],
            [
                'id'    => 34,
                'title' => 'partner_show',
            ],
            [
                'id'    => 35,
                'title' => 'partner_delete',
            ],
            [
                'id'    => 36,
                'title' => 'partner_access',
            ],
            [
                'id'    => 37,
                'title' => 'voucher_create',
            ],
            [
                'id'    => 38,
                'title' => 'voucher_edit',
            ],
            [
                'id'    => 39,
                'title' => 'voucher_show',
            ],
            [
                'id'    => 40,
                'title' => 'voucher_delete',
            ],
            [
                'id'    => 41,
                'title' => 'voucher_access',
            ],
            [
                'id'    => 42,
                'title' => 'partner_user_create',
            ],
            [
                'id'    => 43,
                'title' => 'partner_user_edit',
            ],
            [
                'id'    => 44,
                'title' => 'partner_user_show',
            ],
            [
                'id'    => 45,
                'title' => 'partner_user_delete',
            ],
            [
                'id'    => 46,
                'title' => 'partner_user_access',
            ],
            [
                'id'    => 47,
                'title' => 'partner_category_create',
            ],
            [
                'id'    => 48,
                'title' => 'partner_category_edit',
            ],
            [
                'id'    => 49,
                'title' => 'partner_category_show',
            ],
            [
                'id'    => 50,
                'title' => 'partner_category_delete',
            ],
            [
                'id'    => 51,
                'title' => 'partner_category_access',
            ],
            [
                'id'    => 52,
                'title' => 'voucher_redeem_create',
            ],
            [
                'id'    => 53,
                'title' => 'voucher_redeem_edit',
            ],
            [
                'id'    => 54,
                'title' => 'voucher_redeem_show',
            ],
            [
                'id'    => 55,
                'title' => 'voucher_redeem_delete',
            ],
            [
                'id'    => 56,
                'title' => 'voucher_redeem_access',
            ],
            [
                'id'    => 57,
                'title' => 'commission_type_create',
            ],
            [
                'id'    => 58,
                'title' => 'commission_type_edit',
            ],
            [
                'id'    => 59,
                'title' => 'commission_type_show',
            ],
            [
                'id'    => 60,
                'title' => 'commission_type_delete',
            ],
            [
                'id'    => 61,
                'title' => 'commission_type_access',
            ],
            [
                'id'    => 62,
                'title' => 'partner_dashboard_create',
            ],
            [
                'id'    => 63,
                'title' => 'partner_dashboard_edit',
            ],
            [
                'id'    => 64,
                'title' => 'partner_dashboard_show',
            ],
            [
                'id'    => 65,
                'title' => 'partner_dashboard_delete',
            ],
            [
                'id'    => 66,
                'title' => 'partner_dashboard_access',
            ],
            [
                'id'    => 67,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
