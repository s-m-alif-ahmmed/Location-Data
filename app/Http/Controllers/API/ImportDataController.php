<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Imports\PostalCodeImport;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportDataController extends Controller
{
    use ApiResponse;

    public function importData(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);

        $file = $request->file('file');

        Excel::import(new PostalCodeImport(), $file);

        return $this->success('Postal codes imported successfully!', [],200);
    }

}
