<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShippingDashboardResource\Pages;
use App\Models\ShippingDashboard;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ShippingDashboardResource extends Resource
{
    protected static ?string $model = ShippingDashboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('link')
                    ->required(),
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
            ->emptyStateHeading('No data yet')
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

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        /** @var \App\Models\User $user */
        $user = Auth::user();

        if ($user->hasRole('super_admin')) {
            return $query;
        }

        return $query->where(function (Builder $subQuery) use ($user) {
            if ($user->hasRole('finance_shipping')) {
                $subQuery->orWhere('finance', true);
            }
            if ($user->hasRole('operation_shipping')) {
                $subQuery->orWhere('finance', false);
            }
        });
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShippingDashboards::route('/'),
            'create' => Pages\CreateShippingDashboard::route('/create'),
            'edit' => Pages\EditShippingDashboard::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Shipping';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Shipping Dashboard';
    }
}
