<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('sliders', SliderController::class);
    $router->resource('tbl-meta-infos', PageController::class);
    $router->resource('shops', ShopController::class);
    $router->resource('new-products', NewProductsController::class);
    $router->resource('orders', OrderController::class);

    $router->resource('categories', CategoryController::class);
    $router->resource('childcategories', ChieldcategoryController::class);
    $router->resource('subcategories', SubcategoryController::class);
    $router->resource('faqs', FaqController::class);
    $router->resource('customization-banners', CustomizationBannerController::class);
    $router->resource('teams', TeamController::class);
    $router->resource('bulk-orders', BulkOrderController::class);
    $router->resource('faq-blogs', FaqBlogController::class);
    $router->resource('lastblogs', LastblogController::class);
    $router->resource('gelleries', GelleryController::class);
    $router->resource('section-images', SectionImageController::class);

    $router->resource('customize-page-sections', CustomizePageSectionController::class);
    $router->resource('process-customize-jewelries', ProcessCustomizeJewelryController::class);
    $router->resource('home-page-sections', HomePageSectionController::class);
    $router->resource('metal-variants', MetalVariantController::class);
    $router->resource('gemstone-variants', GemstoneVariantController::class);

    $router->resource('worldwide-resellers', WorldwideResellerController::class);   

});
