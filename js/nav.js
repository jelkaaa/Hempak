$(function() {
    $("#nav a:contains('Početna')").parent().addClass('active');
    $("#onama a:contains('O nama')").parent().addClass('active');
    $("#boja a:contains('Boja i stikeri za jaja')").parent().addClass('active');
    $("#pitanja a:contains('Pitanja')").parent().addClass('active');
    $("#slicice a:contains('Sličice za jaja')").parent().addClass('active');
    $("#dekoracija a:contains('Dekoracija za jaja')").parent().addClass('active');
    $("#kontakt a:contains('Kontakt')").parent().addClass('active');

    if( $("#boja a:contains('Boja i stikeri za jaja')").parent().hasClass('active'))
    {
        $(".dropdown a:contains('Proizvodni program')").parent().addClass('active');
        $(".dropup a:contains('Proizvodni program')").parent().addClass('active');
    }
    if( $("#slicice a:contains('Sličice za jaja')").parent().hasClass('active'))
    {
        $(".dropdown a:contains('Proizvodni program')").parent().addClass('active');
        $(".dropup a:contains('Proizvodni program')").parent().addClass('active');
    }
    if(  $("#dekoracija a:contains('Dekoracija za jaja')").parent().hasClass('active'))
    {
        $(".dropdown a:contains('Proizvodni program')").parent().addClass('active');
        $(".dropup a:contains('Proizvodni program')").parent().addClass('active');

    }
});
