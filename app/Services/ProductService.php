<?php
namespace App\Services;

use App\Fields\Store\InputField;
use App\Fields\Store\NumberField;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductService extends Service {
    protected $modelClass = Product::class;
    public function getFields()
    {
        return [
            InputField::make('name')->required()->beforeSave(fn($value) => Str::upper($value)),
            NumberField::make('price')->numeric()->required(),
        ];
    }
}