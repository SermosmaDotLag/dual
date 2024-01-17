<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BreadModel extends Model
{
    protected $table = 'bread';
    protected $fillable = [
        'name',
        'celiac',
    ];

    public static function getAllBread(){
        return self::all();
    }

    public static function saveNewBread(string $name, string $celiac): BreadModel{
        $pan = new self([
            'name' => $name,
            'celiac' => $celiac,
        ]);

        $pan->save();

        return $pan;
    }

    public static function deleteBreadById(int $id){
        $bread = self::find($id);

        if (!is_null($bread)) {
            return $bread->delete(); 
        }
        return false;
        // return $bread;
    }

    public static function getBreadById(int $id): BreadModel{
        return self::find($id);
    }

    public function updateBread(string $name, string $celiac): BreadModel{
        $this->update([
            'name' => $name,
            'celiac' => $celiac,
        ]);

        return $this;
    }
}
?>
