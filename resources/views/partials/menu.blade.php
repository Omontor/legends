<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('partners_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/partner-dashboards*") ? "c-show" : "" }} {{ request()->is("admin/partners*") ? "c-show" : "" }} {{ request()->is("admin/partner-users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-store c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.partnersManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('partner_dashboard_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.partner-dashboards.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partner-dashboards") || request()->is("admin/partner-dashboards/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-tachometer-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.partnerDashboard.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('partner_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.partners.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partners") || request()->is("admin/partners/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-store-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.partner.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('partner_user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.partner-users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partner-users") || request()->is("admin/partner-users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.partnerUser.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('vouchers_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/vouchers*") ? "c-show" : "" }} {{ request()->is("admin/voucher-redeems*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-ticket-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.vouchersManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('voucher_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.vouchers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/vouchers") || request()->is("admin/vouchers/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-qrcode c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.voucher.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('voucher_redeem_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.voucher-redeems.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/voucher-redeems") || request()->is("admin/voucher-redeems/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-invoice c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.voucherRedeem.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('settings_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/companies*") ? "c-show" : "" }} {{ request()->is("admin/locations*") ? "c-show" : "" }} {{ request()->is("admin/partner-categories*") ? "c-show" : "" }} {{ request()->is("admin/commission-types*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.settingsManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('company_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.companies.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/companies") || request()->is("admin/companies/*") ? "c-active" : "" }}">
                                <i class="fa-fw fab fa-pied-piper c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.company.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('location_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.locations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/locations") || request()->is("admin/locations/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-map-pin c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.location.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('partner_category_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.partner-categories.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/partner-categories") || request()->is("admin/partner-categories/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.partnerCategory.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('commission_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.commission-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/commission-types") || request()->is("admin/commission-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding-usd c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.commissionType.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>