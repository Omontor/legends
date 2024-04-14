<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <select class="searchable-field form-control">

                </select>
            </li>
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('partners_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-store">

                        </i>
                        <span>{{ trans('cruds.partnersManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('partner_dashboard_access')
                            <li class="{{ request()->is("admin/partner-dashboards") || request()->is("admin/partner-dashboards/*") ? "active" : "" }}">
                                <a href="{{ route("admin.partner-dashboards.index") }}">
                                    <i class="fa-fw fas fa-tachometer-alt">

                                    </i>
                                    <span>{{ trans('cruds.partnerDashboard.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('partner_access')
                            <li class="{{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "active" : "" }}">
                                <a href="{{ route("admin.partners.index") }}">
                                    <i class="fa-fw fas fa-store-alt">

                                    </i>
                                    <span>{{ trans('cruds.partner.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('partner_user_access')
                            <li class="{{ request()->is("admin/partner-users") || request()->is("admin/partner-users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.partner-users.index") }}">
                                    <i class="fa-fw fas fa-user-friends">

                                    </i>
                                    <span>{{ trans('cruds.partnerUser.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('vouchers_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-ticket-alt">

                        </i>
                        <span>{{ trans('cruds.vouchersManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('voucher_access')
                            <li class="{{ request()->is("admin/vouchers") || request()->is("admin/vouchers/*") ? "active" : "" }}">
                                <a href="{{ route("admin.vouchers.index") }}">
                                    <i class="fa-fw fas fa-qrcode">

                                    </i>
                                    <span>{{ trans('cruds.voucher.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('voucher_redeem_access')
                            <li class="{{ request()->is("admin/voucher-redeems") || request()->is("admin/voucher-redeems/*") ? "active" : "" }}">
                                <a href="{{ route("admin.voucher-redeems.index") }}">
                                    <i class="fa-fw fas fa-file-invoice">

                                    </i>
                                    <span>{{ trans('cruds.voucherRedeem.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('settings_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-cogs">

                        </i>
                        <span>{{ trans('cruds.settingsManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('company_access')
                            <li class="{{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "active" : "" }}">
                                <a href="{{ route("admin.companies.index") }}">
                                    <i class="fa-fw fab fa-pied-piper">

                                    </i>
                                    <span>{{ trans('cruds.company.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('location_access')
                            <li class="{{ request()->is("admin/locations") || request()->is("admin/locations/*") ? "active" : "" }}">
                                <a href="{{ route("admin.locations.index") }}">
                                    <i class="fa-fw fas fa-map-pin">

                                    </i>
                                    <span>{{ trans('cruds.location.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('partner_category_access')
                            <li class="{{ request()->is("admin/partner-categories") || request()->is("admin/partner-categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.partner-categories.index") }}">
                                    <i class="fa-fw fas fa-list">

                                    </i>
                                    <span>{{ trans('cruds.partnerCategory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('commission_type_access')
                            <li class="{{ request()->is("admin/commission-types") || request()->is("admin/commission-types/*") ? "active" : "" }}">
                                <a href="{{ route("admin.commission-types.index") }}">
                                    <i class="fa-fw fas fa-hand-holding-usd">

                                    </i>
                                    <span>{{ trans('cruds.commissionType.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="{{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <a href="{{ route("admin.audit-logs.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.auditLog.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>