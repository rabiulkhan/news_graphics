var xmlDoc = $.parseXML( E:\Rabi\tiker_with_xml\graphics_controll_update\2015_10_28_09_04_12_text.xml ); 

var $xml = $(xmlDoc);

var $news = $xml.find("news");

$news.each(function(){

    var headline = $(this).find('headline').text(),
        message = $(this).find('message').text();

    $("#ProfileList" ).append('<li>' +headline+ ' - ' +message+ '</li>');

});