<?php

namespace App\Filament\Resources;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Forms\Form;
use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static string|\BackedEnum|null $navigationIcon =
        'heroicon-o-document-text';

    protected static ?string $navigationLabel = 'Blog Posts';

    protected static ?string $modelLabel = 'Blog Post';

    protected static ?string $pluralModelLabel = 'Blog Posts';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Grid::make(3)
                ->schema([

                    /*
                    |--------------------------------------------------------------------------
                    | LEFT SIDE - MAIN CONTENT
                    |--------------------------------------------------------------------------
                    */

                    Grid::make(1)
                        ->schema([

                            Section::make('Post Information')
                                ->description('Basic information about your blog post.')
                                ->schema([

                                    TextInput::make('title')
                                        ->label('Title')
                                        ->placeholder('Enter blog post title')
                                        ->required()
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(
                                            function ($state, callable $set) {
                                                if (blank($state)) {
                                                    return;
                                                }

                                                $set('slug', Str::slug($state));
                                            }
                                        ),

                                    TextInput::make('slug')
                                        ->label('Slug')
                                        ->placeholder('your-blog-post-slug')
                                        ->required()
                                        ->maxLength(255)
                                        ->unique(
                                            table: 'blog_posts',
                                            column: 'slug',
                                            ignoreRecord: true
                                        ),

                                    Textarea::make('excerpt')
                                        ->label('Excerpt')
                                        ->placeholder('Short summary of the blog post...')
                                        ->rows(4)
                                        ->required()
                                        ->maxLength(255),

                                ])
                                ->columns(1),

                            Section::make('Article Content')
                                ->description('Write your complete blog article.')
                                ->schema([

                                    RichEditor::make('content')
                                        ->label('Content')
                                        ->required()
                                        ->toolbarButtons([
                                            'bold',
                                            'italic',
                                            'underline',
                                            'strike',
                                            'h2',
                                            'h3',
                                            'bulletList',
                                            'orderedList',
                                            'blockquote',
                                            'link',
                                            'undo',
                                            'redo',
                                        ])
                                        ->columnSpanFull(),

                                ])
                                ->columns(1),

                            Section::make('SEO')
                                ->description('Search engine optimization settings.')
                                ->schema([

                                    TextInput::make('meta_title')
                                        ->label('Meta Title')
                                        ->placeholder('SEO title')
                                        ->maxLength(255)
                                        ->helperText('Recommended: 50–60 characters.'),

                                    Textarea::make('meta_description')
                                        ->label('Meta Description')
                                        ->placeholder('SEO description')
                                        ->rows(4)
                                        ->maxLength(255)
                                        ->helperText('Recommended: 150–160 characters.'),

                                ])
                                ->columns(1),

                        ])
                        ->columnSpan(2),

                    /*
                    |--------------------------------------------------------------------------
                    | RIGHT SIDE - SIDEBAR
                    |--------------------------------------------------------------------------
                    */

                    Grid::make(1)
                        ->schema([

                            Section::make('Publishing')
                                ->description('Control the publication status.')
                                ->schema([

                                    Toggle::make('is_published')
                                        ->label('Published')
                                        ->default(false)
                                        ->live(),

                                    DateTimePicker::make('published_at')
                                        ->label('Published At')
                                        ->seconds(false)
                                        ->default(now())
                                        ->visible(
                                            fn (Get $get): bool =>
                                                (bool) $get('is_published')
                                        ),

                                ]),

                            Section::make('Organization')
                                ->description('Organize your blog post.')
                                ->schema([

                                    TextInput::make('category')
                                        ->label('Category')
                                        ->placeholder('e.g. Laravel')
                                        ->required()
                                        ->maxLength(255),

                                    TextInput::make('author')
                                        ->label('Author')
                                        ->default('Admin')
                                        ->required()
                                        ->maxLength(255),

                                ]),

                            Section::make('Featured Image')
                                ->description('Upload the main image for this post.')
                                ->schema([

                                    FileUpload::make('featured_image')
                                        ->label('Featured Image')
                                        ->image()
                                        ->imageEditor()
                                        ->directory('blog-posts')
                                        ->visibility('public')
                                        ->downloadable()
                                        ->openable()
                                        ->imagePreviewHeight('200')
                                        ->helperText('Recommended size: 1200 × 630 px.'),

                                ]),

                        ])
                        ->columnSpan(1),

                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('featured_image')
                    ->label('Image')
                    ->square()
                    ->size(50),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->limit(50),

                TextColumn::make('category')
                    ->label('Category')
                    ->searchable()
                    ->badge(),

                TextColumn::make('author')
                    ->label('Author')
                    ->searchable(),

                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),

                TextColumn::make('published_at')
                    ->label('Published At')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->placeholder('Draft'),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime('M d, Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])

            ->filters([

                TernaryFilter::make('is_published')
                    ->label('Status')
                    ->trueLabel('Published')
                    ->falseLabel('Draft')
                    ->placeholder('All'),

                SelectFilter::make('category')
                    ->label('Category')
                    ->options(
                        fn () => BlogPost::query()
                            ->whereNotNull('category')
                            ->where('category', '!=', '')
                            ->distinct()
                            ->orderBy('category')
                            ->pluck('category', 'category')
                            ->toArray()
                    ),

            ])

            ->recordActions([
                \Filament\Tables\Actions\EditAction::make(),
            ])

            ->toolbarActions([
                \Filament\Tables\Actions\BulkActionGroup::make([
                    \Filament\Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])

            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
