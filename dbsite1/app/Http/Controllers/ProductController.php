<?php 
    namespace App\Http\Controllers;
    
    use App\Models\Products;    //your model
    use Illuminate\Http\Response;
    use App\Traits\ApiResponser; //standardized code for api response
    use Illuminate\Http\Request;  //handling http request in lumen 
    use DB;
    use App\Models\Category;
    
    Class ProductController extends Controller {     
        use ApiResponser;
        
        private $request;
    
        public function __construct(Request $request){
        $this->request = $request;
        }

        public function index(){
            $product = Products::all();
            return $this->successResponse($product);
        }

        public function showPage(){
            return view('product');
        }

        public function result(){
            

        }
        
        public function addProduct(Request $request){
            $rules =[
                'product' => 'required|max:20',
                'cat_id' => 'required|numeric|min:1|not_in:0',
                'cost_price' => 'required|max:20',
                'qty' => 'required|max:20',
                'barcode' => 'required|max:20',
            ];  

            $this->validate($request,$rules);
            $category = Category::findorFail($request->cat_id); 
            
            $product = Products::create($request->all());  
            return $this->successResponse($product,Response::HTTP_CREATED);
        }

        public function show($id){
            $product = Products::where('id',$id)->first();
            if($product){
                return $this->successResponse($product);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }

        public function update(Request $request, $id){
            $rules =[
                'product' => 'max:20',
                'cat_id' => 'required|numeric|min:1|not_in:0',
                'cost_price' => 'max:20',
                'qty' => 'max:20',
                'barcode' => 'max:20',
            ]; 

            $this->validate($request,$rules);

          
            $category = Category::findorFail($request->cat_id);
            $product = Products::where('id',$id)->first();
            if($product){
                $product -> fill($request->all());

                //no changes
                if($product->isClean()){
                    return $this->errorResponse('Requires at least 1 value to change', Response::HTTP_UNPROCESSABLE_ENTITY);
                }

                $product->save();
                return $this->successResponse($product);
             }
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
            
        }

        public function delete($id){
            
            $product = Products::where('id',$id)->first();
            if($product){
                $product->delete();
                return $this->successResponse($product);
            }
            else
            {
                return $this->errorResponse('User Does not Exists',Response::HTTP_NOT_FOUND);
            }
        }


}
