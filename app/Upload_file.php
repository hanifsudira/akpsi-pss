<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload_file extends Model
{
    protected $fillable = ['upload_by', 'upload_time', 'type_document','document_name'];
}
