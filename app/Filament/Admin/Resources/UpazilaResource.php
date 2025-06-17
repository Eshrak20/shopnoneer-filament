<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UpazilaResource\Pages;
use App\Filament\Admin\Resources\UpazilaResource\RelationManagers;
use App\Models\Upazila;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UpazilaResource extends Resource
{
    protected static ?string $model = Upazila::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_en')->required(),
                TextInput::make('name_bn')->required(),
                TextInput::make('code')->nullable(),
                Select::make('district_id')
                    ->relationship('district', 'name_en')
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_en')->sortable()->searchable(),
                TextColumn::make('name_bn'),
                TextColumn::make('code'),
                TextColumn::make('district.name_en')->label('District'),
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
            'index' => Pages\ListUpazilas::route('/'),
            'create' => Pages\CreateUpazila::route('/create'),
            'edit' => Pages\EditUpazila::route('/{record}/edit'),
        ];
    }
}
