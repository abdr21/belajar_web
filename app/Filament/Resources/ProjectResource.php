<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    use Translatable;
    public static function getModelLabel(): string
    {
        return __('Project');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->columns(12)
            ->schema([
                Forms\Components\Section::make()
                    ->columnSpan(8)
                    ->schema([
                        TextInput::make('title')
                            ->label(__('Project Title'))
                            ->placeholder(__('Project Title Placeholder'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        TextInput::make('slug')
                            ->label(__('Project Slug'))
                            ->placeholder(__('Project Slug Placeholder'))
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('content')
                            ->label(__('Project Content'))
                            ->placeholder(__('Project Content Placeholder'))
                            ->required()
                            ->columnSpanFull(),
                        /*Forms\Components\Textarea::make('content')
                            ->label(__('Project Content'))
                            ->placeholder(__('Project Content Placeholder'))
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\DatePicker::make('start_date')
                            ->label(__('Start Date'))
                            ->required(),
                        Forms\Components\DatePicker::make('end_date')
                            ->label(__('End Date')),
                        Forms\Components\Select::make('status')
                            ->label(__('Status'))
                            ->options([
                                'ongoing' => __('Ongoing'),
                                'completed' => __('Completed'),
                                'cancelled' => __('Cancelled'),
                            ])
                            ->default('ongoing')*/
                    ]),
                Forms\Components\Section::make()
                    ->columnSpan(4)
                    ->schema([
                        FileUpload::make('image')
                            ->label(__('Project Image'))
                            //->placeholder(__('Project Image Placeholder'))
                            ->image()
                            //->required()
                            ->imageEditor()
                            //->disk('public') // Specify the disk if needed
                            //->directory('projects'), // Specify the directory if needed
                            //->disk(config('services.disk.project'))
                            //->directory('pr')
                            //->visibility('public')
                            //->maxSize(1024) // 1MB
                            //->columnSpanFull()
                            ->directory(config('services.disks.project')),

                        Forms\Components\Select::make('category_id')
                            ->label(__('Category'))
                            ->relationship('category', 'name')
                            //->required()
                            //->searchable()
                            ->columnSpanFull(),
                        //buatkan tag multiple cheklist
                        Forms\Components\CheckboxList::make('tags')
                            ->label(__('Tags'))
                            ->relationship('tags', 'name')
                            ->columns(2)
                            ->columnSpanFull()
                            ->required(),
                       


                    ])


                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('Image'))
                    ->circular()
                    ->size(50)
                    //->disk(config('services.disks.project'))
                    ->sortable()
                    ->searchable(),
                    //->columnSpanFull(),
                    
                Tables\Columns\TextColumn::make('title')
                    ->label(__('Project Title'))
                    ->sortable(
                        query: fn (Builder $query, string $direction) => $query->orderBy('title->' . app()->getLocale(), $direction)
                    )
                    ->searchable()
                    ->columnSpanFull(),
                Tables\Columns\TextColumn::make('slug')     
                    ->label(__('Project Slug'))
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label(__('Category'))
                    ->sortable(
                        query: fn (Builder $query, string $direction) => $query->orderBy('category.name->' . app()->getLocale(), $direction)
                    )
                    ->searchable()
                    ->columnSpanFull(),

                Tables\Columns\TextColumn::make('tags.name')
                    ->label(__('Tags'))
                    ->sortable(
                        query: fn (Builder $query, string $direction) => $query->orderBy('tags.name->' . app()->getLocale(), $direction)
                    )
                    ->searchable()
                    ->columnSpanFull(),

                //
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
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ImagesRelationManager::class, // Add Images relation manager
            RelationManagers\TestimonialsRelationManager::class, // Add Testimonials relation manager
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
