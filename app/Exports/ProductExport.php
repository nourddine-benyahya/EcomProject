<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProductExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'discription',
            'image',
            "category",
            "quantity",
            "price",
            "discount_price",
            "created_at",
            "updated_at"
            // Add more column names if needed
        ];
    }
}
