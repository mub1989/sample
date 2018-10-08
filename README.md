## Artical CRUD
Complete CRUD operation for Articals using laravel repository design pattern

###Installing
Download the project from Git hub
```
git clone https://github.com/mub1989/sample.git
```

 create the databases by running the below code
  ```
 php artisan migrate
 php artisan migrate --database=sampletest
  ```

 #####Databases
 ```
 sample
 sampletest(This database for testing purpose)
 ``` 
###Unit Test
Run the below code to test the unit test inside the project folder
```
 php vendor/phpunit/phpunit/phpunit
 ``` 

###Routes used for perform action
Below routes used under routes folde api.php
```
 Route::get('articals', 'ArticalController@index');
 Route::get('articals/{article}', 'ArticalController@show');
 Route::post('articals', 'ArticalController@store');
 Route::put('articals/{article}', 'ArticalController@update');
 Route::delete('articals/{article}', 'ArticalController@destroy');
 ```
 
 ####Codes 
Perform crud operation from `ArticalController.php`
 ```
 <?php
 
 namespace App\Http\Controllers;
 
 use App\Http\Requests\ArticalRequest;
 use App\Repositories\ArticalRepository;
 
 class ArticalController extends Controller
 {
     /**
      * @var ArticalRepository
      */
     private $articalRepository;
 
     /**
      * ArticalController constructor.
      * @param ArticalRepository $articalRepository
      */
     public function __construct(ArticalRepository $articalRepository)
     {
         //$this->repository = $repository;
         $this->articalRepository = $articalRepository;
     }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         return $this->articalRepository->all();
     }
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  ArticalRequest $request
      * @return \Illuminate\Http\Response
      */
     public function store(ArticalRequest $request)
     {
         $artical = $this->articalRepository->create($request->validated());
         return response()->json($artical, 200);
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $artical = $this->articalRepository->find($id);
         if($artical){
             return response()->json($artical, 200);
         }else{
             return response()->json('No records found', 500);
         }
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  ArticalRequest $request
      * @param  int $id
      * @return \Illuminate\Http\Response
      */
     public function update(ArticalRequest $request, $id)
     {
         $artical = $this->articalRepository->update($request->validated(), $id);
         return response()->json($artical, 200);
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         return $this->articalRepository->delete($id);
     }
 }

 ```
 `Artical.php` Model used to interact with database
 ```
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artical extends Model
{
    protected $table = 'articals';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'description', 'body'];
}
 ```
 
 