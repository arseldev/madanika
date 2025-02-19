{!! Theme::partial('header-top') !!}
<div class="echo-home-1-menu" style="background-color: #FFB200 !important;">
    <div class="echo-site-main-logo-menu-social" style="background-color: #FFB200 !important;">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between"
                style="overflow-x: auto; white-space: nowrap; max-width: 100%; 
                scrollbar-width: thin; /* Untuk Firefox */
                -ms-overflow-style: none; /* Untuk IE/Edge */
                -webkit-overflow-scrolling: touch;">

                <div class="logo-header-sidebar" style="flex-shrink: 0;">
                    {!! Theme::partial('header.partials.logo') !!}
                </div>

                <div class="echo-home-1-menu d-none d-lg-flex justify-content-center"
                    style="display: flex; padding: 0; margin: 0; gap: 10px;">
                    {!! Menu::renderMenuLocation('main-menu', [
                        'options' => ['class' => 'list-unstyled echo-desktop-menu'],
                        'view' => 'main-menu',
                    ]) !!}
                </div>


                <div class="d-flex justify-content-between align-items-center">
                    {{-- @if (is_plugin_active('language') && theme_option('language_switcher_enabled', true))
                        {!! Theme::partial('language-switcher') !!}
                    @endif

                    {!! Theme::partial('account') !!} --}}

                    {!! Theme::partial('header-sticky-button-toggle-sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</div>
