<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $table = 'pegawai';
    protected $primaryKey = 'no_induk';
    protected $keyType = 'string';
    protected $fillable = ['no_induk', 'nama', 'id_jab'];
    public $timestamps = false; // Menonaktifkan penggunaan timestamp

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jab');
    }
}
?>  