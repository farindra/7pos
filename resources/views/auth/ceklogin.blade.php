
<!-- @if(Auth::check)
			$return_arr["status"]=1;		
@else
			$return_arr["status"]=0;	
		
@endif -->
$return_arr["status"]=0;
	//	{{ json_encode($return_arr) }} // return value 
echo json_encode($return_arr) ;
//exit();
