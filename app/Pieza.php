<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = 'piezas';
	
	/*public function scopePza($query, $pz)
    {
    	
    	if($pz != ""){
    	$query->where('pieza',"like","%$pz%");
    	}
    	else{
    	}
    	
    
    
    }*/
}

?>
