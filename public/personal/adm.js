


function newproduct()
{
    $('#nameproduct').val('');
    $('#priceproduct').val('');
    $('#categoryproduct').val('');
    $('#descproduct').val('');
    $('#novoProduto').modal('show');
}

function loadCategories()
{
    $.getJSON('/api/adm/categories', function(data){

        for( i=0 ; i<data.length ; i++)
        {
            opacao = '<option value=' + data[i].id +'>' +data[i].nameCategory+ '</option>';

            $('#categoryproduct').append(opacao);
        }

    });
}

function montarlinha(prod)
{
    var linha = "<tr>"+
        "<td>"+prod.id +"</td>"+
        "<td>"+prod.prodName +"</td>"+
        "<td>"+prod.prodDesc +"</td>"+
        "<td>"+prod.categories_id +"</td>"+
        "<td>"+prod.prodPrice +"</td>"+
        "<td><a style='margin-right: 10px' href='' title='Editar produto' onclick='editProduct("+prod.id+")'><i class='fas fa-pencil-alt'></i></a> <a style='margin-right: 10px' href='' title='Apagar produto' onclick='deleteProduct("+prod.id+")'><i style='color: red' class='fas fa-trash-alt'></i></a></td>"+
        "</tr>";
    return linha;
}

function loadProducts()
{
    $.getJSON('/api/adm/products', function(prods){
        for(i=0;i<prods.length;i++)
        {
            linha = montarlinha(prods[i]);
            $('#productsTable>tbody').append(linha);
        }
    });
}

function addNewProduct()
{
    prod = {
        nameproduct:$('#nameproduct').val(),
        priceproduct:$('#priceproduct').val(),
        categoryproduct:$('#categoryproduct').val(),
        descproduct:$('#descproduct').val()
    };

    $.post('/api/adm/products',prod, function(data){
        produto = JSON.parse(data);

        linha = montarlinha(produto);
        $('#productsTable>tbody').append(linha);

    });
}

function deleteProduct(id)
{

    $.ajax({
        type:"DELETE",
        url:"/api/adm/products/"+id,
        context: this,
        success: function () {
            linhas = $("#productsTable>tbody>tr");
            e = linhas.filter(function(i, elemento)
            {
                return elemento.cells[0].textContent == id;
            });

            if(e)
            {
                e.remove();
            }
        },error: function (error) {
            console.log(error);
        }
    });

}

function editProduct(id)
{




}

$('#formProduct').submit(function(e){
    e.preventDefault();
    addNewProduct();
    $('#novoProduto').modal('hide');
});

//=================================================================================================================
//-- =================== TREINAMENTOS =============================================================================
//=================================================================================================================
            function newTraining()
            {
                $('#typeTraining').val('');
                $('#localTraining').val('');
                $('#dateTraining').val('');
                $('#seatTraining').val('');
                $('#novoTreinamento').modal('show');
            }


//=================================================================================================================
//-- =================== USUARIOS VIA ADMIN =======================================================================
//=================================================================================================================
            /*
            $('#formtraining').submit(function(e){
                e.preventDefault();
                addNewUser();
                $('#newUser').modal('hide');
            });
            */

            $('#formDeleteUser').submit(function(e){
                e.preventDefault();
                deleteUser();
                $('#modalDeleteUser').modal('hide');
            });


            //------ Apagar dados do moddal quando abrir ------------
            function newUser()
            {
                $('#nameUser').val('');
                $('#emailUser').val('');
                $('#userType').val('');
                $('#cellUser').val('');
                $("#typestd").hide();
                $('#newUser').modal('show');

            }

            //------ Select do Modal criação de Usuário ------------
            $(function () {
                $("#leveladm").hide();
                $("#typestd").hide();

                $('#typeTraining').change(function () {

                    if($('#typeTraining').val() == 2)
                    {
                        $('#address-number').hide();
                    }else if($('#typeTraining').val() == 3)
                    {
                        $('#address-number').hide();
                    }else
                    {
                        $('#address-number').show();
                    }

                })

                $('#userType').change(function () {

                    if($('#userType').val() == 2)
                    {
                        $('#typestd').show();
                    }else{
                        $("#typestd").hide();
                    }

                })
            });
            /*
            //------ criação de novo Usuário ------------
            function addNewUser()
            {
                user = {
                    nameUser:$('#nameUser').val(),
                    emailUser:$('#emailUser').val(),
                    cellUser:$('#cellUser').val(),
                    userType:$('#userType').val(),
                    stdType:$('#stdType').val(),
                };

                $.post('/api/adm/users',user, function(data){

                    usuario = JSON.parse(data);

                    if(usuario != null)
                    {
                        linha = montarlinhaUsuario(usuario);
                        $('#usersTable>tbody').append(linha);
                    }else
                    {
                        var alerta = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>"+
                            "<strong>Usuário já existe na base de dados.</strong>"+
                            "<button type='button' class='close'  data-dismiss='alert' aria-label='Close'>"+
                            "<span aria-hidden='true'>&times;</span>"+
                            "</button>"+
                            "</div>";

                        $('#alertExistsUser').append(alerta);
                    }
                });
            }


            // Montar linhas da tabela
            function montarlinhaUsuario(user)
            {
                var linha = "<tr id='"+user.nameUser+"'>"+
                    "<td>"+user.id +"</td>"+
                    "<td>"+user.nameUser +"</td>"+
                    "<td>"+user.email +"</td>"+
                    "<td> Tipo de usuário</td>"+
                    "<td> Turma do usuário</td>"+
                    "<td>"+user.nrCell +"</td>"+
                    "<td><a style='margin-right: 10px' href='' title='Editar usuário' onclick='editProduct("+user.id+")'><i class='fas fa-pencil-alt'></i></a> " +
                    "<button style='margin-right: 10px; border: none;' value="+user.id+" href='' title='Apagar usuário' data-toggle='modal'  onclick='ModaldeleteUser("+user.id+")'><i style='color: red' class='fas fa-trash-alt'></i></button></td>"+
                    "</tr>";
                return linha;
            }
*/

            function montarlinhaProdsStudents(prod)
            {

                var linha = "<option value='"+prod.id+"'>"+prod.prodName+"</option>";
                return linha;

            }

            function montarlinhaCatStudents(cat)
            {

                var linha = "<option value='"+cat.id+"'>"+cat.nameCategory+"</option>";
                return linha;

            }

            //Carregar categorias de Alunos
            function loadCatStudents()
            {
                $.getJSON('/api/adm/students/cats', function(cats){
                    for(i=0;i<cats.length;i++)
                    {
                        linha = montarlinhaCatStudents(cats[i]);
                        $('#stdType').append(linha);
                    }
                });
            }

            function loadProductsTraining()
            {
                $.getJSON('/api/adm/products/trainings', function(prods){


                    for(i=0;i<prods.length;i++)
                    {
                        linha = montarlinhaProdsStudents(prods[i]);
                        $('#typeTraining').append(linha);
                    }
                });
            }
            


            // Modal Excluir usuário
            function ModaldeleteUser(id)
            {
                $('#iduser').val(id);
            }

//=================================================================================================================
//-- =================== TREINAMENTO VIA ADMIN =======================================================================
//=================================================================================================================
            // Modal Excluir Treinamento
            function deleteTraining(id)
            {
                $('#modalDeletetraining').modal('show');
                $('#idtraining').val(id);
            }

            // Modal Detalhe de Treinamento
            function detailTraining(id)
            {

                $('#modalDetailTraining').modal('show');
                $.getJSON('/api/adm/training/'+id, function(tr){

                    $('#datetr').val(dateToEN(tr.dateTraining));
                    $('#nametr').val(tr.nameTraining);
                    $('#citytr').val(tr.cityTraining);
                    $('#addtr').val(tr.addressTraining);
                    $('#nrtr').val(tr.numberAddressTraining);
                    $('#vagastr').val(tr.vacancies);
                    $('#sittr').val(tr.situation);

                });

                $('#idtraining').val(id);
            }

            function studentsTraining(id)
            {
                $('#modalenrollmentTraining').modal('show');
            }

            // Montar linhas da tabela
            function montarlinhaTreinamentos(tr)
            {
                var linha =
                    "<tr id='"+tr.id+"'>"+
                        "<td>"+tr.nameTraining+"</td>"+
                        "<td>"+tr.cityTraining+"</td>"+
                        "<td>"+tr.dateTraining+"</td>"+
                        "<td>"+tr.vacancies+"</td>"+
                        "<td><a style='margin-right: 10px' href='' title='Efetuar matrícula' onclick='editProduct("+tr.id+")'><i class='fas fa-pencil-alt'></i></a>" +
                    "</tr>";
                return linha;
}


            function showAvaliableTrainings()
            {
                $('#modalenrollUser').modal('show');

                $.getJSON('/api/adm/training/openTrainings', function(tr){
                    console.log(tr);
                    if(tr =! null)
                    {
                        for(i=0;i<tr.length;i++)
                        {

                            linha = montarlinhaTreinamentos(tr[i]);
                            $('#enrollTrainingsTable').append(linha);
                        }

                    }

                });

            }

            function dateToEN(date)
            {
                return date.split('-').reverse().join('/');
            }






//===================================================================

            $(function ()
            {
                loadCategories();
                loadProducts();
                loadCatStudents();
                loadProductsTraining()
            });

            $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
                $("#success-alert").alert('close');
            });




