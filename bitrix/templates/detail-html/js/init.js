//Yandex Map
ymaps.ready(init);
var myMap;

function init () {
	myMap = new ymaps.Map('map', {
		center: [59.939072, 30.450346],
		zoom: 16
	});
	var myGeocoder = ymaps.geocode('г. Санкт-Петербург, просп. Косыгина, д.2/1');
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

