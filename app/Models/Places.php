<?php
namespace App\Models;
use APP\Models\Simple\JSONModel;


class Places extends Simple\JSONModel {
    protected $origin = WRITEPATH.'data/placesData.json';
    protected $keyField = 'id';
    protected $validationRules = [];

}