<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CaseStudyControler;
use App\Http\Controllers\HomeMenuController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\NewsAndEventController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\ProductsAndSolutionController;
use App\Http\Controllers\Admin\Careers\CareersController;
use App\Http\Controllers\Admin\HomeMenu\MenuHomeController;
use App\Http\Controllers\Admin\Services\ServicesController;
use App\Http\Controllers\Admin\CaseStudy\CaseStudyController;
use App\Http\Controllers\Admin\ContactUs\ContactsUsController;
use App\Http\Controllers\Admin\NewsAndEvent\NewsEventController;
use App\Http\Controllers\Admin\ProductAndSolution\ProductAndSolutionController;

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


Route::post('saveMsg', [ContactusController::class, 'save'])->name('saveMsg');

// NavMenu Routes
// Services Routes
Route::get('/application_migration_conversion', [ServiceController::class, 'applicationMigrationConversion'])->name('services.applicationMigrationConversion');
Route::get('/enterprise_solution_consulting', [ServiceController::class, 'enterpriseSolutionConsulting'])->name('services.enterpriseSolutionConsulting');
Route::get('/GST_migration', [ServiceController::class, 'GSTMigration'])->name('services.GSTMigration');
Route::get('/IPO_compliance', [ServiceController::class, 'IPOCompliance'])->name('services.IPOCompliance');
Route::get('/PLCMES_weigh_bridge_integration', [ServiceController::class, 'PLCMESWeighBridgeIntegration'])->name('services.PLCMESWeighBridgeIntegration');
Route::get('/resource_argumentation', [ServiceController::class, 'resourceArgumentation'])->name('services.resourceArgumentation');
Route::get('/rise_with_S4HANA_implementation', [ServiceController::class, 'riseWithS4HANAImplementation'])->name('services.riseWithS4HANAImplementation');
Route::get('/SAP_support', [ServiceController::class, 'SAPSupport'])->name('services.SAPSupport');
// home menu routes
Route::get('/about_mesprosoft', [HomeMenuController::class, 'aboutUs'])->name('home.about');
Route::get('/management_team', [HomeMenuController::class, 'managementTeam'])->name('home.managementTeam');
Route::get('/core_values', [HomeMenuController::class, 'coreValues'])->name('home.coreValues');
Route::get('/why_mesprosoft', [HomeMenuController::class, 'whyMesprosoft'])->name('home.whyMesprosoft');
// product and solution routes
Route::get('/dispatch_automation', [ProductsAndSolutionController::class, 'dispatchAutomation'])->name('productAndSolution.dispatchAutomation');
Route::get('/dynamic_machine_scheduling', [ProductsAndSolutionController::class, 'dynamicMachineScheduling'])->name('productAndSolution.dynamicMachineScheduling');
Route::get('/electronic_batch_manufacturing', [ProductsAndSolutionController::class, 'electronicBatchManufacturing'])->name('productAndSolution.electronicBatchManufacturing');
Route::get('/handheld_mobile_bar_code', [ProductsAndSolutionController::class, 'handheldMobileBarCode'])->name('productAndSolution.handheldMobileBarCode');
Route::get('/loan_management_solution', [ProductsAndSolutionController::class, 'loanManagementSolution'])->name('productAndSolution.loanManagementSolution');
Route::get('/mespro_GPS_Preconfigured_analytics', [ProductsAndSolutionController::class, 'mesproGPSPreconfiguredAnalytics'])->name('productAndSolution.mesproGPSPreconfiguredAnalytics');
Route::get('/mespro_life_science_CFR_part11', [ProductsAndSolutionController::class, 'mesproLifeScienceCFRPart11'])->name('productAndSolution.mesproLifeScienceCFRPart11');
Route::get('/mespro_optimized_MRP', [ProductsAndSolutionController::class, 'mesproOptimizedMRP'])->name('productAndSolution.mesproOptimizedMRP');
Route::get('/mespro_paperess_manufacturing', [ProductsAndSolutionController::class, 'mesproPaperessManufacturing'])->name('productAndSolution.mesproPaperessManufacturing');
Route::get('/MesproX_Steps', [ProductsAndSolutionController::class, 'MesproX_Steps'])->name('productAndSolution.MesproX-Steps');
Route::get('/O2C_automation', [ProductsAndSolutionController::class, 'O2CAutomation'])->name('productAndSolution.O2CAutomation');
Route::get('/purchase_budget_check_and_approval', [ProductsAndSolutionController::class, 'purchaseBudgetCheckAndApproval'])->name('productAndSolution.purchaseBudgetCheckAndApproval');
Route::get('/smart_foundry', [ProductsAndSolutionController::class, 'smartFoundry'])->name('productAndSolution.smartFoundry');
Route::get('/TS16949_compliant_KAPA', [ProductsAndSolutionController::class, 'TS16949CompliantKAPA'])->name('productAndSolution.TS16949CompliantKAPA');
// case study routes
Route::get('/food_industry', [CaseStudyControler::class, 'foodIndustry'])->name('caseStudy.foodIndustry');
Route::get('/mespro_paperless_manufacturing', [CaseStudyControler::class, 'mesproPaperlessManufacturing'])->name('caseStudy.mesproPaperlessManufacturing');
Route::get('/digital_manufacturing', [CaseStudyControler::class, 'digitalManufacturing'])->name('caseStudy.digitalManufacturing');
// event and news route
Route::get('/event_and_news', [NewsAndEventController::class, 'index'])->name('eventAndNews.index');
// careers route
Route::get('/career', [CareerController::class, 'index'])->name('careers.index');
// contact us route
Route::get('/contact_us', [ContactusController::class, 'index'])->name('contactUs');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    })->name('admin');

    Route::prefix('home')->group(function () {
        Route::get('/', [HomeController::class, 'homeSetting'])->name('home.setting');

        Route::post('/storeNewSlide', [HomeController::class, 'storeNewSlide'])->name('home.storeNewSlide');
        Route::post('/editSlide', [HomeController::class, 'editSlide'])->name('home.editSlide');
        Route::post('/updateSlide', [HomeController::class, 'updateSlide'])->name('home.updateSlide');
        Route::delete('/deleteSlide/{id}', [HomeController::class, 'deleteSlide'])->name('home.deleteSlide');

        Route::post('/storeSatisfiedCustomer', [HomeController::class, 'storeSatisfiedCustomer'])->name('home.storeSatisfiedCustomer');
        Route::post('/updateSatisfiedCustomer', [HomeController::class, 'updateSatisfiedCustomer'])->name('home.updateSatisfiedCustomer');
        Route::delete('/deleteSatisfiedCustomerImage/{id}', [HomeController::class, 'deleteSatisfiedCustomerImage'])->name('home.deleteSatisfiedCustomerImage');

        Route::post('/storebuildingEfficiency', [HomeController::class, 'storebuildingEfficiency'])->name('home.storebuildingEfficiency');
        Route::post('/updatebuildingEfficiency', [HomeController::class, 'updatebuildingEfficiency'])->name('home.updatebuildingEfficiency');

        Route::post('/storeOurServices', [HomeController::class, 'storeOurServices'])->name('home.storeOurServices');
        Route::post('/updateOurServices', [HomeController::class, 'updateOurServices'])->name('home.updateOurServices');

        Route::post('/storeOurProductAndSolution', [HomeController::class, 'storeOurProductAndSolution'])->name('home.storeOurProductAndSolution');
        Route::post('/updateOurProductAndSolution', [HomeController::class, 'updateOurProductAndSolution'])->name('home.updateOurProductAndSolution');

        Route::post('/storeSlider2NewSlide', [HomeController::class, 'storeSlider2NewSlide'])->name('home.storeSlider2NewSlide');
        Route::post('/editSlider2Slide', [HomeController::class, 'editSlider2Slide'])->name('home.editSlider2Slide');
        Route::post('/updateSlider2Slide', [HomeController::class, 'updateSlider2Slide'])->name('home.updateSlider2Slide');
        Route::delete('/deleteSlider2Slide/{id}', [HomeController::class, 'deleteSlider2Slide'])->name('home.deleteSlider2Slide');

        Route::post('/storePercentageSection', [HomeController::class, 'storePercentageSection'])->name('home.storePercentageSection');
        Route::post('/updatePercentageSection', [HomeController::class, 'updatePercentageSection'])->name('home.updatePercentageSection');
    });

    Route::prefix('menu')->group(function () {


        Route::prefix('contactUs')->group(function () {

            Route::get('/{id}', [ContactsUsController::class, 'index'])->name('contactUs.index');

            Route::post('/createToSection', [ContactsUsController::class, 'createToSection'])->name('contactUs.createToSection');
            Route::post('/storeToSection', [ContactsUsController::class, 'storeToSection'])->name('contactUs.storeToSection');
            Route::get('/editToSection/{id}', [ContactsUsController::class, 'editToSection'])->name('contactUs.editToSection');
            Route::put('/updateToSection/{id}', [ContactsUsController::class, 'updateToSection'])->name('contactUs.updateToSection');

            Route::post('/storeCard', [ContactsUsController::class, 'storeCard'])->name('contactUs.storeCard');
            Route::post('/updateCard', [ContactsUsController::class, 'updateCard'])->name('contactUs.updateCard');
            Route::delete('/deleteCard/{id}', [ContactsUsController::class, 'deleteCard'])->name('contactUs.deleteCard');
            Route::post('/editCard', [ContactsUsController::class, 'editCard'])->name('contactUs.editCard');
        });

        Route::prefix('career')->group(function () {

            Route::get('/{id}', [CareersController::class, 'index'])->name('career.index');

            Route::post('/createToSection', [CareersController::class, 'createToSection'])->name('career.createToSection');
            Route::post('/storeToSection', [CareersController::class, 'storeToSection'])->name('career.storeToSection');
            Route::get('/editToSection/{id}', [CareersController::class, 'editToSection'])->name('career.editToSection');
            Route::put('/updateToSection/{id}', [CareersController::class, 'updateToSection'])->name('career.updateToSection');

            Route::post('/storeNewJob', [CareersController::class, 'storeNewJob'])->name('career.storeNewJob');
            Route::post('/updateJob', [CareersController::class, 'updateJob'])->name('career.updateJob');
            Route::delete('/deleteJob/{id}', [CareersController::class, 'deleteJob'])->name('career.deleteJob');
            Route::post('/editJob', [CareersController::class, 'editJob'])->name('career.editJob');

            Route::post('/editCurrentOpeningSection', [CareersController::class, 'editCurrentOpeningSection'])->name('career.editCurrentOpeningSection');
            Route::post('/updateCurrentOpeningSection', [CareersController::class, 'updateCurrentOpeningSection'])->name('career.updateCurrentOpeningSection');
            Route::post('/storeCurrentOpeningSection', [CareersController::class, 'storeCurrentOpeningSection'])->name('career.storeCurrentOpeningSection');
        });

        Route::prefix('newsEvent')->group(function () {

            Route::get('/{id}', [NewsEventController::class, 'index'])->name('newsEvent.index');

            Route::post('/createToSection', [NewsEventController::class, 'createToSection'])->name('newsEvent.createToSection');
            Route::post('/storeToSection', [NewsEventController::class, 'storeToSection'])->name('newsEvent.storeToSection');
            Route::get('/editToSection/{id}', [NewsEventController::class, 'editToSection'])->name('newsEvent.editToSection');
            Route::put('/updateToSection/{id}', [NewsEventController::class, 'updateToSection'])->name('newsEvent.updateToSection');

            Route::post('/storeCard', [NewsEventController::class, 'storeCard'])->name('newsEvent.storeCard');
            Route::post('/updateCard', [NewsEventController::class, 'updateCard'])->name('newsEvent.updateCard');
            Route::delete('/deleteCard/{id}', [NewsEventController::class, 'deleteCard'])->name('newsEvent.deleteCard');
            Route::post('/editCard', [NewsEventController::class, 'editCard'])->name('newsEvent.editCard');
        });

        Route::prefix('home/corporateOverview')->group(function () {

            Route::get('/{id}', [MenuHomeController::class, 'index'])->name('home/corporateOverview.index');
            Route::post('/', [MenuHomeController::class, 'getServicePage'])->name('home/corporateOverview.getServicePage');

            Route::post('/createToSection', [MenuHomeController::class, 'createToSection'])->name('home/corporateOverview.createToSection');
            Route::post('/storeToSection', [MenuHomeController::class, 'storeToSection'])->name('home/corporateOverview.storeToSection');
            Route::get('/editToSection/{id}', [MenuHomeController::class, 'editToSection'])->name('home/corporateOverview.editToSection');
            Route::put('/updateToSection/{id}', [MenuHomeController::class, 'updateToSection'])->name('home/corporateOverview.updateToSection');

            Route::get('/createExplanationSection/{id?}', [MenuHomeController::class, 'createExplanationSection'])->name('home/corporateOverview.createExplanationSection');
            Route::post('/storeExplanationSection', [MenuHomeController::class, 'storeExplanationSection'])->name('home/corporateOverview.storeExplanationSection');
            Route::get('/editExplanationSection/{id}', [MenuHomeController::class, 'editExplanationSection'])->name('home/corporateOverview.editExplanationSection');
            Route::put('/updateExplanationSection/{id}', [MenuHomeController::class, 'updateExplanationSection'])->name('home/corporateOverview.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [MenuHomeController::class, 'deleteExplanationImage'])->name('home/corporateOverview.deleteExplanationImage');

            Route::post('/storeCard', [MenuHomeController::class, 'storeCard'])->name('home/corporateOverview.storeCard');
            Route::post('/updateCard', [MenuHomeController::class, 'updateCard'])->name('home/corporateOverview.updateCard');
            Route::delete('/deleteCard/{id}', [MenuHomeController::class, 'deleteCard'])->name('home/corporateOverview.deleteCard');
            Route::post('/editCard', [MenuHomeController::class, 'editCard'])->name('home/corporateOverview.editCard');
        });

        Route::prefix('caseStudy')->group(function () {

            Route::get('/{id}', [CaseStudyController::class, 'index'])->name('caseStudy.index');
            Route::post('/', [CaseStudyController::class, 'getServicePage'])->name('caseStudy.getServicePage');

            Route::post('/createToSection', [CaseStudyController::class, 'createToSection'])->name('caseStudy.createToSection');
            Route::post('/storeToSection', [CaseStudyController::class, 'storeToSection'])->name('caseStudy.storeToSection');
            Route::get('/editToSection/{id}', [CaseStudyController::class, 'editToSection'])->name('caseStudy.editToSection');
            Route::put('/updateToSection/{id}', [CaseStudyController::class, 'updateToSection'])->name('caseStudy.updateToSection');

            Route::get('/createExplanationSection/{id?}', [CaseStudyController::class, 'createExplanationSection'])->name('caseStudy.createExplanationSection');
            Route::post('/storeExplanationSection', [CaseStudyController::class, 'storeExplanationSection'])->name('caseStudy.storeExplanationSection');
            Route::get('/editExplanationSection/{id}', [CaseStudyController::class, 'editExplanationSection'])->name('caseStudy.editExplanationSection');
            Route::put('/updateExplanationSection/{id}', [CaseStudyController::class, 'updateExplanationSection'])->name('caseStudy.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [CaseStudyController::class, 'deleteExplanationImage'])->name('caseStudy.deleteExplanationImage');

            Route::post('/storeCard', [CaseStudyController::class, 'storeCard'])->name('caseStudy.storeCard');
            Route::post('/updateCard', [CaseStudyController::class, 'updateCard'])->name('caseStudy.updateCard');
            Route::delete('/deleteCard/{id}', [CaseStudyController::class, 'deleteCard'])->name('caseStudy.deleteCard');
            Route::post('/editCard', [CaseStudyController::class, 'editCard'])->name('caseStudy.editCard');
        });

        Route::prefix('productAndSolution')->group(function () {

            Route::get('/{id}', [ProductAndSolutionController::class, 'index'])->name('productAndSolution.index');
            Route::post('/', [ProductAndSolutionController::class, 'getServicePage'])->name('productAndSolution.getServicePage');

            Route::post('/createToSection', [ProductAndSolutionController::class, 'createToSection'])->name('productAndSolution.createToSection');
            Route::post('/storeToSection', [ProductAndSolutionController::class, 'storeToSection'])->name('productAndSolution.storeToSection');
            Route::get('/editToSection/{id}', [ProductAndSolutionController::class, 'editToSection'])->name('productAndSolution.editToSection');
            Route::put('/updateToSection/{id}', [ProductAndSolutionController::class, 'updateToSection'])->name('productAndSolution.updateToSection');

            Route::get('/createExplanationSection/{id?}', [ProductAndSolutionController::class, 'createExplanationSection'])->name('productAndSolution.createExplanationSection');
            Route::post('/storeExplanationSection', [ProductAndSolutionController::class, 'storeExplanationSection'])->name('productAndSolution.storeExplanationSection');
            Route::get('/editExplanationSection/{id}', [ProductAndSolutionController::class, 'editExplanationSection'])->name('productAndSolution.editExplanationSection');
            Route::put('/updateExplanationSection/{id}', [ProductAndSolutionController::class, 'updateExplanationSection'])->name('productAndSolution.updateExplanationSection');
            Route::delete('/deleteExplanationImage/{id}', [ProductAndSolutionController::class, 'deleteExplanationImage'])->name('productAndSolution.deleteExplanationImage');

            Route::post('/storeCard', [ProductAndSolutionController::class, 'storeCard'])->name('productAndSolution.storeCard');
            Route::post('/updateCard', [ProductAndSolutionController::class, 'updateCard'])->name('productAndSolution.updateCard');
            Route::delete('/deleteCard/{id}', [ProductAndSolutionController::class, 'deleteCard'])->name('productAndSolution.deleteCard');
            Route::post('/editCard', [ProductAndSolutionController::class, 'editCard'])->name('productAndSolution.editCard');
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
            Route::delete('/deleteExplanationImage/{id}', [ServicesController::class, 'deleteExplanationImage'])->name('service.deleteExplanationImage');

            Route::post('/editCard', [ServicesController::class, 'editCard'])->name('service.editCard');
            Route::post('/storeCard', [ServicesController::class, 'storeCard'])->name('service.storeCard');
            Route::delete('/deleteCard/{id}', [ServicesController::class, 'deleteCard'])->name('service.deleteCard');
            Route::post('/updateCard', [ServicesController::class, 'updateCard'])->name('service.updateCard');
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
