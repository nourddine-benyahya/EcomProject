<?php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'title'     => $row[1],
           'description'    => $row[2],
           'image'    => $row[3],
           'category'    => $row[4],
           'quantity'    => $row[5],
           'price'    => $row[6],

        ]);
    }
}
