<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FuelResource\Pages;
use App\Filament\Resources\FuelResource\RelationManagers;
use App\Models\Fuel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FuelResource extends Resource
{
    protected static ?string $model = Fuel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('vehicle_id')
                ->required()
                ->label('Vehicle ID'),
            Forms\Components\DatePicker::make('fuel_date')
                ->required()
                ->label('Fuel Date'),
            Forms\Components\TextInput::make('quantity')
                ->required()
                ->numeric()
                ->label('Quantity'),
            Forms\Components\TextInput::make('cost')
                ->required()
                ->numeric()
                ->label('Cost'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->label('ID')
                ->sortable(),
            Tables\Columns\TextColumn::make('vehicle_id')
                ->label('Vehicle ID')
                ->sortable(),
            Tables\Columns\TextColumn::make('fuel_date')
                ->label('Fuel Date')
                ->sortable(),
            Tables\Columns\TextColumn::make('quantity')
                ->label('Quantity')
                ->sortable(),
            Tables\Columns\TextColumn::make('cost')
                ->label('Cost')
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFuels::route('/'),
            'create' => Pages\CreateFuel::route('/create'),
            'edit' => Pages\EditFuel::route('/{record}/edit'),
        ];
    }
}
