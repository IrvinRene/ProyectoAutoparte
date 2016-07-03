<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Agnos extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = 'agnos';
	
    public static function agnos($id){
    	return Agnos::where('id', '=', $id)
    	->get();
    }
}

?>