<?php

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

Route::POST('newsletter','ClientController@newsletter');

// Sitemap
Route::GET('/sitemap', 'SitemapController@index')->name('sitemap');
Route::GET('/sitemap/products', 'SitemapController@products');
Route::GET('/sitemap/categories', 'SitemapController@categories');
Route::GET('/sitemap/brands', 'SitemapController@brands');
Route::GET('/sitemap/blog', 'SitemapController@artikel');
Route::GET('/sitemap/seo', 'SitemapController@gambar');
Route::GET('query', 'SearchController@search');
Route::GET('/',[
	'uses' => 'ClientController@index',
	'as'	=> 'index.home'
]);
Route::GET('/sitemap',[
	'uses' => 'SitemapController@index',
	'as'	=> 'index.home'
]);
Route::GET('/about', [
	'uses'	=> 'ClientController@about',
	'as'	=> 'about'
]);
Route::GET('/privacy-policy', [
	'uses'	=> 'ClientController@privacy',
	'as'	=> 'privacy'
]);
Route::GET('/market', [
	'uses'	=> 'ClientController@market',
	'as'	=> 'market'
]);
Route::GET('/contact', [
	'uses'	=> 'ClientController@contact',
	'as'	=> 'contact'
]);
Route::GET('/blog',[
	'uses'	=> 'ClientController@blog',
	'as'	=> 'blog'
]);
Route::GET('/blog/read/{slug}',[
	'uses'	=> 'ClientController@blog_view',
	'as'	=> 'blog.view'
]);
Route::GET('/mobile/blog/read/{slug}',[
	'uses'	=> 'ClientController@mobileview_blog',
	'as'	=> 'mobileview.blog'
]);
Route::GET('/paint-calculator', [
	'uses'	=> 'ClientController@calculator',
	'as'	=> 'calculator'
]);

// Email
Route::POST('/contact/send',[
	'uses'	=> 'MailController@contact_send',
	'as'	=> 'contact.send'
]);

// Product
	Route::GET('/products', [
		'uses'	=> 'ClientController@products',
		'as'	=> 'products'
	]);
	Route::GET('/products/{id}', [
		'uses'	=> 'ClientController@pkategori',
		'as'	=> 'products.kategori'
	]);
	Route::GET('/product/view/{slug}', [
		'uses'	=> 'ClientController@pview',
		'as'	=> 'products.view'
	]);
	Route::GET('/category/{slug}', [
		'uses'	=> 'ClientController@kview',
		'as'	=> 'kategori.view'
	]);
	// Brands
	Route::GET('/brands/{slug}', [
		'uses'	=> 'ClientController@bview',
		'as'	=> 'brands.view'
	]);
	// Brosur
	Route::GET('/brosur',[
		'uses'	=> 'ClientController@brosur',
		'as'	=> 'brosur'
	]);
	// Data Teknis
	Route::GET('/data-teknis',[
		'uses'	=> 'ClientController@datateknis',
		'as'	=> 'datateknis'
	]);
	// Service
	Route::GET('/service',[
		'uses'	=> 'ClientController@service',
		'as'	=> 'service'
	]);

Auth::routes([
	'register' => false,
	'password.reset' => false,
	'reset' => false
]);

Route::GROUP(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::GET('/home', 'HomeController@index')->name('home');
	Route::GET('/contact', 'HomeController@contact')->name('index.contact');
	// Products
	Route::GET('/products', [
		'uses'	=> 'ProductController@index',
		'as'	=> 'products.index'
	]);
	Route::GET('/products/create', [
		'uses'	=> 'ProductController@create',
		'as'	=> 'products.create'
	]);
	Route::POST('/products/create/store', [
		'uses'	=> 'ProductController@store',
		'as'	=> 'products.store'
	]);
	Route::GET('/products/edit/{id}', [
		'uses'	=> 'ProductController@edit',
		'as'	=> 'products.edit'
	]);
	Route::GET('/products/delete/{id}', [
		'uses'	=> 'ProductController@destroy',
		'as'	=> 'products.delete'
	]);
	Route::POST('/products/edit/update/{id}', [
		'uses'	=> 'ProductController@update',
		'as'	=> 'products.update'
	]);
	// Kategori Products
	Route::GET('/products/kategori',[
		'uses'	=> 'KategoriProdukController@index',
		'as'	=> 'kategori.index'
	]);
	Route::GET('/products/kategori/create',[
		'uses'	=> 'KategoriProdukController@create',
		'as'	=> 'kategori.create'
	]);
	Route::GET('/products/kategori/edit/{id}',[
		'uses'	=> 'KategoriProdukController@edit',
		'as'	=> 'kategori.edit'
	]);
	Route::POST('/products/kategori/create/store',[
		'uses'	=> 'KategoriProdukController@store',
		'as'	=> 'kategori.store'
	]);
	Route::POST('/products/kategori/edit/update/{id}',[
		'uses'	=> 'KategoriProdukController@update',
		'as'	=> 'kategori.update'
	]);
	// Brands
	Route::GET('/brands',[
		'uses'	=> 'BrandsController@index',
		'as'	=> 'brands.index'
	]);
	Route::GET('/brands/create',[
		'uses'	=> 'BrandsController@create',
		'as'	=> 'brands.create'
	]);
	Route::POST('/brands/create/store',[
		'uses'	=> 'BrandsController@store',
		'as'	=> 'brands.store'
	]);
	Route::POST('/brands/edit/update/{id}',[
		'uses'	=> 'BrandsController@update',
		'as'	=> 'brands.update'
	]);
	Route::GET('/brands/edit/{id}',[
		'uses'	=> 'BrandsController@edit',
		'as'	=> 'brands.edit'
	]);
	Route::GET('/brands/delete/{id}',[
		'uses'	=> 'BrandsController@destroy',
		'as'	=> 'brands.delete'
	]);
	// Artikel
	Route::GET('/artikel',[
		'uses'	=> 'ArtikelController@index',
		'as'	=> 'artikel.index'
	]);
	Route::GET('/artikel/create',[
		'uses'	=> 'ArtikelController@create',
		'as'	=> 'artikel.create'
	]);
	Route::POST('/artikel/create/store',[
		'uses'	=> 'ArtikelController@store',
		'as'	=> 'artikel.store'
	]);
	Route::GET('/artikel/edit/{id}',[
		'uses'	=> 'ArtikelController@edit',
		'as'	=> 'artikel.edit'
	]);
	Route::POST('/artikel/edit/update/{id}',[
		'uses'	=> 'ArtikelController@update',
		'as'	=> 'artikel.update'
	]);
	// Kategori Artikel
	Route::GET('/artikel/kategori',[
		'uses'	=> 'KategoriArtikelController@index',
		'as'	=> 'ak.index'
	]);
	Route::POST('/artikel/kategori/store',[
		'uses'	=> 'KategoriArtikelController@store',
		'as'	=> 'ak.store'
	]);
	Route::POST('/artikel/kategori/edit/update/{id}',[
		'uses'	=> 'KategoriArtikelController@update',
		'as'	=> 'ak.update'
	]);
	// Route::resource('kategori','KategoriProdukController');
	// Slider
	Route::GET('/slider',[
		'uses'	=> 'SliderController@index',
		'as'	=> 'index.slider'
	]);
	Route::GET('/slider/create',[
		'uses'	=> 'SliderController@create',
		'as'	=> 'create.slider'
	]);
	Route::POST('/slider/create/store',[
		'uses'	=> 'SliderController@store',
		'as'	=> 'store.slider'
	]);
	Route::GET('/slider/edit/{id}',[
		'uses'	=> 'SliderController@edit',
		'as'	=> 'edit.slider'
	]);
	Route::POST('/slider/edit/update/{id}',[
		'uses'	=> 'SliderController@update',
		'as'	=> 'update.slider'
	]);
	Route::GET('/slider/delete/{id}',[
		'uses'	=> 'SliderController@destroy',
		'as'	=> 'delete.slider'
	]);
	// End Slider
	// Brosur
	Route::GET('/brosur',[
		'uses'	=> 'BrosurController@index',
		'as'	=> 'index.brosur'
	]);
	Route::GET('/brosur/create',[
		'uses'	=> 'BrosurController@create',
		'as'	=> 'create.brosur'
	]);
	Route::GET('/brosur/edit/{id}',[
		'uses'	=> 'BrosurController@edit',
		'as'	=> 'edit.brosur'
	]);
	Route::POST('/brosur/create/store',[
		'uses'	=> 'BrosurController@store',
		'as'	=> 'store.brosur'
	]);
	Route::POST('/brosur/edit/update/{id}',[
		'uses'	=> 'BrosurController@update',
		'as'	=> 'update.brosur'
	]);
	Route::GET('/brosur/delete/{id}',[
		'uses'	=> 'BrosurController@destroy',
		'as'	=> 'delete.brosur'
	]);
	// EndBrosur
});