$('#add_cat').submit(function(){
    nom = $('#nom').val();
    url=$(this).attr('action');
    $.post(url,{'nom':nom},function(fb){
        if(fb.match('1'))
        {
            alert('Categorie bien ajouter');
            setTimeout(function(){
                location.reload();
            },2000);
        }
        else
        {
            alert(fb);
        }
    });
    return false;
});

$('#edit_sub_cat').submit(function(){
    nom = $('#nom').val();
    url=$(this).attr('action');
    $.post(url,{'nom':nom},function(fb){
        if(fb.match('1'))
        {
            alert('Categorie modifié avec succès');
            setTimeout(function(){
                window.location.href=BASE_URL+"index.php/ecole/categorie";
            },2000);
        }
        else
        {
            alert('Categorie non modifié');
        }
    })
    return false;
});

$('#add_classes').submit(function(){
    nom = $('#nom').val();
    cat = $('#cat').val();
    url=$(this).attr('action');
    $.post(url,{'nom':nom,'cat':cat},function(fb){
    

        if(fb.match('1'))
        {
            alert('Classe bien ajouter');
            setTimeout(function(){
                location.reload();
            },2000);
        }
        else
        {
            alert(fb);
        }
    });
    return false;
});

$('#edit_classe').submit(function(){
    nom = $('#nom').val();
    cat = $('#cat').val();
    url=$(this).attr('action');
    $.post(url,{'nom':nom,'cat':cat},function(fb){

        if(fb.match('1'))
        {
            alert('Classe bien modifié');
            setTimeout(function(){
               window.location.href=BASE_URL+'index.php/ecole/classes'
            },2000);
        }
        else
        {
            alert(fb);
        }
    });
    return false;
});

$('#add_coure').submit(function(){
    nom = $('#nom').val();
    duration = $('#course_duration').val();
    fees = $('#course_fees').val();
    stared = $('#course_stared').val();
    url=$(this).attr('action');
    $.post(url,{'nom':nom,'duration':duration,'fees':fees,'stared':stared},function(fb){

        if(fb.match('1'))
        {
            alert('Coure bien ajouté');
            setTimeout(function(){
            location.reload();
            },2000);
        }
        else
        {
            alert(fb);
        }
    });
    return false;
});

$('#edit_course').submit(function(){
    nom = $('#nom').val();
    duration = $('#course_duration').val();
    fees = $('#course_fees').val();
    stared = $('#course_stared').val();
    url=$(this).attr('action');
    $.post(url,{'nom':nom,'duration':duration,'fees':fees,'stared':stared},function(fb){

        if(fb.match('1'))
        {
            alert('Coure bien modifié');
            setTimeout(function(){
            window.location.href=BASE_URL+'index.php/ecole/course'
            },2000);
        }
        else
        {
            alert(fb);
        }
    });
    return false;
});

$('#add_etudiant').submit(function(){
    data={'nom':$('#nom').val(),
            'nom_parent':$('#nom_parent').val(),
            'categorie':$('#categorie').val(),
            'classe':$('#classe').val(),
            'annee_scolaire':$('#annee_scolaire').val(),
            'date_naiss':$('#date_naiss').val(),
    
};
url=$(this).attr('action');
$.post(url,data,function(fb){
    if(fb.match('1'))
    {
        alert('Enregistrement ressue avec succes');
        setTimeout(function(){
            location.reload();
        },2000);
    }

    else
    {
        alert('Etudiant non ajouté');
    }
});
//console.log(data);
    return false;
});

$('#edit_etudiant').submit(function(){
    url=$(this).attr('action');
    data={'nom':$('#nom').val(),
            'nom_parent':$('#nom_parent').val(),
            'categorie':$('#categorie').val(),
            'classe':$('#classe').val(),
            'annee_scolaire':$('#annee_scolaire').val(),
            'date_naiss':$('#date_naiss').val(),
    
};
    $.post(url,data, function(fb){
        if(fb.match('1'))
        {
            alert('Modification etudiants reçu evec success');
            setTimeout(function(){
                window.location.href=BASE_URL+'index.php/etudiant/etudiant';
            },2000);
        }
        else
        {
            alert('Etudiant non modifié');
        }
    });
    return false;
});

$('#add_staff').submit(function(){
    url=$(this).attr('action');
    data={'nom':$('#nom').val(),
            'nom_parent':$('#nom_parent').val(),
            'email':$('#email').val(),
            'telephone':$('#telephone').val(),
            'annee_scolaire':$('#annee_scolaire').val(),
            'date_naiss':$('#date_naiss').val(),
            'experience':$('#experience').val(),
            'payement':$('#payement').val(),
            'information':$('#information').val(),
    
};
$.post(url,data,function(fb){
    if(fb.match('1'))
    {
        alert('Enregistrement de staff reçu avec success');
        setTimeout(function(){
            location.reload();
        },2000);
    }
    else
    {
        alert('Staff non ajouté');
    }
});

    return false;
});

$('#edit_staff').submit(function(){
    url=$(this).attr('action');
    data={'nom':$('#nom').val(),
            'nom_parent':$('#nom_parent').val(),
            'email':$('#email').val(),
            'telephone':$('#telephone').val(),
            'annee_scolaire':$('#annee_scolaire').val(),
            'date_naiss':$('#date_naiss').val(),
            'experience':$('#experience').val(),
            'payement':$('#payement').val(),
            'information':$('#information').val(),
    
    };
    $.post(url,data,function(fb){
        if(fb.match('1'))
        {
            alert('Staff bien modifié avec succes');
            setTimeout(function(){
                window.location.href=BASE_URL+'index.php/staff/staff';
            },2000)
        }
        else
        {
            alert('Modification staff à echoué');
        }
    });

    return false;
});

$('#add_attandance_form').submit(function(){
    var url=$(this).attr('action');
    var status=$('#status').val();
    var etudiant_id=$('#etudiant_id').val();
    var date=$('#date').val();
    var remarks=$('#remarks').val();
    var data={'date':date,'remarks':remarks,'status':status,'etudiant_id':etudiant_id};

    $.post(url,data,function(fb){
        if(fb.match('1'))
        {
            alert('Attandance ajouté avec succes');
            setTimeout(function(){
                location.reload();
            },1000);
        }
        else
        {
            alert('Attandance non ajouté');
        }
    });

    return false;
});

$('#edit_attandance_form').submit(function(){
    url=$(this).attr('action');
    var status=$('#status').val();
    var etudiant_id=$('#etudiant_id').val();
    var date=$('#date').val();
    var remarks=$('#remarks').val();
    var data={'date':date,'remarks':remarks,'status':status,'etudiant_id':etudiant_id};

    $.post(url,data,function(fb){
        if(fb.match('1'))
        {
            alert('Attandance modifié avec succes');
            setTimeout(function(){
                window.location.href=BASE_URL+'index.php/attandance/add_attandance/'+etudiant_id;
            },1000);
        }
        else
        {
            alert('Attandance non modifié');
        }
    });

    return false;
});

$(document).on('change','#examen_categorie', function(){
    data=$(this).val();
    $.post(BASE_URL+'index.php/examen/find_class',{'cat':data},function(fb){
        $('#classe').html(fb);
    });
});
$('#add_examen_form').submit(function(){

    url=$(this).attr('action');
    titre=$('#titre').val();
    date_examen=$('#date_examen').val();
    examen_categorie=$('#examen_categorie').val();
    classe=$('#classe').val();
    data={'titre':titre,'date_examen':date_examen,'categorie':examen_categorie,'classe':classe};
    $.post(url,data,function(fb){
        if(fb.match('1'))
        {
            alert('Ajout examen reçue avec succes');
            setTimeout(function(){
                location.reload();
            },1000);
        }
        else
        {
            alert('Examen non ajouté');
        }
    });
    return false;
});
$('#edit_examen_form').submit(function(){
    url=$(this).attr('action');
    titre=$('#titre').val();
    date_examen=$('#date_examen').val();
    examen_categorie=$('#examen_categorie').val();
    classe=$('#classe').val();
    data={'titre':titre,'date_examen':date_examen,'categorie':examen_categorie,'classe':classe};
    $.post(url,data,function(fb){
        if(fb.match('1'))
        {
            alert('Modification examen reçue avec succes');
            setTimeout(function(){
                window.location.href=BASE_URL+'index.php/examen/add_examen';
            },1000);
        }
        else
        {
            alert('Examen non modifié');
        }
    });
    return false;
});

$('#add_time_table_form').submit(function(){
    url=$(this).attr('action');
    $.ajax({
        type:'POST',
        url:url,
        data:new FormData($(this)[0]),
        contentType:false,
        processData:false,
        success:function(fb){
            if(fb.match('1'))
            {
                alert('Time Table upload ajoute avec succes');
                setTimeout(function(){
                    location.reload();
                },2000);
            }
            else if(fb.match('2'))
                alert('JPG et PNG PDF file seulement');
            else
                alert('Time table non upload');
        }
    });
    return false;
});
$('#edit_time_table_form').submit(function(){
    url=$(this).attr('action');
    $.ajax({
        type:'POST',
        url:url,
        data:new FormData($(this)[0]),
        contentType:false,
        processData:false,
        success:function(fb){
            console.log(fb)
            if(fb=='1')
            {
                alert('Time Table upload modifié avec succes');
                setTimeout(function(){
                    window.location.href=BASE_URL+'index.php/examen/add_time_table';
                },2000);
            }
            else if(fb.match('2'))
                alert('JPG et PNG PDF file seulement');
            else
                alert('Time table non modifié');
        }
    });
    return false;
});

$(document).on('change','#select_etudiant',function(){
    id = $('#select_etudiant').val();
    
    titre=$('#st_'+id).attr('data-val');
    // alert(classe);
    
    console.log("xxxxxxxxxxxxxxxxxxxxx",titre);
    
    $.post(BASE_URL+'index.php/resultat/find_examens',{'examen':titre},function(fb){
        // alert(fb)
        $('#examen').html(fb);
    })
});

$('#add_resultat_form').submit(function(){
    url=$(this).attr('action');
    data={'etudiant_id':$('#select_etudiant').val(),
            'nom_examen':$('#examen').val(),
            'resultat':$('#resultat').val(),
    };
    $.post(url,data,function(fb){
        if(fb.match('1'))
        {
            alert('Resultat bien ajouter');
            setTimeout(function(){
                location.reload();
            },1000);
        }
        else
        {
            alert('Resultat non ajouter');
        }
    })

    return false;
});