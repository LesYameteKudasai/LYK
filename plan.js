var centerpos;
var latitude;
var longitude;
var map;










//CALAIS

    centerpos = new google.maps.LatLng(50.970089, 1.905293);

// Ansi que des options pour la carte, centrée sur latlng
var optionsGmaps = {
        zoom: 16,
        center: centerpos,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
       
    };

// Initialisation de la carte avec les options
map = new google.maps.Map(document.getElementById("map"), optionsGmaps);


var imageDouche = {
	url: "http://publicdomainvectors.org/photos/cyberscooty-shower-1.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageEau = {
	url: "https://image.freepik.com/icones-gratuites/outil-de-bains-robinet_318-63255.jpg",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageInfo = {
	url: "http://www.icone-png.com/png/8/7561.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageInfo = {
	url: "http://www.icone-png.com/png/8/7561.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageAccueil = {
	url: "http://www.icone-png.com/png/54/53517.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageResto = {
	url: "http://www.diallko.com/category_pics/Restaurants/restaurant@2X.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageSecours = {
	url: "https://image.freepik.com/icones-gratuites/les-premiers-secours-symbole-de-la-croix_318-37299.jpg",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageLoisir = {
	url: "http://www.icône.com/images/icones/1/0/pictograms-nps-land-climbing.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageEcole = {
	url: "http://www.fancyicons.com/free-icons/232/science/png/256/school_256.png",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};

var imageEglise = {
	url: "https://image.freepik.com/icones-gratuites/symbole-de-la-croix-chretienne_318-48696.jpg",
	scaledSize: new google.maps.Size(50,40),
	anchor: new google.maps.Point(0,0)
};




var douche1 = new google.maps.Marker({
			position: new google.maps.LatLng(50.975131, 1.904732),
			map: map,
			title:"Douche1",
            icon: imageDouche
		});
var douche2 = new google.maps.Marker({
			position: new google.maps.LatLng(50.973003, 1.906989),
			map: map,
			title:"Douche2",
            icon: imageDouche
		});
var douche3 = new google.maps.Marker({
			position: new google.maps.LatLng(50.972041, 1.904002),
			map: map,
			title:"Douche3",
            icon: imageDouche
		});
var douche4 = new google.maps.Marker({
			position: new google.maps.LatLng(50.970510, 1.908582),
			map: map,
			title:"Douche4",
            icon: imageDouche
		});
var douche5 = new google.maps.Marker({
			position:new google.maps.LatLng(50.970184, 1.908790),
			map: map,
			title:"Douche5",
            icon: imageDouche
		});
var douche6 = new google.maps.Marker({
			position: new google.maps.LatLng(50.968806, 1.904639),
			map: map,
			title:"Douche6",
            icon: imageDouche
		});
var douche7 = new google.maps.Marker({
			position: new google.maps.LatLng(50.968849, 1.905814),
			map: map,
			title:"Douche7",
            icon: imageDouche
		});
var douche8 = new google.maps.Marker({
			position: new google.maps.LatLng(50.968219, 1.906463),
			map: map,
			title:"Douche8",
            icon: imageDouche
		});
var douche9 = new google.maps.Marker({
			position: new google.maps.LatLng(50.968559, 1.909545),
			map: map,
			title:"Douche9",
            icon: imageDouche
		});
var douche10 = new google.maps.Marker({
			position: new google.maps.LatLng(50.966389, 1.908882),
			map: map,
			title:"Douche10",
            icon: imageDouche
		});
var eau1 = new google.maps.Marker({
			position: new google.maps.LatLng(50.974973, 1.906693),
			map: map,
			title:"Eau1",
            icon: imageEau
		});
var eau2 = new google.maps.Marker({
			position: new google.maps.LatLng(50.969458, 1.902814),
			map: map,
			title:"Eau2",
            icon: imageEau
		});
var eau3 = new google.maps.Marker({
			position: new google.maps.LatLng(50.969185, 1.904110),
			map: map,
			title:"Eau3",
            icon: imageEau
		});        
var eau4 = new google.maps.Marker({
			position: new google.maps.LatLng(50.967979, 1.907302),
			map: map,
			title:"Eau4",
            icon: imageEau            
		});                                                                        
var eau5 = new google.maps.Marker({
			position: new google.maps.LatLng(50.968335, 1.906393),
			map: map,
			title:"Eau5",
            icon: imageEau            
		});
var info = new google.maps.Marker({
			position: new google.maps.LatLng(50.968479, 1.904488),
			map: map,
			title:"Info",
            icon: imageInfo
		});
var accueil = new google.maps.Marker({
			position: new google.maps.LatLng(50.966539, 1.908203),
			map: map,
			title:"Accueil",
            icon: imageAccueil
		});
var resto = new google.maps.Marker({
			position: new google.maps.LatLng(50.968585, 1.905733),
			map: map,
			title:"Restaurant",
            icon: imageResto
		});
var secourscath = new google.maps.Marker({
			position: new google.maps.LatLng(50.968954, 1.904655),
			map: map,
			title:"Secours catholique",
            icon: imageSecours
		});
var loisir = new google.maps.Marker({
			position: new google.maps.LatLng(50.969417, 1.905189),
			map: map,
			title:"Loisir",
            icon: imageLoisir
		});
var ecole = new google.maps.Marker({
			position: new google.maps.LatLng(50.968096, 1.905923),
			map: map,
			title:"Ecole",
            icon: imageEcole
		});
var eglise = new google.maps.Marker({
			position: new google.maps.LatLng(50.968386, 1.905104),
			map: map,
			title:"Eglise",
            icon: imageEglise
		});        
                        

// Coordonnées
var latlng;


	





