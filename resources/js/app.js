require('./bootstrap');

function showPlace(id)
{
    var pid = id;
    $('#place' + pid).slideToggle('slow');
    console.log('place' + pid);
}

$('marqueepls').marquee();