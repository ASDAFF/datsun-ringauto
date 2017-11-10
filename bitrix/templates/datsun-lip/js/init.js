//Yandex Map
ymaps.ready(init);
var myMap;


function init () {
	myMap = new ymaps.Map('map', {
		center: [52.583433, 39.581532],
		zoom: 17
	});
	var myGeocoder = ymaps.geocode('Липецк, Россия, улица 50 лет НЛМК, 22');
	myGeocoder.then(
	function (res) {
		var coords = res.geoObjects.get(0).geometry.getCoordinates();
		myPlacemark = new ymaps.Placemark(coords, {}, {
			iconImageHref: '/bitrix/templates/datsun/images/map-icon.png',
			iconImageSize: [84, 84],
			iconImageOffset: [-42, -84]
		});
		myMap.geoObjects.add(myPlacemark);
		myMap.setCenter(coords);
	},
	function (err) {
		//alert('Ошибка');
	});
	myMap.controls.add('zoomControl', { top: 75, left: 5 });
}

