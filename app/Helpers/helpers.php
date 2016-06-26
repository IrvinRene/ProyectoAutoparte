<?php	
	function isMember(){
		if(Auth::check() and Auth::user()->idrol <= 5 ){
			return true;
		}

		return false;
	}