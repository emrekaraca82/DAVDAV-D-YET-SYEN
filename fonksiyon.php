

  <?php 
  
     function pre($deger){
		 
		 global $db;
		 
		 return $db->prepare($deger);		 
		 
	 }
	 
	  function fetch($deger){
		 				 
		 return $deger->fetch(PDO::FETCH_ASSOC);		 
		 
	 }  
	 
	  function all($deger){
		 				 
		 return $deger->fetchAll(PDO::FETCH_ASSOC);		 
		 
	 }
	 
  
    function p($par,$st = false) {
		
		if($st){
			
			return strip_tags(trim($_POST[$par]));
			
		}else{
			
			return trim($_POST[$par]);
			
		}
		
	}
    	
	function g($par) {
		
		return $_GET[$par];
		
	}
	

  ?>