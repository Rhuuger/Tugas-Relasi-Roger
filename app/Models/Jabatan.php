<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    
    protected $table = 'jabatan';
    protected $primaryKey = 'id_jab';
    protected $fillable = ['nama_jab', 'gaji_pokok', 'tunjangan'];
    public $timestamps = false;                 

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_jab');
    }
}
?>