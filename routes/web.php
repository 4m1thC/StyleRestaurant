<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;

use App\Http\Controllers\PostreController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\AlmuerzoController;
use App\Http\Controllers\CamareroController;
use App\Http\Controllers\PlatoExtraController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\PerteneceProdController;

use App\Http\Controllers\MesaController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
//Se usa el modelo Role para crear roles
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
//creacion de roles
//Role::create(['name'=>'administrador']);
//Role::create(['name'=>'cliente']);

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CartController;

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


Route::get('/', function () {
    return view('paginaPrincipal');
});
/*CAMARERRO -INI*/
Route::resource('camarero/gestionar', MesaController::class);

Route::get('/admin', function () {
    return view('administrador.index');
});
Auth::routes();
//seccion de la pagina principal y componentes.
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index1');//cambie index por index1 ojo
Route::get('/categorias', [MenuController::class, 'categories']);
Route::get('/categorias/almuerzo', [ProductoController::class, 'Almuerzo']);
Route::get('/categorias/plato_extra', [ProductoController::class, 'PlatoExtra']);
Route::get('/categorias/guarnicion', [ProductoController::class, 'Guarnicion']);
Route::get('/categorias/bebida', [ProductoController::class, 'Bebidas']);
Route::get('/categorias/postre', [ProductoController::class, 'Postres']);
Route::get('/menu/producto/{producto}', [ProductoController::class, 'show1'])->name('producto.show1');

//seccion de la pagina de pedidos cliente y camarero:


Route::get('/pedidos/menu', [MenuController::class, 'index1'])->name('pedido.index1');



Route::get('/contactos', function () {
    return view('cliente.contactos');
});
//rutas de carrito de pedidos
Route::resource('/cliente/pedido',PedidoController::class);
Route::post('/cliente/pedido/{$pedido}',[PedidoController::class, 'insert'])->name('pedido.insert');
//rutas del carrito de pedidos:
Route::get('/cart',[CartController::class, 'cart'])->name('cart.index');
Route::post('/cart-add', [CartController::class, 'add'])->name('cart.store');
Route::post('/cart-update', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart-remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart-clear', [CartController::class, 'clear'])->name('cart.clear');


//rutas para el cajero
Route::get('/cajero', function () {
    return view('cajero.plantilaBaseCajero');

});
Route::get('/plantillaBaseCamarero/listaDePedidos', function () {
    return view('camarero/listaDePedidos');
});



Route::get('/camarero/listaDePedidos/create',[PedidoController::class,'indexCamarero']);
Route::get('/camarero/listaDePedidos/indexCamarero',[PedidoController::class,'indexCamarero']);//listar

Route::get('/camarero/gestionar/index',[PedidoController::class,'index']);

/*CAMARERRO -FIN*/


Route::get('/plantilaBaseCajero', function () {
    return view('cajero/plantilaBaseCajero');
});

Route::get('/plantillaFactura', function () {
    return view('cajero/Facturar/plantillaFactura');
});

Route::get('/plantillaIngresos', function () {
    return view('cajero/GenerarInformes/plantillaIngresos');
});

Route::get('/plantillaEgresos', function () {
    return view('cajero/GenerarInformes/plantillaEgresos');
});

Route::get('/proveedores', function () {
    return view('cajero/GenerarInformes/proveedores');
});


Route::resource('cajero/Gestionar', MesaController::class);


Route::resource('productos',ProductoController::class)->names('menu');

//ruta de prueba
Route::get('/plantillaBase', function () {
    return view('diseños.plantillaBase');
});


//grupo de rutas
Route::group(['prefix'=>'administrador', 'middleware'=>['auth','role:administrador']], function(){
    //echo "bienvenido admistrador";
});
Route::group(['prefix'=>'cliente', 'middleware'=>['auth','role:cliente']], function(){
   // echo "bienvenido cliente";
});



//ruta de la autentificacion
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//Rutas para el Administrador________________________________________________________
Route::get('/homeAdministrador', function (){
    return view('administrador/homeAdministrador');
});
Route::resource('administrador/usuario', UsuarioController::class);


//Fin rutas para el Administrador_____________________________________________________________

//seccion para el Chef________________________________________________________
Route::get('/homeChef', function (){
    return view('chef/homeChef');
});

Route::resource('chef/postre', PostreController::class);
Route::resource('chef/bebida', BebidaController::class);
Route::resource('chef/almuerzo', AlmuerzoController::class);
Route::resource('chef/platoExtra', PlatoExtraController::class);
Route::resource('chef/producto', ProductoController::class);

Route::resource('chef/ingrediente', IngredienteController::class);

Route::get('chef/perteneceProd/create/{producto}',[PerteneceProdController::class, 'create'])->name('perteneceProd.create');
Route::post('chef/perteneceProd/{ingrediente}/{producto}',[PerteneceProdController::class, 'store'])->name('perteneceProd.store');
Route::get('chef/perteneceProd/{ingrediente}/{producto}',[PerteneceProdController::class, 'destroy'])->name('perteneceProd.destroy');



Route::get('chef/pedidos',[PedidoController::class,'listar'])->name('pedidos.listar');
Route::get('chef/pedidos/productos/{pedido}',[PedidoController::class,'listarProductos'])->name('pedidos.listarProductos');
//Route::pos('chef/menu',[PedidoController::class,'configurar'])->name('menu.configurar');
Route::get('chef/menu',[MenuController::class,'listar'])->name('menu.listar');
Route::post('chef/menu/dia',[MenuController::class,'listarPorDia'])->name('menu.listarPorDia');
Route::patch('chef/menu/{menu}/{producto}',[MenuController::class,'actualizarStock'])->name('menu.actualizarStock');
Route::patch('chef/pedido/{id}/{estado}',[PedidoController::class,'actualizarEstado'])->name('pedido.actualizarEstado');

Route::get('chef/adicionaMenu/{producto}',[ProductoController::class,'adicionaMenu'])->name('producto.adicionaMenu');
//seccion para el Chef________________________________________________________

//seccion para el Chef________________________________________________________

//Alejabdra
Route::resource('prueba/camarero', CamareroController::class);

 
Route::get('cajero/Gestionar1', [MesaController::class,'updatestatus'])->name('updatestatus');

