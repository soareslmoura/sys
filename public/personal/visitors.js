

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':"{{csrf_token()}}"
    }
});


        function loadVisitorModalTrainings(idtraining)
        {

            if(idtraining == 1)
            {
                $('#presencial').modal('show');

                $.getJSON('/api/adm/training/openTrainings', function(tr){
                    console.log(tr);
                    if(tr =! null)
                    {
                        for(i=0;i<tr.length;i++)
                        {

                            linha = montarLinhaModaltrainings(tr[i]);
                            $('#tableModalPlansVisitors').append(linha);
                        }

                    }

                });
            }
        }
        
        
        function montarLinhaModaltrainings($tr) {
            $.getJSON('/adm/training/qtystudents/'+$tr.id, function(qtd){

                restantes = tr.vacancies - qtd;
                var linha =
                    "<tr id='"+tr.dateTraining+"'>"+
                    "<td>"+tr.cityTraining+"</td>"+
                    "<td>"+tr.vacancies+"/"+restantes+"</td>"+
                    "<td><a style='margin-right: 10px' href='' title='Efetuar matrícula' onclick='editProduct("+tr.id+")'><i class='fas fa-pencil-alt'></i></a>" +
                    "</tr>";

                return linha;
            });


        }