<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//---------------------------------------------------------------------------
// ROTAS AJAX - ADM
//---------------------------------------------------------------------------
    // Trazer Todas as Categorias
    Route::get('/adm/categories', 'categoriesController@getCategories');

    // Trazer Todas os produtos
    Route::get('/adm/products', 'productsController@productsAll');

    // Trazer Todas os produtos - TREINAMENTO
    Route::get('/adm/products/trainings', 'productsController@loadTrainingProduts');

    // Criar um novo produto
    Route::post('/adm/products', 'productsController@newProduct');

    // Exclui um produto
    Route::delete('/adm/products/{id}', 'productsController@deleteProduct');

    //--------------------------- Usuários ----------------------------------


    //Todos os Usuário
   // Route::get('/adm/users','usuariosController@allUsers');

    //Trazer apenas um usuário específico
    //Route::get('/adm/users/{id}','usuariosController@getUser');

    // Criar novo usuário (Visitante ou aluno)
   // Route::post('/adm/users','usuariosController@addNewUser');

    //Excluir usuário
    Route::post('/adm/users/delete','usuariosController@deleteUser');

    //Carregar dados do usuário
    //Route::get('/adm/users/{id}','usuariosController@getUser');

//--------------------------- Alunos ----------------------------------

    //Busca as categorias de alunos
    Route::get('/adm/students/cats', 'studentsController@getCategoriesStudents');

//--------------------------- Treinamentos ----------------------------------

    Route::get('/adm/training/{id}','trainingsController@getTraining');

    Route::get('/adm/training/date/{data}','trainingsController@dateBrazilian');

    // Todos os Treinamentos
    Route::get('/adm/training/openTrainings','trainingsController@allOpenTrainings');
    // Quantidade de alunos na turma
    Route::get('/adm/training/qtystudents/{id}','trainingsController@qntyStudents');