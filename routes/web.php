<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecruiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'custom_middleware'], function () {
    ini_set('upload_max_filesize', '500M');
    ini_set('max_execution_time', 1000);
    ini_set('post_max_size', '500M');
    ini_set("memory_limit","256M");

});

Route::get('/test', function () {
        // Artisan::call('iseed users,jobs,applications --force');
        $mysqlHostName      = env('DB_HOST');
        $mysqlUserName      = env('DB_USERNAME');
        $mysqlPassword      = env('DB_PASSWORD'); 
        $DbName             = env('DB_DATABASE'); 
        $backup_name        = "backup.sql";
        $tables             = array("users", "jobs", "applications"); //here your tables...
    
        $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        $get_all_table_query = "SHOW TABLES";
        $statement = $connect->prepare($get_all_table_query);
        $statement->execute();
        $result = $statement->fetchAll();
    
        $output = '';
        foreach($tables as $table)
        {
            $show_table_query = "SHOW CREATE TABLE " . $table . "";
            $statement = $connect->prepare($show_table_query);
            $statement->execute();
            $show_table_result = $statement->fetchAll();
    
            foreach($show_table_result as $show_table_row)
            {
                $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
            }
            $select_query = "SELECT * FROM " . $table . "";
            $statement = $connect->prepare($select_query);
            $statement->execute();
            $total_row = $statement->rowCount();
    
            for($count=0; $count<$total_row; $count++)
            {
                $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
                $table_column_array = array_keys($single_result);
                $table_value_array = array_values($single_result);
                $output .= "\nINSERT INTO $table (";
                $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
                $output .= "'" . implode("','", $table_value_array) . "');\n";
            }
        }
        $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
        $file_handle = fopen($file_name, 'w+');
        fwrite($file_handle, $output);
        fclose($file_handle);
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_name));
        ob_clean();
        flush();
        readfile($file_name);
        unlink($file_name);
})->name('job');


Route::get('medevolt-doctors', function () {
    return view('careers.doctors');
})->name('doctors');


Route::get('medevolt-nursing', function () {
    return view('careers.nursing');
})->name('nursing');

Route::get('medevolt-allied-health', function () {
    return view('careers.allied-health');
})->name('allied-health');


Route::get('medevolt-about', function () {
    return view('support.about');
})->name('about');

// Route::get('/', function () {
//     return view('under_dev');
// })->name('welcome');

Route::get('medevolt-public-sector', function () {
    return view('solutions.nhs');
})->name('public');

Route::get('medevolt-private-sector', function () {
    return view('solutions.private');
})->name('private');

Route::get('medevolt-virtual-register', function () {
    return view('solutions.virtual-register');
})->name('virtual-register');

Route::get('medevolt-virtual-hospital', function () {
    return view('solutions.virtual-hospital');
})->name('virtual-hospital');

Route::get('medevolt-upload-document', function () {
    return view('compliance.upload-documents');
})->name('upload-document');


Route::get('medevolt-useful-document', function () {
    return view('compliance.useful-documents');
})->name('useful-documents');


Route::get('medevolt-news', function () {
    return view('support.news');
})->name('news');

Route::get('/backup_database', function (){
    Artisan::call('iseed jobs --force');
});

Route::get('medevolt-blog', function () {
    return view('support.blog');
})->name('blog');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/register-now', [ApplicationController::class, 'index'])->name('register-now');
Route::get('/register/{job}', [ApplicationController::class, 'registerJob'])->name('register-job');
Route::post('/register-now', [ApplicationController::class, 'store'])->name('register.store');

Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');

Route::get('latest-roles', [App\Http\Controllers\ApplicationController::class, 'roles'])->name('latest-roles');

Route::get('job/{id}', [App\Http\Controllers\ApplicationController::class, 'show'])->name('job.show');

Route::get('/', [App\Http\Controllers\ApplicationController::class, 'welcome'])->name('welcome');
// Route::get('/backup_database', [DashboardController::class, 'backup_database'])->name('backup_database');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('test', [UserController::class, 'test'])->name('test');
    Route::resource('users', UserController::class);
    Route::resource('questions', QuestionController::class);
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::put('profile/{id}', [UserController::class, 'updateProfile'])->name('update.profile');
    Route::resource('roles', RoleController::class);
    Route::resource('recruites', RecruiteController::class);
    Route::resource('jobs', JobController::class);
    Route::resource('documents', DocumentController::class);
    Route::get('changePassword', [UserController::class, 'changepasswordForm'])->name('password.change');
    Route::post('changepassword', [UserController::class, 'changepassword'])->name('change.password');

});