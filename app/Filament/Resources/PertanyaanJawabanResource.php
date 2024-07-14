<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\PertanyaanJawaban;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PertanyaanJawabanResource\Pages;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use App\Filament\Resources\PertanyaanJawabanResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class PertanyaanJawabanResource extends Resource
{
    protected static ?string $model = PertanyaanJawaban::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('pertanyaan')->required(),
                        TinyEditor::make('jawaban')->minHeight(300),
                        
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pertanyaan')->sortable()->searchable(),
                TextColumn::make('jawaban')->sortable()->searchable(),
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
            'index' => Pages\ListPertanyaanJawabans::route('/'),
            'create' => Pages\CreatePertanyaanJawaban::route('/create'),
            'edit' => Pages\EditPertanyaanJawaban::route('/{record}/edit'),
        ];
    }
}
