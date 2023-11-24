function iniciarMap(){
    var coord = {lat:22.32372 ,lng:-97.87902};
    var map = new google.maps.Map(document.getElementById('map'),
    {zoom: 10, center: coord

    });

    var marker = new google.maps.Marker({
        position: coord,map: map
    });

}