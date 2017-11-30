$(document).ready(function(){
    $('ul.tabs li a:first').addClass('active');
    $('.secciones section').hide();
    $('.secciones section:first').show();

    $('ul.tabs li a').click(function(){
        $('ul.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.secciones section').hide();
        var activaTab = $(this).attr('href'); //el valor del atributo href al cual estemos dando clic
        console.log(activaTab);
        $(activaTab).show();

        return false;
    });
 
    $('.userseccion section').hide();
    $('.userseccion section:first').shomenuser

    $('ul.menuser li a').click(function(){
        $('ul.menuser li').hide();
        $('.userseccion section').hide();
        var activamenuser = $(this).attr('href'); //el valor del atributo href al cual estemos dando clic
        console.log(activamenuser);
        $(activamenuser).show();
        
        return false;
    });


});