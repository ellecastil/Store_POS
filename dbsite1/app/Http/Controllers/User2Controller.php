<?php 
    namespace App\Http\Controllers;
    
    //use App\User;
    use App\Models\User2;    //your model
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser; //standardized code for api response
    use Illuminate\Http\Request;  //handling http request in lumen 

    
    Class User2Controller extends Controller {     
        use ApiResponser;
        
        private $request;
    
        public function __construct(Request $request){
        $this->request = $request;
        }

        public function index(){
            $user2 = User2::all();
            return $this->successResponse($user2);
        }
        
        public function addUser(Request $request){
            $rules =[
                'username' => 'required|max:20',
                'password' => 'required|max:20',
            ];  
            
            $user2 = User2::create($request->all());  
            return $this->successResponse($user2,Response::HTTP_CREATED);
        }

        public function show($id){

            $user2 = User2::where('id',$id)->first();
            if($user2){
                return $this->successResponse($user2);
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

            // $this->validate($request,$rules);
            $user2 = User2::where('id',$id)->first();
            if($user2){
                $user2 -> fill($request->all());

                //no changes
                if($user2->isClean()){
                    return $this->errorResponse('Requires at least 1 value to change', Response::HTTP_UNPROCESSABLE_ENTITY);
                }

                $user2->save();
                return $this->successResponse($user2);
             }
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
            
        }

        public function delete($id){
            

            $user2 = User2::where('id',$id)->first();
            if($user2){
                $user2->delete();
                return $this->successResponse($user2);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }


}
