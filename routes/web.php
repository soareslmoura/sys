<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
        Route::get('/','usuariosController@indexSite');
        Route::get('/recover', function (){
            return view('recoverpass');
        });
        Route::post('/recover','usuariosController@passRecover');
        Route::get('/resendpass','usuariosController@confirmPass');


/* -------------- ROTAS VISITANTE -------------------*/
        Route::get('/curso','usuariosController@indexCurso');
        Route::post('/visitor/create','usuariosController@createVisitorAccount');
        Route::post('/user/login','usuariosController@login');
        Route::get('/visitor/logout','usuariosController@visitorLogout');
        Route::get('/visitor/freetraning','visitorsController@freetraning');
        Route::get('/visitor/plans','trainingsController@showViewbuyPlan');
        Route::get('/visitor/treinamento','visitorsController@viewPlans');
        Route::get('/visitor/dadosVisitante/{id}','visitorsController@viewEditVisitor');


        Route::get('/visitante', 'visitorsController@indexVisitor')->name('visitante');

        /* -------------- ROTAS STUDENT -------------------*/
        Route::get('/std', 'studentsController@indexStudent');
        Route::get('/std/logout','usuariosController@visitorLogout');


         /* -------------- ROTAS ADMIN -------------------*/

        // Login ADM
        Route::get('/adm', 'admController@index');
        Route::post('/adm', 'admController@loginAdm');

        // Recuperar Senha ADM
        Route::get('/adm/recover', function (){
            return view('/adm/admRecoverPass');
        });
        Route::post('/adm/recover', 'admController@recoverPass');

        //Cadastrar novo Admin
        Route::post('/adm/create','admController@createAdmin');

        //Mostra View de Cadastro de admin
        Route::get('/adm/admcreate','admController@admcreate');

        //Mostra View Index do admin
        Route::get('/adm/index','admController@index');

        //Logout Admin
        Route::get('/adm/logout','admController@logout');

    //-------------------------------------------------------------------------------------
    /* -------------- ROTAS ADMIN - PRODUTOS -------------------*/

        // Todos os Produtos
        Route::get('/adm/products','admController@showProducts');

    //-------------------------------------------------------------------------------------
    /* -------------- ROTAS ADMIN - TREINAMENTOS -------------------*/

        // Todos os Treinamentos
        Route::get('/adm/training','trainingsController@allTrainings')->name('alltrainings');

        //Criar novo treinamento
        Route::post('/adm/training','trainingsController@newTraining');


    //-------------------------------------------------------------------------------------
    /* -------------- ROTAS ADMIN - USUARIOS -------------------*/

        //Todos os Usuário
        Route::get('/adm/users/all','usuariosController@getAllUsers')->name('allusers');

        //Inserir novo usuário
        Route::post('/adm/users','usuariosController@addNewUser');

        //Mostrar dados de usuário
        Route::get('/adm/users/{id}','usuariosController@getEditUser');

        //Editar dados de usuário
        Route::post('/adm/users/edit','usuariosController@editUser');

        //excluir usuário
        Route::post('/adm/users/delete','usuariosController@deleteUser');

    //-------------------------------------------------------------------------------------
    /* -------------- ROTAS ADMIN - GESTÃO DO SISTEMA -------------------*/

        // Pag Principal
        Route::get('/adm/management','managementController@indexManagement');

        //---------  CATEGORIAS  ----------------------------------------------------------

            // Adicionar Nova Categoria
            Route::post('/adm/category','categoriesController@newCategory');

    //-------------------------------------------------------------------------------------
    /* -------------- ROTAS ADMIN - Matricular Usuário -------------------*/

        Route::get('/adm/training/openTrainings', 'trainingsController@allOpenTrainings');
