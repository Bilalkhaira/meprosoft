<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\Services\MigrationAndConversionController;

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

Route::get('/clear', function () {
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    Artisan::call('optimize:clear');
    return 'clear done';
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'migrated successfully';
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('contactUs', function () {
    return view('pages.contactUs');
})->name('contactUs');

Route::get('about', function () {
    return view('pages.about');
})->name('about');

Route::get('applicationMigrationConversion', function () {
    return view('pages.services.applicationMigrationConversion');
})->name('applicationMigrationConversion');

Route::post('saveMsg', [ContactusController::class, 'save'])->name('saveMsg');


Route::prefix('productAndSolution')->group(function () {

    Route::get('/dispatchAutomation', function () {
        return view('pages.productAndSolution.dispatchAutomation');
    })->name('productAndSolution.dispatchAutomation');

    Route::get('/dynamicMachineScheduling', function () {
        return view('pages.productAndSolution.dynamicMachineScheduling');
    })->name('productAndSolution.dynamicMachineScheduling');

    Route::get('/electronicBatchManufacturing', function () {
        return view('pages.productAndSolution.electronicBatchManufacturing');
    })->name('productAndSolution.electronicBatchManufacturing');

    Route::get('/handheldMobileBarCode', function () {
        return view('pages.productAndSolution.handheldMobileBarCode');
    })->name('productAndSolution.handheldMobileBarCode');

    Route::get('/loanManagementSolution', function () {
        return view('pages.productAndSolution.loanManagementSolution');
    })->name('productAndSolution.loanManagementSolution');

    Route::get('/mesproGPSPreconfiguredAnalytics', function () {
        return view('pages.productAndSolution.mesproGPSPreconfiguredAnalytics');
    })->name('productAndSolution.mesproGPSPreconfiguredAnalytics');

    Route::get('/mesproLifeScienceCFRPart11', function () {
        return view('pages.productAndSolution.mesproLifeScienceCFRPart11');
    })->name('productAndSolution.mesproLifeScienceCFRPart11');

    Route::get('/mesproOptimizedMRP', function () {
        return view('pages.productAndSolution.mesproOptimizedMRP');
    })->name('productAndSolution.mesproOptimizedMRP');

    Route::get('/mesproPaperessManufacturing', function () {
        return view('pages.productAndSolution.mesproPaperessManufacturing');
    })->name('productAndSolution.mesproPaperessManufacturing');

    Route::get('/MesproX-Steps', function () {
        return view('pages.productAndSolution.MesproX-Steps');
    })->name('productAndSolution.MesproX-Steps');

    Route::get('/O2CAutomation', function () {
        return view('pages.productAndSolution.O2CAutomation');
    })->name('productAndSolution.O2CAutomation');

    Route::get('/purchaseBudgetCheckAndApproval', function () {
        return view('pages.productAndSolution.purchaseBudgetCheckAndApproval');
    })->name('productAndSolution.purchaseBudgetCheckAndApproval');

    Route::get('/smartFoundry', function () {
        return view('pages.productAndSolution.smartFoundry');
    })->name('productAndSolution.smartFoundry');

    Route::get('/TS16949CompliantKAPA', function () {
        return view('pages.productAndSolution.TS16949CompliantKAPA');
    })->name('productAndSolution.TS16949CompliantKAPA');
    
});

Route::prefix('caseStudy')->group(function () {

    Route::get('/digitalManufacturing', function () {
        return view('pages.caseStudy.digitalManufacturing');
    })->name('caseStudy.digitalManufacturing');

    Route::get('/mesproPaperlessManufacturing', function () {
        return view('pages.caseStudy.mesproPaperlessManufacturing');
    })->name('caseStudy.mesproPaperlessManufacturing');

    Route::get('/foodIndustry', function () {
        return view('pages.caseStudy.foodIndustry');
    })->name('caseStudy.foodIndustry');
    
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    })->name('admin');

    Route::prefix('pages')->group(function () {
        Route::prefix('home')->group(function () {
            Route::get('/', [HomeController::class, 'homeSetting'])->name('home.setting');
            Route::get('/createNewSlide', [HomeController::class, 'createNewSlide'])->name('home.createNewSlide');
            Route::get('/createNewProduct', [HomeController::class, 'createNewProduct'])->name('home.createNewProduct');
            Route::get('/createNewService', [HomeController::class, 'createNewService'])->name('home.createNewService');
            Route::get('/editMainSection', [HomeController::class, 'editMainSection'])->name('home.editMainSection');
            Route::get('/editProductMainSection', [HomeController::class, 'editProductMainSection'])->name('home.editProductMainSection');
            Route::get('/editStisfiedCustomersSetting', [HomeController::class, 'editStisfiedCustomersSetting'])->name('home.editStisfiedCustomersSetting');
            Route::get('/editBuildingEfficiencySection', [HomeController::class, 'editBuildingEfficiencySection'])->name('home.editBuildingEfficiencySection');
            Route::get('/editPercentageSection', [HomeController::class, 'editPercentageSection'])->name('home.editPercentageSection');
            // Route::get('/editQuestonsSection', [HomeController::class, 'editQuestonsSection'])->name('home.editQuestonsSection');
            Route::post('/updateSatisfiedSection', [HomeController::class, 'updateSatisfiedSection'])->name('update.satisfiedSection');
        });

        Route::prefix('service')->group(function () {
            Route::get('/', [MigrationAndConversionController::class, 'index'])->name('service.index');
            Route::get('/createWhatWeDoCard', [MigrationAndConversionController::class, 'createWhatWeDoCard'])->name('service.createWhatWeDoCard');
            Route::get('/editWhatWeDoCardMainSection', [MigrationAndConversionController::class, 'editWhatWeDoCardMainSection'])->name('service.editWhatWeDoCardMainSection');
            Route::get('/editWhatWeDoCard', [MigrationAndConversionController::class, 'editWhatWeDoCard'])->name('service.editWhatWeDoCard');
            Route::get('/editOurProgressSection', [MigrationAndConversionController::class, 'editOurProgressSection'])->name('service.editOurProgressSection');
            Route::get('/editOurProgressSectionCard', [MigrationAndConversionController::class, 'editOurProgressSectionCard'])->name('service.editOurProgressSectionCard');
            Route::get('/createOurProgessCard', [MigrationAndConversionController::class, 'createOurProgessCard'])->name('service.createOurProgessCard');
            Route::get('/editJoinOurCommunity', [MigrationAndConversionController::class, 'editJoinOurCommunity'])->name('service.editJoinOurCommunity');
        });
    });

    Route::prefix('faq')->group(function () {
        Route::get('/', [FAQController::class, 'index'])->name('faq.index');
        Route::get('edit/{id}', [FAQController::class, 'edit'])->name('faq.edit');
    });




    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/updateprofile', [ProfileController::class, 'updateprofile'])->name('updateprofile');
    Route::get('deleteProfilePhoto', [ProfileController::class, 'deleteProfilePhoto'])->name('delete.profilePhoto');
    Route::post('passwordReset', [ProfileController::class, 'passwordReset'])->name('reset.password');
});


// Notification Routes
Route::get('/allNotifiMarkAsRead', [NotificationController::class, 'allNotifiMarkAsRead'])->name('allNotifiMarkAsRead');
Route::post('/notifiMarkAsRead', [NotificationController::class, 'notifiMarkAsRead'])->name('notifiMarkAsRead');
Route::post('/deleteNotification', [NotificationController::class, 'deleteNotification'])->name('deleteNotification');
Route::get('/deleteAllNotification', [NotificationController::class, 'deleteAllNotification'])->name('deleteAllNotification');
Route::get('/notificationDetail/{id}', [NotificationController::class, 'notificationDetail'])->name('notificationDetail');
