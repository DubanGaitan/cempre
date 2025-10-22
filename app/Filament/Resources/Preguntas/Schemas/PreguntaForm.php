<?php

namespace App\Filament\Resources\Preguntas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PreguntaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('pregunta')
                    ->label('Escribe una pregunta')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->required(),
                Select::make('determinante_id')
                    ->label('Determinante')
                    //->options(\App\Models\Determinante::pluck('nombre_determinante', 'id')->toArray())
                    ->relationship('determinante', 'nombre_determinante')
                    ->preload()
                    ->searchable()
                    ->required(),
                Select::make('estado_id')
                    ->label('Estado')
                    ->relationship('estado', 'nombre_estado')
                    ->preload()
                    ->searchable()
                    ->required(),
            ]);
    }
}
