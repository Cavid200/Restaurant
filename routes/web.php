<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MenuController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TimeController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\FilialController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\JournalController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscoverController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PersonalController;
use App\Http\Controllers\Admin\HomeImageController;
use App\Http\Controllers\User\ReservationController;
use App\Http\Controllers\Admin\ContactInfoController;
use App\Http\Controllers\Admin\OpeningHourController;
use App\Http\Controllers\Admin\ContactImageController;
use App\Http\Controllers\Admin\GalleryImageController;
use App\Http\Controllers\Admin\OurRestorantController;
use App\Http\Controllers\Admin\DiscoverImageController;
use App\Http\Controllers\Admin\SocialNetworkController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\OurRestoranImageController;
use App\Http\Controllers\User\IndexController as UserIndexController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;

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
Route::get('language/{locale}',function($locale){
    app()->setLocale($locale);
    session()->put('locale',$locale);
    return redirect()->back();
})->name('locale');



Route::get('/',[UserIndexController::class,'index'])->name('home.index');
Route::get('/menu',[MenuController::class,'index'])->name('menu.index');
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/reservation',[ReservationController::class,'index'])->name('reservation.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/journal',[JournalController::class,'index'])->name('journal.index');
Route::get('/login',[AuthController::class,'index'])->name('admin.login');
Route::post('/postlogin',[AuthController::class,'post_login'])->name('admin.post_login');
    
   
Route::group(['middleware'=>'auth','prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::group(['prefix'=>'language','as'=>'language.'],function(){
        Route::get('/',[LanguageController::class,'index'])->name('index');
        Route::get('/create',[LanguageController::class,'create'])->name('create');
        Route::post('/store',[LanguageController::class,'store'])->name('store');
        Route::get('/edit/{language}',[LanguageController::class,'edit'])->name('edit');
        Route::post('/update/{language}',[LanguageController::class,'update'])->name('update');
        Route::get('/delete/{language}',[LanguageController::class,'destroy'])->name('destroy');
        Route::get('/active/{language}',[LanguageController::class,'active'])->name('active');
        
    });

    Route::group(['prefix'=>'home_image','as'=>'home_image.'],function(){
        Route::get('/',[HomeImageController::class,'index'])->name('index');
        Route::get('/create',[HomeImageController::class,'create'])->name('create');
        Route::post('/store',[HomeImageController::class,'store'])->name('store');
        Route::get('/edit/{home_image}',[HomeImageController::class,'edit'])->name('edit');
        Route::post('/update/{home_image}',[HomeImageController::class,'update'])->name('update');
        Route::get('/delete/{home_image}',[HomeImageController::class,'destroy'])->name('destroy');
    });

    Route::group(['prefix'=>'discover_image','as'=>'discover_image.'],function(){
        Route::get('/',[DiscoverImageController::class,'index'])->name('index');
        Route::get('/create',[DiscoverImageController::class,'create'])->name('create');
        Route::post('/store',[DiscoverImageController::class,'store'])->name('store');
        Route::get('/edit/{discover_image}',[DiscoverImageController::class,'edit'])->name('edit');
        Route::post('/update/{discover_image}',[DiscoverImageController::class,'update'])->name('update');
        Route::get('/delete/{discover_image}',[DiscoverImageController::class,'destroy'])->name('destroy');

    });


    Route::group(['prefix'=>'our_restoran_image','as'=>'our_restoran_image.'],function(){
        Route::get('/',[OurRestoranImageController::class,'index'])->name('index');
        Route::get('/create',[OurRestoranImageController::class,'create'])->name('create');
        Route::post('/store',[OurRestoranImageController::class,'store'])->name('store');
        Route::get('/edit/{our_restoran_image}',[OurRestoranImageController::class,'edit'])->name('edit');
        Route::post('/update/{our_restoran_image}',[OurRestoranImageController::class,'update'])->name('update');
        Route::get('/delete/{our_restoran_image}',[OurRestoranImageController::class,'destroy'])->name('destroy');

    });

    Route::group(['prefix'=>'our_restorant','as'=>'our_restorant.'],function(){
       Route::get('/',[OurRestorantController::class,'index'])->name('index');
       Route::get('/create',[OurRestorantController::class,'create'])->name('create');
       Route::post('/store',[OurRestorantController::class,'store'])->name('store');
       Route::get('/edit/{our_restorant}',[OurRestorantController::class,'edit'])->name('edit');
       Route::post('/update/{our_restorant}',[OurRestorantController::class,'update'])->name('update');
       Route::get('/delete/{our_restorant}',[OurRestorantController::class,'destroy'])->name('destroy');

    });

    Route::group(['prefix'=>'our_team','as'=>'our_team.'],function(){
        Route::get('/',[OurTeamController::class,'index'])->name('index');
        Route::get('/create',[OurTeamController::class,'create'])->name('create');
        Route::post('/store',[OurTeamController::class,'store'])->name('store');
        Route::get('/edit/{our_team}',[OurTeamController::class,'edit'])->name('edit');
        Route::post('/update/{our_team}',[OurTeamController::class,'update'])->name('update');
        Route::get('/delete/{our_team}',[OurTeamController::class,'destroy'])->name('destroy');

    });

    Route::group(['prefix'=>'discover','as'=>'discover.'],function(){
        Route::get('/',[DiscoverController::class,'index'])->name('index');
        Route::get('/create',[DiscoverController::class,'create'])->name('create');
        Route::post('/store',[DiscoverController::class,'store'])->name('store');
        Route::get('/edit/{discover}',[DiscoverController::class,'edit'])->name('edit');
        Route::post('/update/{discover}',[DiscoverController::class,'update'])->name('update');
        Route::get('/delete/{discover}',[DiscoverController::class,'destroy'])->name('destroy');
    });

    Route::group(['prefix'=>'contact_info','as'=>'contact_info.'],function(){
        Route::get('/',[ContactInfoController::class,'index'])->name('index');
        Route::get('/create',[ContactInfoController::class,'create'])->name('create');
        Route::post('/store',[ContactInfoController::class,'store'])->name('store');
        Route::get('/edit/{contact_info}',[ContactInfoController::class,'edit'])->name('edit');
        Route::post('/update/{contact_info}',[ContactInfoController::class,'update'])->name('update');
        Route::get('/delete/{contact_info}',[ContactInfoController::class,'destroy'])->name('destroy');
    });

    Route::group(['prefix'=>'home','as'=>'home.'],function(){
        Route::get('/',[HomeController::class,'index'])->name('index');
        Route::get('/create',[HomeController::class,'create'])->name('create');
        Route::post('/store',[HomeController::class,'store'])->name('store');
        Route::get('/edit/{home}',[HomeController::class,'edit'])->name('edit');
        Route::post('/update/{home}',[HomeController::class,'update'])->name('update');
        Route::get('/delete/{home}',[HomeController::class,'destroy'])->name('destroy');
        

    });

    Route::group(['prefix'=>'person','as'=>'person.'],function(){
        Route::get('/',[PersonController::class,'index'])->name('index');
        Route::get('/create',[PersonController::class,'create'])->name('create');
        Route::post('/store',[PersonController::class,'store'])->name('store');
        Route::get('/edit/{person}',[PersonController::class,'edit'])->name('edit');
        Route::post('/update/{person}',[PersonController::class,'update'])->name('update');
        Route::get('/delete/{person}',[PersonController::class,'destroy'])->name('destroy');
        

    }); 
    Route::group(['prefix'=>'time','as'=>'time.'],function(){
        Route::get('/',[TimeController::class,'index'])->name('index');
        Route::get('/create',[TimeController::class,'create'])->name('create');
        Route::post('/store',[TimeController::class,'store'])->name('store');
        Route::get('/edit/{time}',[TimeController::class,'edit'])->name('edit');
        Route::post('/update/{time}',[TimeController::class,'update'])->name('update');
        Route::get('/delete/{time}',[TimeController::class,'destroy'])->name('destroy');
        

    }); 

    Route::group(['prefix'=>'filial','as'=>'filial.'],function(){
        Route::get('/',[FilialController::class,'index'])->name('index');
        Route::get('/create',[FilialController::class,'create'])->name('create');
        Route::post('/store',[FilialController::class,'store'])->name('store');
        Route::get('/edit/{filial}',[FilialController::class,'edit'])->name('edit');
        Route::post('/update/{filial}',[FilialController::class,'update'])->name('update');
        Route::get('/delete/{filial}',[FilialController::class,'destroy'])->name('destroy');
        

    }); 

    Route::group(['prefix'=>'gallery_category','as'=>'gallery_category.'],function(){
        Route::get('/',[GalleryCategoryController::class,'index'])->name('index');
        Route::get('/create',[GalleryCategoryController::class,'create'])->name('create');
        Route::post('/store',[GalleryCategoryController::class,'store'])->name('store');
        Route::get('/edit/{gallery_category}',[GalleryCategoryController::class,'edit'])->name('edit');
        Route::post('/update/{gallery_category}',[GalleryCategoryController::class,'update'])->name('update');
        Route::get('/delete/{gallery_category}',[GalleryCategoryController::class,'destroy'])->name('destroy');
        Route::get('/active/{gallery_category}',[GalleryCategoryController::class,'active'])->name('active');
        

    }); 

    Route::group(['prefix'=>'gallery_image','as'=>'gallery_image.'],function(){
        Route::get('/',[GalleryImageController::class,'index'])->name('index');
        Route::get('/create',[GalleryImageController::class,'create'])->name('create');
        Route::post('/store',[GalleryImageController::class,'store'])->name('store');
        Route::get('/edit/{gallery_image}',[GalleryImageController::class,'edit'])->name('edit');
        Route::post('/update/{gallery_image}',[GalleryImageController::class,'update'])->name('update');
        Route::get('/delete/{gallery_image}',[GalleryImageController::class,'destroy'])->name('destroy');
       
        

    }); 

    Route::group(['prefix'=>'gallery_image','as'=>'gallery_image.'],function(){
        Route::get('/',[GalleryImageController::class,'index'])->name('index');
        Route::get('/create',[GalleryImageController::class,'create'])->name('create');
        Route::post('/store',[GalleryImageController::class,'store'])->name('store');
        Route::get('/edit/{gallery_image}',[GalleryImageController::class,'edit'])->name('edit');
        Route::post('/update/{gallery_image}',[GalleryImageController::class,'update'])->name('update');
        Route::get('/delete/{gallery_image}',[GalleryImageController::class,'destroy'])->name('destroy');
       
        

    }); 

    Route::group(['prefix'=>'category','as'=>'category.'],function(){
        Route::get('/',[CategoryController::class,'index'])->name('index');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/store',[CategoryController::class,'store'])->name('store');
        Route::get('/edit/{category}',[CategoryController::class,'edit'])->name('edit');
        Route::post('/update/{category}',[CategoryController::class,'update'])->name('update');
        Route::get('/delete/{category}',[CategoryController::class,'destroy'])->name('destroy');
        Route::get('/active/{category}',[CategoryController::class,'active'])->name('active');
    }); 


    Route::group(['prefix'=>'category','as'=>'category.'],function(){
        Route::get('/',[CategoryController::class,'index'])->name('index');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/store',[CategoryController::class,'store'])->name('store');
        Route::get('/edit/{category}',[CategoryController::class,'edit'])->name('edit');
        Route::post('/update/{category}',[CategoryController::class,'update'])->name('update');
        Route::get('/delete/{category}',[CategoryController::class,'destroy'])->name('destroy');
        Route::get('/active/{category}',[CategoryController::class,'active'])->name('active');
    }); 

    Route::group(['prefix'=>'personal','as'=>'personal.'],function(){
        Route::get('/',[PersonalController::class,'index'])->name('index');
        Route::get('/create',[PersonalController::class,'create'])->name('create');
        Route::post('/store',[PersonalController::class,'store'])->name('store');
        Route::get('/edit/{personal}',[PersonalController::class,'edit'])->name('edit');
        Route::post('/update/{personal}',[PersonalController::class,'update'])->name('update');
        Route::get('/delete/{personal}',[PersonalController::class,'destroy'])->name('destroy');
        Route::get('/active/{personal}',[PersonalController::class,'active'])->name('active');
    }); 

    Route::group(['prefix'=>'contact_image','as'=>'contact_image.'],function(){
        Route::get('/',[ContactImageController::class,'index'])->name('index');
        Route::get('/create',[ContactImageController::class,'create'])->name('create');
        Route::post('/store',[ContactImageController::class,'store'])->name('store');
        Route::get('/edit/{contact_image}',[ContactImageController::class,'edit'])->name('edit');
        Route::post('/update/{contact_image}',[ContactImageController::class,'update'])->name('update');
        Route::get('/delete/{contact_image}',[ContactImageController::class,'destroy'])->name('destroy');
    }); 

    Route::group(['prefix'=>'reservation','as'=>'reservation.'],function(){
        Route::get('/',[AdminReservationController::class,'index'])->name('index');
        Route::get('/create',[AdminReservationController::class,'create'])->name('create');
        Route::post('/store',[AdminReservationController::class,'store'])->name('store');
        Route::get('/edit/{reservation}',[AdminReservationController::class,'edit'])->name('edit');
        Route::post('/update/{reservation}',[AdminReservationController::class,'update'])->name('update');
        Route::get('/delete/{reservation}',[AdminReservationController::class,'destroy'])->name('destroy');
    });

    Route::group(['prefix'=>'setting','as'=>'setting.'],function(){
        Route::get('/',[SettingController::class,'index'])->name('index');
        Route::get('/create',[SettingController::class,'create'])->name('create');
        Route::post('/store',[SettingController::class,'store'])->name('store');
        Route::get('/edit/{setting}',[SettingController::class,'edit'])->name('edit');
        Route::post('/update/{setting}',[SettingController::class,'update'])->name('update');
        Route::get('/delete/{setting}',[SettingController::class,'destroy'])->name('destroy');
    });


    Route::group(['prefix'=>'social_network','as'=>'social_network.'],function(){
        Route::get('/',[SocialNetworkController::class,'index'])->name('index');
        Route::get('/create',[SocialNetworkController::class,'create'])->name('create');
        Route::post('/store',[SocialNetworkController::class,'store'])->name('store');
        Route::get('/edit/{social_network}',[SocialNetworkController::class,'edit'])->name('edit');
        Route::post('/update/{social_network}',[SocialNetworkController::class,'update'])->name('update');
        Route::get('/delete/{social_network}',[SocialNetworkController::class,'destroy'])->name('destroy');
    });





    

    Route::group(['prefix'=>'opening_hour','as'=>'opening_hour.'],function(){
        Route::get('/',[OpeningHourController::class,'index'])->name('index');
        Route::get('/create',[OpeningHourController::class,'create'])->name('create');
        Route::post('/store',[OpeningHourController::class,'store'])->name('store');
        Route::get('/edit/{opening_hour}',[OpeningHourController::class,'edit'])->name('edit');
        Route::post('/update/{opening_hour}',[OpeningHourController::class,'update'])->name('update');
        Route::get('/delete/{opening_hour}',[OpeningHourController::class,'destroy'])->name('destroy');
    });

    

   

 





});


