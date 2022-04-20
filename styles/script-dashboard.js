$(document).ready(function() {
   
    var listHotel = $('#listHotel'),
        listManager = $('#listManager'),
        addHotel = $('#addHotel'),
        addManager = $('#addManager'),
        message = $('#message'),
        container = $('#content');

    listHotel.on('click', function(){

        container.load('listHotel.html');

        return false;

    });

    listManager.on('click', function(){

        container.load('listManager.php');

        return false;

    });

    addHotel.on('click', function(){

        container.load('addHotel.php');

        return false;

    });

    addManager.on('click', function(){

        container.load('addManager.php');

        return false;

    });

    message.on('click', function(){

        container.load('messaging.php');

        return false;

    });
});