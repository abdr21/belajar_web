<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\Concerns\Translatable;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonialsRelationManager extends RelationManager
{
    protected static string $relationship = 'testimonials';
    //use Translatable;
      public static function getTitle(Model $ownerRecord, string $pageClass): string
      {
        return __('Testimonials for :project', ['project' => $ownerRecord->title]);
    }

    public static function getModelLabel(): string
    {
        return __('Testimoni');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Testimonials');
    }
      
    

    public function form(Form $form): Form
    {
        $locales = config('services.locales.available'); // Default to 'en' and 'id' if not set

        $fields = [];
        $fields[] = Forms\Components\TextInput::make('name')
            ->label(__('Name'))
            ->required()
            ->maxLength(255);
        
        $fields[] = Forms\Components\TextInput::make('position')
            ->label(__('Position'))
            ->required()
            ->maxLength(255);   

        $fields[] = Forms\Components\TextInput::make('company')
            ->label(__('Company'))
            ->required()
            ->maxLength(255);   

        foreach ($locales as $locale) {
            $fields[] = Forms\Components\Textarea::make("message.{$locale}")
                ->label(__('Message') . " ({$locale})")
                ->required()
                ->maxLength(1000);
        }

        $fields[] = Forms\Components\FileUpload::make('photo')
            ->label(__('Image'))
            ->image()
            ->required()
            ->maxSize(1024) // 1MB
            ->disk('public') // Specify the disk if needed
            ->directory('testimonials') // Specify the directory if needed
            ->columnSpanFull();
        return $form
            ->schema($fields);
            /*->schema([
                

                Forms\Components\TextInput::make('name')
                    ->label(__('Name'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->label(__('Position'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company')
                    ->label(__('Company'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->label(__('Message'))
                    ->required()
                    ->maxLength(1000),
                Forms\Components\FileUpload::make('photo')
                    ->label(__('Image'))
                    ->image()
                    ->required()
                    ->maxSize(1024) // 1MB
                    ->disk('public') // Specify the disk if needed
                    ->directory('testimonials'), // Specify the directory if needed

                
              ]);*/
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label(__('Image'))
                    //->disk('public') // Specify the disk if needed
                    //->directory('testimonials') // Specify the directory if needed
                    ->circular()
                    ->size(50),
                Tables\Columns\TextColumn::make('name')
                    ->label(__('Name'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->label(__('Position'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company')
                    ->label(__('Company'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('message')
                    ->label(__('Message'))
                    ->searchable()
                    ->limit(50), // Limit the message length for display
                
                    //->directory('testimonials'), // Specify the directory if needed
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
