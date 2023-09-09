<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static  ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
                    ->tabs([
                        Tabs\Tab::make('About UZ')
                            ->schema([
                                Forms\Components\TextInput::make('about_uz')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('about_text_uz')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        Tabs\Tab::make('About RU')
                            ->schema([
                                Forms\Components\TextInput::make('about_ru')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('about_text_ru')
                                    ->required()
                                    ->maxLength(255),

                            ]),
                        Tabs\Tab::make('About EN')
                            ->schema([
                                Forms\Components\TextInput::make('about_en')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('about_text_en')
                                    ->required()
                                    ->maxLength(255),

                            ]),
                        Tabs\Tab::make('Images')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Image 1 (380x535)')
                                    ->image()
                                    ->imageResizeMode('force')
                                    ->imageResizeTargetWidth('380')
                                    ->imageResizeTargetHeight('535')
                                    ->required(),
                                Forms\Components\FileUpload::make('image2')
                                    ->label('Image 2 (330x535)')
                                    ->image()
                                    ->imageResizeMode('force')
                                    ->imageResizeTargetWidth('330')
                                    ->imageResizeTargetHeight('535')
                                    ->required(),
                                Forms\Components\Repeater::make('banner')
                                    ->schema([
                                        Forms\Components\TextInput::make('title_uz')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\FileUpload::make('image_uz')
                                            ->label('Image UZ (1920x950)')
                                            ->image()
                                            ->required(),
                                        Forms\Components\TextInput::make('title_ru')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\FileUpload::make('image_ru')
                                            ->label('Image RU (1920x950)')
                                            ->image()
                                            ->required(),
                                        Forms\Components\TextInput::make('title_en')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\FileUpload::make('image_en')
                                            ->label('Image EN (1920x950)')
                                            ->image()
                                            ->required(),
                                    ]),
                            ]),
                        Tabs\Tab::make('Video')
                            ->schema([
                                Forms\Components\TextInput::make('video_text_uz')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('video_text_ru')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('video_text_en')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('video_link')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\FileUpload::make('video_background')
                                    ->label('Video Background (1610x750)')
                                    ->image()
                                    ->required(),
                            ]),
                        Tabs\Tab::make('CTa')
                            ->schema([
                                Forms\Components\TextInput::make('CTa_text_uz')
                                    ->label('Text UZ')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('CTa_text_ru')
                                    ->label('Text RU')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('CTa_text_en')
                                    ->label('Text EN')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('CTa_link')
                                    ->label('Link')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('about_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_text_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_text_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('about_text_en')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('image2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_text_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_text_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_text_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_background')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CTa_text_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CTa_text_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CTa_text_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('CTa_link')
                    ->searchable(),
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
            'index' => Pages\ListHomePages::route('/'),
            'create' => Pages\CreateHomePage::route('/create'),
            'edit' => Pages\EditHomePage::route('/{record}/edit'),
        ];
    }
}
