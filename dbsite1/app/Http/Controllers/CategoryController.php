<?php 
    namespace App\Http\Controllers;
    
    //use App\User;
    use App\Models\Category;    //your model
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser; //standardized code for api response
    use Illuminate\Http\Request;  //handling http request in lumen 
    use DB;
    
    Class CategoryController extends Controller {     
        use ApiResponser;
        
        private $request;
    
        public function __construct(Request $request){
        $this->request = $request;
        }

        public function index(){
            $category = Category::all();
            return $this->successResponse($category);
        }

        public function showView(){
            return view('category');
        }
        
        public function addCategory(Request $request){
            $rules =[
                'category' => 'required|max:20',
            ];  

            $category = Category::create($request->all());  //this the data you will fill in your users fillable
            return $this->successResponse($category,Response::HTTP_CREATED);
        }

        public function show($id){
        
            $category = Category::where('cat_id',$id)->first();
            if($category){
                return $this->successResponse($category);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }

        public function update(Request $request, $id){
            $rules =[
                'category' => 'max:20',
            ]; //not required so we could use patch

            $this->validate($request,$rules);

            $category = Category::where('cat_id',$id)->first();
            if($category){
                $category -> fill($request->all());

                //no changes
                if($category->isClean()){
                    return $this->errorResponse('Requires at least 1 value to change', Response::HTTP_UNPROCESSABLE_ENTITY);
                }

                $category->save();
                return $this->successResponse($category);
             }
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
            
        }

        public function delete($id){
   
            $category = Category::where('cat_id',$id)->first();
            if($category){
                $category->delete();
                return $this->successResponse($category);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }


}
