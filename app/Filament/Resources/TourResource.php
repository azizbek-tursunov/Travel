<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TourResource\Pages;
use App\Filament\Resources\TourResource\RelationManagers;
use App\Models\Tour;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TourResource extends Resource
{
    protected static ?string $model = Tour::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $navigationGroup = 'Tours';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
                    ->tabs([
                        Tabs\Tab::make('O\'zbekcha')
                            ->schema([
                                Forms\Components\TextInput::make('name_uz')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('direction_uz')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description_uz')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$'),
                                Forms\Components\FileUpload::make('image_uz')
                                    ->image()
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Русский')
                            ->schema([
                                Forms\Components\TextInput::make('name_ru')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('direction_ru')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description_ru')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_ru')
                                    ->image()
                                    ->required(),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('name_en')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('direction_en')
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description_en')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\FileUpload::make('image_en')
                                    ->image(),
                            ]),
                        Tabs\Tab::make('Image')
                        ->schema([
                            Forms\Components\FileUpload::make('banner_image')
                                ->image()
                                ->required(),
                        ]),
                    ])->columnSpanFull(),
                Forms\Components\CheckboxList::make('destinations')
                        ->relationship('destinations', 'name_uz')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direction_uz')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_uz'),
                Tables\Columns\TextColumn::make('name_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direction_ru')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_ru'),
                Tables\Columns\TextColumn::make('name_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direction_en')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_en'),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTours::route('/'),
        ];
    }
}
