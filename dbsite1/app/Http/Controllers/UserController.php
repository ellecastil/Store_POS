<?php 
    namespace App\Http\Controllers;
    
   
    use App\Models\User;    //your model
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser; //standardized code for api response
    use Illuminate\Http\Request;  //handling http request in lumen 
 
    
    Class UserController extends Controller {     
        use ApiResponser;
        
        private $request;
    
        public function __construct(Request $request){
        $this->request = $request;
        }

        public function index(){
            $user = User::all();
            return $this->successResponse($user);
        }

        public function showlogin(){
            return view('cashier_login');
        }

        public function result(){
            
            $username = $_POST["username"];
            $password = $_POST["password"];

            $login = app('db')->select("select * from tblcashier where username='$username' and password ='$password'");
                        
            if(empty($login)){
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }else{
                echo '<script>alert("Successfully logged in!")</script>';
                return view('category');
            }

        }
        
        public function addUser(Request $request){
            $rules =[
                'username' => 'required|max:20',
                'password' => 'required|max:20',
            ];  

            $user = User::create($request->all());  
            return $this->successResponse($user,Response::HTTP_CREATED);
        }

        public function show($id){

            $user = User::where('id',$id)->first();
            if($user){
                return $this->successResponse($user);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }

        public function update(Request $request, $id){
            $rules =[
                'username' => 'max:20',
                'password' => 'max:20',
                
            ]; 

            $this->validate($request,$rules);

            $user = User::where('id',$id)->first();
            if($user){
                $user -> fill($request->all());

                //no changes
                if($user->isClean()){
                    return $this->errorResponse('Requires at least 1 value to change', Response::HTTP_UNPROCESSABLE_ENTITY);
                }

                $user->save();
                return $this->successResponse($user);
             }
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
            
        }

        public function delete($id){
    
            $user = User::where('id',$id)->first();
            if($user){
                $user->delete();
                return $this->successResponse($user);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }


}
