<?php

namespace App\Filament\Resources\Preguntas\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Infolists\Components\TextEntry;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RespuestasRelationManager extends RelationManager
{
    protected static string $relationship = 'opcionesPregunta';

    public static function getModelLabel(): string
    {
        return 'Respuesta';
    }

    protected static ?string $title = 'Opciones de respuesta';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('opcion')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('peso_ponderado')
                    ->required()
                    ->numeric(),
                // Select::make('estado_id')
                //     ->label('Estado')
                //     ->relationship('estado', 'nombre_estado')
                //     ->preload()
                //     ->searchable()
                //     ->required(),
            ]);
    }

    public function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('peso_ponderado')
                    ->numeric(),
                TextEntry::make('pregunta_id')
                    ->numeric(),
                // TextEntry::make('estado_id')
                //     ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('opcion')
            ->columns([
                TextColumn::make('opcion')
                    ->sortable(),
                TextColumn::make('peso_ponderado')
                    ->numeric()
                    ->sortable(),
                // TextColumn::make('estado.nombre_estado')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make()
                    ## Validación para permitir máximo 4 opciones por pregunta
                    ->visible(fn ($livewire) => $livewire->ownerRecord->opcionesPregunta()->count() < 4),
                // AssociateAction::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                // DissociateAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    // DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
