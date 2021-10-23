<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

   public function test(Request $request)
    {


        if(($request->unit=='A')){
              
        $data=array();
 
        if(($request->math)>9){
              $data['math']='selected';
        }

        if(($request->physics)>9){
              $data['physics']='selected';
        } 
        if(($request->math)>9&&($request->physics)>9){
              $data['cse']='selected';
        }  

        if(($request->chemistry)>9){
              $data['chemistry']='selected';
        } 
    
        return $data;
            
        }


       if(($request->unit=='C')){
              
        $data=array();
 
        if(($request->bangla)>3){
              $data['bangla']='selected';
        }

        if(($request->english)>4){
              $data['english']='selected';
        }  

          if(($request->english)>5){
              $data['low']='selected';
        } 

    
        return $data;
            
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        else{
            return 'error';
        }
    }
}