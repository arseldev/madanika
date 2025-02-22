@php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fireEventGlobalAssets();
@endphp
@extends(Theme::getThemeNamespace('layouts.base'))

@section('content')
    <div class="echo-404-page">
        <section class="echo-404-area">
            <div class="echo-container">
                <div class="echo-error-content">
                    <div class="echo-error">
                        <div class="echo-error-heading">
                            <h1>404</h1>
                        </div>
                        <div class="echo-error-sub-heading">
                            <h3>{{ __('Halaman tidak ditemukan') }}</h3>
                        </div>
                        <div class="echo-error-pera">
                            <p>{!! BaseHelper::clean(
                                __('Maaf, halaman yang Anda cari,<br> telah dipindahkan, dialihkan, atau dipindahkan secara permanen.'),
                            ) !!}</p>
                        </div>
                        <div class="error-btn">
                            <a href="{{ BaseHelper::getHomepageUrl() }}"
                                class="text-capitalize">{{ __('Kembali ke Beranda') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
