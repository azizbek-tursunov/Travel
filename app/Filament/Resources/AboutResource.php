<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-left';

    protected static ?string $label = 'About Page';

    protected static ?string $navigationGroup = 'Pages';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
                    ->tabs([
                        Tabs\Tab::make('O\'zbekcha')
                            ->schema([
                                Forms\Components\TextInput::make('title_uz')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description_uz')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('title2_uz')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description2_uz')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Русский')
                            ->schema([
                                Forms\Components\TextInput::make('title_ru')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description_ru')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('title2_ru')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description2_ru')
                                    ->required()
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description_en')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\TextInput::make('title2_en')
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description2_en')
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                            ]),
                        Tabs\Tab::make('Images')
                            ->schema([
                                Forms\Components\FileUpload::make('banner_image')
                                    ->image()
                                    ->required(),
                                Forms\Components\FileUpload::make('image')
                                    ->image()
                                    ->required(),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title2_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title2_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title2_en')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('banner_image'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
