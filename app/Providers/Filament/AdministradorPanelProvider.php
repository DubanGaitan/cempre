<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Width;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdministradorPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('administrador')
            ->path('administrador')
            ->login()
            ->colors([
                'primary' => Color::hex('#00BF63'),
                'secondary' => Color::hex('#00BF63'),
                'success' => Color::hex('#00BF63'),
                'warning' => Color::hex('#00BF63'),
                'danger' => Color::hex('#00BF63'),
                'info' => Color::hex('#00BF63'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                // FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->font('Poppins')
            ->brandName('Cempre')
            ->brandLogo(asset('img/administrador/etitc-logo-2x.png'))
            ->brandLogoHeight('4rem')
            ->favicon(asset('img/logo_icon.png'))
            ->brandName('Cempre')
            ->sidebarCollapsibleOnDesktop()   // ✅ sidebar puede colapsarse en desktop
            ->sidebarFullyCollapsibleOnDesktop() // (opcional) colapsar completamente
            ->maxContentWidth(Width::Full) // opcional: que el contenido se expanda
            ;

    }
}
