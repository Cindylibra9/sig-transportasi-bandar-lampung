var wms_layers = [];


        var lyr_OpenStreetMap_0 = new ol.layer.Tile({
            'title': 'OpenStreetMap',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' ',
                url: 'https://tile.openstreetmap.org/{z}/{x}/{y}.png'
            })
        });
var format_ADMINISTRASIKECAMATAN_AR_50K_1 = new ol.format.GeoJSON();
var features_ADMINISTRASIKECAMATAN_AR_50K_1 = format_ADMINISTRASIKECAMATAN_AR_50K_1.readFeatures(json_ADMINISTRASIKECAMATAN_AR_50K_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_ADMINISTRASIKECAMATAN_AR_50K_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_ADMINISTRASIKECAMATAN_AR_50K_1.addFeatures(features_ADMINISTRASIKECAMATAN_AR_50K_1);
var lyr_ADMINISTRASIKECAMATAN_AR_50K_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_ADMINISTRASIKECAMATAN_AR_50K_1, 
                style: style_ADMINISTRASIKECAMATAN_AR_50K_1,
                interactive: true,
                title: '<img src="styles/legend/ADMINISTRASIKECAMATAN_AR_50K_1.png" /> ADMINISTRASIKECAMATAN_AR_50K'
            });
var format_Line_2 = new ol.format.GeoJSON();
var features_Line_2 = format_Line_2.readFeatures(json_Line_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_Line_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_Line_2.addFeatures(features_Line_2);
var lyr_Line_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_Line_2, 
                style: style_Line_2,
                interactive: true,
                title: '<img src="styles/legend/Line_2.png" /> Line'
            });
var format_PointStasiun_3 = new ol.format.GeoJSON();
var features_PointStasiun_3 = format_PointStasiun_3.readFeatures(json_PointStasiun_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PointStasiun_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_PointStasiun_3.addFeatures(features_PointStasiun_3);
var lyr_PointStasiun_3 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_PointStasiun_3, 
                style: style_PointStasiun_3,
                interactive: true,
                title: '<img src="styles/legend/PointStasiun_3.png" /> Point Stasiun'
            });
var format_PointTerminal_4 = new ol.format.GeoJSON();
var features_PointTerminal_4 = format_PointTerminal_4.readFeatures(json_PointTerminal_4, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PointTerminal_4 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_PointTerminal_4.addFeatures(features_PointTerminal_4);
var lyr_PointTerminal_4 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_PointTerminal_4, 
                style: style_PointTerminal_4,
                interactive: true,
                title: '<img src="styles/legend/PointTerminal_4.png" /> Point Terminal'
            });
var format_PointPelabuhan_5 = new ol.format.GeoJSON();
var features_PointPelabuhan_5 = format_PointPelabuhan_5.readFeatures(json_PointPelabuhan_5, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PointPelabuhan_5 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_PointPelabuhan_5.addFeatures(features_PointPelabuhan_5);
var lyr_PointPelabuhan_5 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_PointPelabuhan_5, 
                style: style_PointPelabuhan_5,
                interactive: true,
                title: '<img src="styles/legend/PointPelabuhan_5.png" /> Point Pelabuhan'
            });

lyr_OpenStreetMap_0.setVisible(true);lyr_ADMINISTRASIKECAMATAN_AR_50K_1.setVisible(true);lyr_Line_2.setVisible(true);lyr_PointStasiun_3.setVisible(true);lyr_PointTerminal_4.setVisible(true);lyr_PointPelabuhan_5.setVisible(true);
var layersList = [lyr_OpenStreetMap_0,lyr_ADMINISTRASIKECAMATAN_AR_50K_1,lyr_Line_2,lyr_PointStasiun_3,lyr_PointTerminal_4,lyr_PointPelabuhan_5];
lyr_ADMINISTRASIKECAMATAN_AR_50K_1.set('fieldAliases', {'NAMOBJ': 'NAMOBJ', 'WADMKK': 'WADMKK', 'WADMPR': 'WADMPR', });
lyr_Line_2.set('fieldAliases', {'Nama': 'Nama', 'Daerah': 'Daerah', });
lyr_PointStasiun_3.set('fieldAliases', {'Name': 'Name', 'Alamat': 'Alamat', 'Angkutan': 'Angkutan', 'Kelurahan': 'Kelurahan', 'Kecamatan': 'Kecamatan', });
lyr_PointTerminal_4.set('fieldAliases', {'Nama': 'Nama', 'Kelurahan': 'Kelurahan', 'Kecamatan': 'Kecamatan', 'Alamat': 'Alamat', });
lyr_PointPelabuhan_5.set('fieldAliases', {'Nama': 'Nama', 'Alamat': 'Alamat', 'Kelurahan': 'Kelurahan', 'Kecamatan': 'Kecamatan', });
lyr_ADMINISTRASIKECAMATAN_AR_50K_1.set('fieldImages', {'NAMOBJ': '', 'WADMKK': '', 'WADMPR': '', });
lyr_Line_2.set('fieldImages', {'Nama': '', 'Daerah': '', });
lyr_PointStasiun_3.set('fieldImages', {'Name': '', 'Alamat': '', 'Angkutan': '', 'Kelurahan': '', 'Kecamatan': '', });
lyr_PointTerminal_4.set('fieldImages', {'Nama': '', 'Kelurahan': '', 'Kecamatan': '', 'Alamat': '', });
lyr_PointPelabuhan_5.set('fieldImages', {'Nama': '', 'Alamat': '', 'Kelurahan': '', 'Kecamatan': '', });
lyr_ADMINISTRASIKECAMATAN_AR_50K_1.set('fieldLabels', {'NAMOBJ': 'no label', 'WADMKK': 'no label', 'WADMPR': 'no label', });
lyr_Line_2.set('fieldLabels', {'Nama': 'no label', 'Daerah': 'no label', });
lyr_PointStasiun_3.set('fieldLabels', {'Name': 'header label', 'Alamat': 'header label', 'Angkutan': 'header label', 'Kelurahan': 'header label', 'Kecamatan': 'header label', });
lyr_PointTerminal_4.set('fieldLabels', {'Nama': 'header label', 'Kelurahan': 'header label', 'Kecamatan': 'header label', 'Alamat': 'header label', });
lyr_PointPelabuhan_5.set('fieldLabels', {'Nama': 'header label', 'Alamat': 'header label', 'Kelurahan': 'header label', 'Kecamatan': 'header label', });
lyr_PointPelabuhan_5.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});