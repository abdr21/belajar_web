<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\Concerns\Translatable;


use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';
    //use Translatable;
    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __('Images for :project', ['project' => $ownerRecord->title]);
    }

    public static function getModelLabel(): string
    {
        return __('Image');
    }

    public function form(Form $form): Form
    {
         $locales = config('services.locales.available'); // Default to 'en' and 'id' if not set
        $fields = [];
        foreach ($locales as $locale) {
            $fields[] = Forms\Components\Textarea::make("description.{$locale}")
                ->label(__('Description') . " ({$locale})")
                ->required()
                ->maxLength(1000);
            }

         $fields[] = Forms\Components\FileUpload::make('path')
            ->label(__('Image'))
            ->image()
            ->required()
            ->maxSize(1024) // 1MB
            //->disk('public') // Specify the disk if needed
            ->directory('gambar proyek') // Specify the directory if needed
            //->directory(config('services.disks.image')) // Specify the directory if needed
            ->columnSpanFull();
        return $form
            /*->schema([
                Forms\Components\TextInput::make('description')
                    ->label(__('Description'))
                    ->required()
                    ->maxLength(255),
            ]);*/
            ->schema($fields);
    }

    public function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            //->recordTitleAttribute('description')
            //->recordTitle(fn ($record) => $record->getTranslation('description', app()->getLocale()))
            ->columns([
                Tables\Columns\ImageColumn::make('path')
                    ->label(__('Image'))
                    ->disk('public') // Specify the disk if needed
                    //->directory(config('services.disks.image')) // Specify the directory if needed
                    //->directory('gambar proyek') // Specify the directory if needed
                    ->circular(),
                Tables\Columns\TextColumn::make('description')
                    ->label(__('Description'))
                    //->translate()
                    //->formatStateUsing(fn ($state, $record) => $record->getTranslation('description', app()->getLocale()))
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\LocaleSwitcher::make(),
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
