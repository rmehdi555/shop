<?php

namespace App\Providers;

use App\Factories;
use App\Menu;
use App\NewsCategories;
use App\ProductCategories;
use App\SiteDetails;
use App\Sizes;
use App\Standards;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        view()->composer('*', function ($view) {
            $allSiteDetails = SiteDetails::all();
            foreach ($allSiteDetails as $details) {
                $siteDetails[$details->key] = $details;
            }
            if (isset($view->user)) {
                $user = $view->user;
            } else {
                $user = Auth::user();
            }
            $categoriesProvider = ProductCategories::where('status', '=', '1')->with('parent')->get();
            $newsCategoriesProvider = NewsCategories::where('status', '=', '1')->with('parent')->get();

            $webMenusHeaderMilegerd=[];
            $webMenusHeaderMilegerd['factory']=Factories::where([['product_categories_id', '=', '19'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);
            $webMenusHeaderMilegerd['size']=Sizes::where([['product_categories_id', '=', '19'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);
            $webMenusHeaderMilegerd['standard']=Standards::where([['product_categories_id', '=', '19'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);

            $webMenusHeaderNabshi=[];
            $webMenusHeaderNabshi['factory']=Factories::where([['product_categories_id', '=', '32'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);
            $webMenusHeaderNabshi['size']=Sizes::where([['product_categories_id', '=', '32'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);
            $webMenusHeaderNabshi['standard']=Standards::where([['product_categories_id', '=', '32'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);

            $webMenusHeaderVaraghSiea=[];
            $webMenusHeaderVaraghSiea['factory']=Factories::where([['product_categories_id', '=', '38'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);
            $webMenusHeaderVaraghSiea['size']=Sizes::where([['product_categories_id', '=', '38'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);
            $webMenusHeaderVaraghSiea['standard']=Standards::where([['product_categories_id', '=', '38'], ['status', '=', '1']])->orderBy('priority')->get(['id','title','slug']);



            $webMenusHeader = Menu::where([['menu_categories_id', '=', '1'], ['status', '=', '1']])->with('parent')->orderBy('priority')->get();
            $webMenusFooter1 = Menu::where([['menu_categories_id', '=', '2'], ['status', '=', '1']])->with('parent')->orderBy('priority')->get();
            $webMenusFooter2 = Menu::where([['menu_categories_id', '=', '3'], ['status', '=', '1']])->with('parent')->orderBy('priority')->get();
            $view->with([
                'siteDetailsProvider' => $siteDetails,
                'newsCategoriesProvider' => $newsCategoriesProvider,
                'categoriesProvider' => $categoriesProvider,
                'webMenusHeaderProvider' => $webMenusHeader,
                'webMenusHeaderMilegerd' => $webMenusHeaderMilegerd,
                'webMenusHeaderNabshi' => $webMenusHeaderNabshi,
                'webMenusHeaderVaraghSiea' => $webMenusHeaderVaraghSiea,
                'webMenusFooter1Provider' => $webMenusFooter1,
                'webMenusFooter2Provider' => $webMenusFooter2,
                'user' => $user,
            ]);
        });
    }
}
