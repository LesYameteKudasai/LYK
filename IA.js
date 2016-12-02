//MISE EN PLACE DE LA GEOLOCALISATION ET RECUPERATION DES COORDONNEES
var centerpos;
var latitude;
var longitude;
var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();
var map;





//récupération des coordonnées du camp dans la base

var camp=document.getElementById("ville");





if(navigator.geolocation)
    navigator.geolocation.getCurrentPosition(maPosition,erreurPosition,{enableHighAccuracy:true});

function erreurPosition(error) {
    var info = "Erreur in geolocation : ";
    switch(error.code) {
    case error.TIMEOUT:
    	info += "Timeout !";
    break;
    case error.PERMISSION_DENIED:
    info += "You didn't give the permission";
    break;
    case error.POSITION_UNAVAILABLE:
    	info += "Position could not be determined";
    break;
    case error.UNKNOWN_ERROR:
    	info += "Unknown error";
    break;
    }
}


//FONCTION EXECUTEE QUAND LE MEC ACCEPTE LA GEOLOCALISATION
function maPosition(position) {
    latitude=position.coords.latitude;
    longitude=position.coords.longitude;
    centerpos = new google.maps.LatLng(latitude,longitude);

// Ansi que des options pour la carte, centrée sur latlng
var optionsGmaps = {
        zoom: 15,
        center: centerpos,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        mapTypeControlOptions:
        {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            poistion: google.maps.ControlPosition.TOP_RIGHT,
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 
              google.maps.MapTypeId.TERRAIN, 
              google.maps.MapTypeId.HYBRID, 
              google.maps.MapTypeId.SATELLITE]
        },
        navigationControl: true,
        navigationControlOptions:
        {
            style: google.maps.NavigationControlStyle.ZOOM_PAN
        },
        scaleControl: true,
        disableDoubleClickZoom: true,
        streetViewControl: true,
        draggableCursor: 'move'
    };

// Initialisation de la carte avec les options
map = new google.maps.Map(document.getElementById("map"), optionsGmaps);

// Marqueur
var marker = new google.maps.Marker({
			position: centerpos,
			map: map,
			title:"You are here"
		});

// Coordonnées
var latlng;


	latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

    marker.setMap(map);
	map.panTo(latlng);
    
    if (latitude<haut && longitude<droite && latitude>bas && longitude>gauche){
    IA(true);  
}else{
    IA(false);
}

}


var survId;

function suivre() {
	if(navigator.geolocation) {
		survId = navigator.geolocation.watchPosition(surveillePosition);
	} else {
		alert("This browser does not support geolocation.");
	}
}



// ICI ON A LES COORDONNEES DE LA JUNGLE DE CALAIS, IL FAUDRA TROUVER UN MOYEN DE PASSER LA POSITION DU CAMP VOULU EN PARAMETRES
var haut=50.97335;//document.getElementById("h");
var bas=50.966043;
var gauche=1.900993;
var droite=1.909138;

///////ZBEUB ZBEUB
/// A MODIFIER DONC





  
function IA(bool){
    if (bool==true){
        //Si on est dans le camp
        document.location.href="plan.php";
        
        
    }else{
        //SI LE MEC EST EN DEHORS DE SON CAMP
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('panel'));
        var request = {
        origin: centerpos,
        destination: new google.maps.LatLng(haut,gauche),
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
    }
}


function allo(){
    document.location.href="plan.php";
}