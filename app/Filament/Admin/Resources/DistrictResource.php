<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DistrictResource\Pages;
use App\Filament\Admin\Resources\DistrictResource\RelationManagers;
use App\Models\District;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DistrictResource extends Resource
{
    protected static ?string $model = District::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('division_id')
                    ->relationship('division', 'name_en')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name_en')->required(),
                Forms\Components\TextInput::make('name_bn')->required(),
                Forms\Components\TextInput::make('code')->required()->unique(ignoreRecord: true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('division.name_en')->label('Division'),
                Tables\Columns\TextColumn::make('name_en'),
                Tables\Columns\TextColumn::make('name_bn'),
                Tables\Columns\TextColumn::make('code'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDistricts::route('/'),
            'create' => Pages\CreateDistrict::route('/create'),
            'edit' => Pages\EditDistrict::route('/{record}/edit'),
        ];
    }
}
