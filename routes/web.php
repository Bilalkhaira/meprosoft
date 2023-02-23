<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\Services\ServicesController;

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





Route::post('saveMsg', [ContactusController::class, 'save'])->name('saveMsg');

Route::prefix('eventAndNews')->group(function () {

    Route::get('/', function () {
        return view('pages.eventAndNews.index');
    })->name('eventAndNews.index');

});

Route::prefix('careers')->group(function () {

    Route::get('/', function () {
        return view('pages.careers.index');
    })->name('careers.index');

});

Route::prefix('services')->group(function () {

    Route::get('applicationMigrationConversion', function () {
        return view('pages.services.applicationMigrationConversion');
    })->name('services.applicationMigrationConversion');

    Route::get('enterpriseSolutionConsulting', function () {
        return view('pages.services.enterpriseSolutionConsulting');
    })->name('services.enterpriseSolutionConsulting');

    Route::get('GSTMigration', function () {
        return view('pages.services.GSTMigration');
    })->name('services.GSTMigration');

    Route::get('IPOCompliance', function () {
        return view('pages.services.IPOCompliance');
    })->name('services.IPOCompliance');

    Route::get('PLCMESWeighBridgeIntegration', function () {
        return view('pages.services.PLCMESWeighBridgeIntegration');
    })->name('services.PLCMESWeighBridgeIntegration');

    Route::get('resourceArgumentation', function () {
        return view('pages.services.resourceArgumentation');
    })->name('services.resourceArgumentation');

    Route::get('riseWithS4HANAImplementation', function () {
        return view('pages.services.riseWithS4HANAImplementation');
    })->name('services.riseWithS4HANAImplementation');

    Route::get('SAPSupport', function () {
        return view('pages.services.SAPSupport');
    })->name('services.SAPSupport');

    // Route::get('digitalManufacturingCloud', function () {
    //     return view('pages.services.digitalManufacturingCloud');
    // })->name('services.digitalManufacturingCloud');

    // Route::get('applicationLifeCycleManagement', function () {
    //     return view('pages.services.applicationLifeCycleManagement');
    // })->name('services.applicationLifeCycleManagement');

    // Route::get('SAPFioriDevelopment', function () {
    //     return view('pages.services.SAPFioriDevelopment');
    // })->name('services.SAPFioriDevelopment');

});


Route::prefix('home/CorporateOverview')->group(function () {

    Route::get('about', function () {
        return view('pages.home.corporateOverview.about');
    })->name('home.about');

    Route::get('managementTeam', function () {
        return view('pages.home.corporateOverview.managementTeam');
    })->name('home.managementTeam');

    Route::get('coreValues', function () {
        return view('pages.home.corporateOverview.coreValues');
    })->name('home.coreValues');

    Route::get('whyMesprosoft', function () {
        return view('pages.home.corporateOverview.whyMesprosoft');
    })->name('home.whyMesprosoft');
    
});

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

            Route::get('/{id}', [ServicesController::class, 'index'])->name('service.index');
            Route::post('/', [ServicesController::class, 'getServicePage'])->name('service.getServicePage');

            Route::post('/createToSection', [ServicesController::class, 'createToSection'])->name('service.createToSection');
            Route::post('/storeToSection', [ServicesController::class, 'storeToSection'])->name('service.storeToSection');
            Route::get('/editToSection/{id}', [ServicesController::class, 'editToSection'])->name('service.editToSection');
            Route::put('/updateToSection/{id}', [ServicesController::class, 'updateToSection'])->name('service.updateToSection');

            Route::get('/createExplanationSection/{id?}', [ServicesController::class, 'createExplanationSection'])->name('service.createExplanationSection');
            Route::get('/editExplanationSection/{id}', [ServicesController::class, 'editExplanationSection'])->name('service.editExplanationSection');
            Route::post('/storeExplanationSection', [ServicesController::class, 'storeExplanationSection'])->name('service.storeExplanationSection');
            Route::put('/updateExplanationSection/{id}', [ServicesController::class, 'updateExplanationSection'])->name('service.updateExplanationSection');

            Route::get('/editCard/{id}', [ServicesController::class, 'editCard'])->name('service.editCard');
            Route::get('/createCard/{id}', [ServicesController::class, 'createCard'])->name('service.createCard');
            Route::post('/storeCard', [ServicesController::class, 'storeCard'])->name('service.storeCard');
            Route::delete('/deleteCard/{id}', [ServicesController::class, 'deleteCard'])->name('service.deleteCard');
            Route::put('/updateCard/{id}', [ServicesController::class, 'updateCard'])->name('service.updateCard');
            
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
