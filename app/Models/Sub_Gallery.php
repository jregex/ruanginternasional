<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getAll()
    {
        return $this->leftJoin('galleries', 'sub__galleries.category_id', '=', 'galleries.id')
            ->get(['galleries.kategori', 'galleries.keterangan', 'sub__galleries.nama_file', 'sub__galleries.tgl_upload', 'sub__galleries.nama']);
    }

    public function getLimitGal()
    {
        return $this->join('galleries', 'sub__galleries.category_id', '=', 'galleries.id')
            ->limit(6)
            ->orderBy('sub__galleries.id', 'desc')
            ->get(['galleries.kategori', 'galleries.keterangan', 'sub__galleries.nama_file', 'sub__galleries.tgl_upload', 'sub__galleries.nama']);
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
