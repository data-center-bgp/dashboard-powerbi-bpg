<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupplyChainDashboardResource\Pages;
use App\Models\SupplyChainDashboard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SupplyChainDashboardResource extends Resource
{
    protected static ?string $model = SupplyChainDashboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('title')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('link')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('finance')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link')
                    ->icon('heroicon-o-link')
                    ->color('primary')
                    ->url(fn ($record) => $record->link)
                    ->openUrlInNewTab()
                    ->formatStateUsing(fn ($state) => 'Click Me!')
                    ->wrap(),
                Tables\Columns\IconColumn::make('finance')
                    ->boolean(),
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
            'index' => Pages\ListSupplyChainDashboards::route('/'),
            'create' => Pages\CreateSupplyChainDashboard::route('/create'),
            'edit' => Pages\EditSupplyChainDashboard::route('/{record}/edit'),
        ];
    }
}
