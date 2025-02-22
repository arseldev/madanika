@php
    $hidden = [
        'cms-plugins-gallery',
        'cms-plugins-ads',
        'cms-plugins-newsletter',
        'cms-core-plugins',
        'cms-plugins-contact-custom-fields',
        'cms-core-appearance-custom-css',
        'cms-core-appearance-custom-js',
        'cms-core-appearance-custom-html',
        'cms-core-appearance-robots-txt',
        'cms-core-settings',
        'cms-core-system',
    ];
@endphp
<ul @class(['navbar-nav', $navbarClass ?? null])>
    @foreach (DashboardMenu::getAll() as $menu)
        @php
            $menu['children'] = $menu['children']->filter(fn($child) => !in_array($child['id'], $hidden));

            $hasVisibleChildren = $menu['children']->isNotEmpty();
        @endphp

        @if (!in_array($menu['id'], $hidden) && ($hasVisibleChildren || $menu['parent_id'] === null))
            @include('core/base::layouts.partials.navbar-nav-item', [
                'menu' => $menu,
                'autoClose' => $autoClose,
                'isNav' => true,
            ])
        @endif
    @endforeach
</ul>
