<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) 
    {
    	return " 
			<h5>John Doe  
    			<form action='/user/1' method='post'> 
    			 	<input type='hidden' name='_method' value='DELETE'/>
    				<input type='hidden' name='_token' value='".csrf_token()."'/> 
    				<button type='submit'  style='color:red'>Delete</button> 
    			</form>	 
			</h5>
 
			<h5>Jane Doe  
				<form action='/user/2' method='post'>
					<input type='hidden' name='_method' value='DELETE'/>
					<input type='hidden' name='_token' value='".csrf_token()."'/>
					<button type='submit'  style='color:red'>Delete</button> 
				</form>	 
			</h5>
 
    		<form action='' method='post'>  
				<input type='hidden' name='_token' value='".csrf_token()."'/>
				<input type='text' name='fullname'/>
				<input type='submit' value='submit!' /> 
    		</form> 
    	";
    }
    public function show($id) 
    { 
		return "  
    		<form action='' method='post'>   
				<input type='hidden' name='_method' value='PATCH'/>
				<input type='hidden' name='_token' value='".csrf_token()."'/>
				<input type='text' name='fullname' value='John Doe'/>
				<input type='submit' value='update!' /> 
    		</form> 
    	"; 
    }
    public function store(Request $request) 
    { 
    	echo("Store!"); 
    	
        dd($request->all());
    }
    public function update(Request $request, $id) 
    {
    	echo("Patch!"); 
		
        dd($request->all());
    }
   	public function destroy($id) 
    {
   		echo ("Delete!");

   		dd(" Delete this user id" . $id);

   	} 
}
