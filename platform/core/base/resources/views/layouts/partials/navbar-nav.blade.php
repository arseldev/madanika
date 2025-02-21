@php
    $hidden = [
        'cms-plugins-gallery',
        'cms-plugins-ads',
        'cms-plugins-newsletter',
        'cms-core-plugins',
        'cms-plugins-contact-custom-fields',
    ];
@endphp
<ul @class(['navbar-nav', $navbarClass ?? null])>
    @foreach (DashboardMenu::getAll() as $menu)
        @if (!in_array($menu['id'], $hidden))
            @include('core/base::layouts.partials.navbar-nav-item', [
                'menu' => $menu,
                'autoClose' => $autoClose,
                'isNav' => true,
            ])
        @endif
    @endforeach
</ul>
