<?php

namespace App\Controllers;
use App\Models\RegisterModel;
use App\Models\SignupModel;

class Home extends BaseController
{
    public function index()
    {   
      
      $data=[];
      helper(['form']);
      if($this->request->getMethod()=='post')
      {
        $rules = [
          'email'=> 'required|valid_email',
          'password'=> 'required|min_length[1]',
        ];
        $errors = [
          'password' => [
            'validateUser'=>'Email or Password do not match'
            ]
        ];

        if(!$this->validate($rules,$errors))
         {
          $data['validation'] = $this->validator;
         }
         else
         {
          //echo 'i am here';
           $model = new SignupModel();
       
           $admin = $model->where('email',$this->request->getVar('email'))->first();
           
         
          // print_r($admin); exit;
               if($admin)
               {
                
                return redirect()->to ('dashboard');
               }
                  
            // if($this->verifyMypassword($this->request->gatVar('password'),$admin['password']))
            //  {
            //    $this->setUserSession($admin);
            //    return redirect()->to ('dashboard');
            //  }
              else
               {
                $data['Flash_message']= TRUE;

               }
         }



      }
    
        return view('index',$data);

       
    }




    private function setUserSession($admin)
    {
      $data = [
           'id' => $admin ['id'],
           'firstname' => $admin('firstname'),
           'lastname' => $admin('lastname'),
           'email'=>$admin('email'),
           'isLoggedIn'=> true,
      ];
      session()->set($data);
      return true;
    }
      
   private function verifyMypassword($enterpassword,$databasePassword)
   {
     return password_verify($enterpassword,$databasePassword);

   }




   
   public function signup()
   {
            
     $data=[];
     helper('form');
     if($this->request->getMethod()=='post')
     {
        
        $rules=[
          'firstname'=>  'required',
          'lastname'=>  'required',
          //'email'=> 'required|valid_email',
          'email'=> 'required|valid_email|is_unique[signup.email]',
          'phone'=> 'required|min_length[1]',
          'password'=> 'required|min_length[1]',
          'confirmpassword'=> 'matches[password]',
          'address'=> 'required',
          'country'=> 'required',
          'state'=> 'required',
          'pin'=> 'required',
          
        ];


        if (!$this->validate($rules))
        {
          $data['validation']=$this->validator;
        }
        else
        {
         // echo 1111; exit;
         $model = new SignupModel();
         

         $newData=[
           
           'firstname' => $this->request->getVar('firstname'),
           'lastname' => $this->request->getVar('lastname'),
           'email'=>$this->request->getVar('email'),
           'phone'=>$this->request->getVar('phone'),
           'password'=>$this->request->getVar('password'),
           'address'=>$this->request->getVar('address'),
           'country'=>$this->request->getVar('country'),
           'state'=>$this->request->getVar('state'),
           'pin'=>$this->request->getVar('pin'),
           
           
           
         ]; 
         if($model->save($newData))
         {
          $data['Flash_message']= TRUE;
         }

        }
     }



      return view('signup',$data);     

     
   
   }
   




 

    public function register()
    {  


      $data=[];
      helper('form');
      if($this->request->getMethod()=='post')
      {
         
         $rules=[
           'first_name'=>  'required',
           'last_name'=>  'required',
           'email'=> 'required|valid_email',
           'phone'=> 'required|min_length[1]',
           'password'=> 'required|min_length[1]',
           'confirm_password'=> 'matches[password]',
           
         ];


         if (!$this->validate($rules))
         {
           $data['validation']=$this->validator;
         }
         else
         {
          // echo 1111; exit;
          $model = new RegisterModel();
          

          $newData=[
            
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'email'=>$this->request->getVar('email'),
            'phone'=>$this->request->getVar('phone'),
            'password'=>$this->request->getVar('password'),
          
            
            
          ]; 
          if($model->save($newData))
          {
           $data['Flash_message']= TRUE;
          }

         }
      }



       return view('register',$data);     




        
    }




    public function dashboard()
    {  

      $model = new SignupModel();
      $data['usersdata'] = $model->findAll();
      //print_r($data);
     
        return view('dashboard',$data);
       
    }

    
    public function edit($id)
    {  

      $model = new SignupModel();
      if($this->request->getMethod()=='post')
      {

        $newData=[
           
          'firstname' => $this->request->getVar('firstname'),
          'lastname' => $this->request->getVar('lastname'),
          'email' => $this->request->getVar('email'),
          'phone' => $this->request->getVar('phone'),
          'address' => $this->request->getVar('address'),
             
        ]; 

        if($model->update($id,$newData))
        {
         
          return redirect()->to ('dashboard');
         // $data['Flash_message']= TRUE;
        }

      }
      //echo $id; exit;

       
       $data['userdata'] = $model->where('id',$id)->first();
       //print_r($data);
        return view('edit',$data);
    }






   






   



      
    public function delete($id)
    {  

      $model = new SignupModel();
      
         if($model->where('id',$id)->delete())
         {
          return redirect()->to ('dashboard');
         }
         
          
        
        

      }
    

 

    



    public function logout()
    {
      session()->destroy();
      return redirect()->to ('/');
    }



}