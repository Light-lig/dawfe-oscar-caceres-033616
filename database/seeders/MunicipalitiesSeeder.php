<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Municipality;
class MunicipalitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [ 
            ['municipatitie_name' => 'Ahuachapán', 'department_id' => 1],
            ['municipatitie_name' => 'Jujutla', 'department_id' => 1],
            ['municipatitie_name' => 'Atiquizaya', 'department_id' => 1],
            ['municipatitie_name' => 'Concepción de Ataco', 'department_id' => 1],
            ['municipatitie_name' => 'El Refugio', 'department_id' => 1],
            ['municipatitie_name' => 'Guaymango', 'department_id' => 1],
            ['municipatitie_name' => 'Apaneca', 'department_id' => 1],
            ['municipatitie_name' => 'San Francisco Menéndez', 'department_id' => 1],
            ['municipatitie_name' => 'San Lorenzo', 'department_id' => 1],
            ['municipatitie_name' => 'San Pedro Puxtla', 'department_id' => 1],
            ['municipatitie_name' => 'Tacuba', 'department_id' => 1],
            ['municipatitie_name' => 'Turín', 'department_id' => 1],
            ['municipatitie_name' => 'Candelaria de la Frontera', 'department_id' => 2],
            ['municipatitie_name' => 'Chalchuapa', 'department_id' => 2],
            ['municipatitie_name' => 'Coatepeque', 'department_id' => 2],
            ['municipatitie_name' => 'El Congo', 'department_id' => 2],
            ['municipatitie_name' => 'El Porvenir', 'department_id' => 2],
            ['municipatitie_name' => 'Masahuat', 'department_id' => 2],
            ['municipatitie_name' => 'Metapán', 'department_id' => 2],
            ['municipatitie_name' => 'San Antonio Pajonal', 'department_id' => 2],
            ['municipatitie_name' => 'San Sebastián Salitrillo', 'department_id' => 2],
            ['municipatitie_name' => 'Santa Ana', 'department_id' => 2],
            ['municipatitie_name' => 'Santa Rosa Guachipilín', 'department_id' => 2],
            ['municipatitie_name' => 'Santiago de la Frontera', 'department_id' => 2],
            ['municipatitie_name' => 'Texistepeque', 'department_id' => 2],
            ['municipatitie_name' => 'Acajutla', 'department_id' => 3],
            ['municipatitie_name' => 'Armenia', 'department_id' => 3],
            ['municipatitie_name' => 'Caluco', 'department_id' => 3],
            ['municipatitie_name' => 'Cuisnahuat', 'department_id' => 3],
            ['municipatitie_name' => 'Izalco', 'department_id' => 3],
            ['municipatitie_name' => 'Juayúa', 'department_id' => 3],
            ['municipatitie_name' => 'Nahuizalco', 'department_id' => 3],
            ['municipatitie_name' => 'Nahulingo', 'department_id' => 3],
            ['municipatitie_name' => 'Salcoatitán', 'department_id' => 3],
            ['municipatitie_name' => 'San Antonio del Monte', 'department_id' => 3],
            ['municipatitie_name' => 'San Julián', 'department_id' => 3],
            ['municipatitie_name' => 'Santa Catarina Masahuat', 'department_id' => 3],
            ['municipatitie_name' => 'Santa Isabel Ishuatán', 'department_id' => 3],
            ['municipatitie_name' => 'Santo Domingo de Guzmán', 'department_id' => 3],
            ['municipatitie_name' => 'Sonsonate', 'department_id' => 3],
            ['municipatitie_name' => 'Sonzacate', 'department_id' => 3],
            ['municipatitie_name' => 'Alegría',  'department_id' =>11],
            ['municipatitie_name' => 'Berlín',  'department_id' =>11],
            ['municipatitie_name' => 'California',  'department_id' =>11],
            ['municipatitie_name' => 'Concepción Batres',  'department_id' =>11],
            ['municipatitie_name' => 'El Triunfo',  'department_id' =>11],
            ['municipatitie_name' => 'Ereguayquín',  'department_id' =>11],
            ['municipatitie_name' => 'Estanzuelas',  'department_id' =>11],
            ['municipatitie_name' => 'Jiquilisco',  'department_id' =>11],
            ['municipatitie_name' => 'Jucuapa',  'department_id' =>11],
            ['municipatitie_name' => 'Jucuarán',  'department_id' =>11],
            ['municipatitie_name' => 'Mercedes Umaña',  'department_id' =>11],
            ['municipatitie_name' => 'Nueva Granada',  'department_id' =>11],
            ['municipatitie_name' => 'Ozatlán',  'department_id' =>11],
            ['municipatitie_name' => 'Puerto El Triunfo',  'department_id' =>11],
            ['municipatitie_name' => 'San Agustín',  'department_id' =>11],
            ['municipatitie_name' => 'San Buenaventura',  'department_id' =>11],
            ['municipatitie_name' => 'San Dionisio',  'department_id' =>11],
            ['municipatitie_name' => 'San Francisco Javier',  'department_id' =>11],
            ['municipatitie_name' => 'Santa Elena',  'department_id' =>11],
            ['municipatitie_name' => 'Santa María',  'department_id' =>11],
            ['municipatitie_name' => 'Santiago de María',  'department_id' =>11],
            ['municipatitie_name' => 'Tecapán',  'department_id' =>11],
            ['municipatitie_name' => 'Usulután',  'department_id' =>11],
            ['municipatitie_name' => 'Carolina',  'department_id' =>13],
            ['municipatitie_name' => 'Chapeltique',  'department_id' =>13],
            ['municipatitie_name' => 'Chinameca',  'department_id' =>13],
            ['municipatitie_name' => 'Chirilagua',  'department_id' =>13],
            ['municipatitie_name' => 'Ciudad Barrios',  'department_id' =>13],
            ['municipatitie_name' => 'Comacarán',  'department_id' =>13],
            ['municipatitie_name' => 'El Tránsito',  'department_id' =>13],
            ['municipatitie_name' => 'Lolotique',  'department_id' =>13],
            ['municipatitie_name' => 'Moncagua',  'department_id' =>13],
            ['municipatitie_name' => 'Nueva Guadalupe',  'department_id' =>13],
            ['municipatitie_name' => 'Nuevo Edén de San Juan',  'department_id' =>13],
            ['municipatitie_name' => 'Quelepa',  'department_id' =>13],
            ['municipatitie_name' => 'San Antonio del Mosco',  'department_id' =>13],
            ['municipatitie_name' => 'San Gerardo',  'department_id' =>13],
            ['municipatitie_name' => 'San Jorge',  'department_id' =>13],
            ['municipatitie_name' => 'San Luis de la Reina',  'department_id' =>13],
            ['municipatitie_name' => 'San Miguel',  'department_id' =>13],
            ['municipatitie_name' => 'San Rafael Oriente',  'department_id' =>13],
            ['municipatitie_name' => 'Sesori',  'department_id' =>13],
            ['municipatitie_name' => 'Uluazapa',  'department_id' =>13],
            ['municipatitie_name' => 'Arambala',  'department_id' =>12],
            ['municipatitie_name' => 'Cacaopera',  'department_id' =>12],
            ['municipatitie_name' => 'Chilanga',  'department_id' =>12],
            ['municipatitie_name' => 'Corinto',  'department_id' =>12],
            ['municipatitie_name' => 'Delicias de Concepción',  'department_id' =>12],
            ['municipatitie_name' => 'El Divisadero',  'department_id' =>12],
            ['municipatitie_name' => 'El Rosario (Morazán)',  'department_id' =>12],
            ['municipatitie_name' => 'Gualococti',  'department_id' =>12],
            ['municipatitie_name' => 'Guatajiagua',  'department_id' =>12],
            ['municipatitie_name' => 'Joateca',  'department_id' =>12],
            ['municipatitie_name' => 'Jocoaitique',  'department_id' =>12],
            ['municipatitie_name' => 'Jocoro',  'department_id' =>12],
            ['municipatitie_name' => 'Lolotiquillo',  'department_id' =>12],
            ['municipatitie_name' => 'Meanguera',  'department_id' =>12],
            ['municipatitie_name' => 'Osicala',  'department_id' =>12],
            ['municipatitie_name' => 'Perquín',  'department_id' =>12],
            ['municipatitie_name' => 'San Carlos',  'department_id' =>12],
            ['municipatitie_name' => 'San Fernando (Morazán)',  'department_id' =>12],
            ['municipatitie_name' => 'San Francisco Gotera',  'department_id' =>12],
            ['municipatitie_name' => 'San Isidro (Morazán)',  'department_id' =>12],
            ['municipatitie_name' => 'San Simón',  'department_id' =>12],
            ['municipatitie_name' => 'Sensembra',  'department_id' =>12],
            ['municipatitie_name' => 'Sociedad',  'department_id' =>12],
            ['municipatitie_name' => 'Torola',  'department_id' =>12],
            ['municipatitie_name' => 'Yamabal',  'department_id' =>12],
            ['municipatitie_name' => 'Yoloaiquín',  'department_id' =>12],
            ['municipatitie_name' => 'La Unión',  'department_id' =>14],
            ['municipatitie_name' => 'San Alejo',  'department_id' =>14],
            ['municipatitie_name' => 'Yucuaiquín',  'department_id' =>14],
            ['municipatitie_name' => 'Conchagua',  'department_id' =>14],
            ['municipatitie_name' => 'Intipucá',  'department_id' =>14],
            ['municipatitie_name' => 'San José',  'department_id' =>14],
            ['municipatitie_name' => 'El Carmen (La Unión)',  'department_id' =>14],
            ['municipatitie_name' => 'Yayantique',  'department_id' =>14],
            ['municipatitie_name' => 'Bolívar',  'department_id' =>14],
            ['municipatitie_name' => 'Meanguera del Golfo',  'department_id' =>14],
            ['municipatitie_name' => 'Santa Rosa de Lima',  'department_id' =>14],
            ['municipatitie_name' => 'Pasaquina',  'department_id' =>14],
            ['municipatitie_name' => 'Anamoros',  'department_id' =>14],
            ['municipatitie_name' => 'Nueva Esparta',  'department_id' =>14],
            ['municipatitie_name' => 'El Sauce',  'department_id' =>14],
            ['municipatitie_name' => 'Concepción de Oriente',  'department_id' =>14],
            ['municipatitie_name' => 'Polorós',  'department_id' =>14],
            ['municipatitie_name' => 'Lislique',  'department_id' =>14],
            ['municipatitie_name' => 'Antiguo Cuscatlán', 'department_id' => 4],
            ['municipatitie_name' => 'Chiltiupán', 'department_id' => 4],
            ['municipatitie_name' => 'Ciudad Arce', 'department_id' => 4],
            ['municipatitie_name' => 'Colón', 'department_id' => 4],
            ['municipatitie_name' => 'Comasagua', 'department_id' => 4],
            ['municipatitie_name' => 'Huizúcar', 'department_id' => 4],
            ['municipatitie_name' => 'Jayaque', 'department_id' => 4],
            ['municipatitie_name' => 'Jicalapa', 'department_id' => 4],
            ['municipatitie_name' => 'La Libertad', 'department_id' => 4],
            ['municipatitie_name' => 'Santa Tecla', 'department_id' => 4],
            ['municipatitie_name' => 'Nuevo Cuscatlán', 'department_id' => 4],
            ['municipatitie_name' => 'San Juan Opico', 'department_id' => 4],
            ['municipatitie_name' => 'Quezaltepeque', 'department_id' => 4],
            ['municipatitie_name' => 'Sacacoyo', 'department_id' => 4],
            ['municipatitie_name' => 'San José Villanueva', 'department_id' => 4],
            ['municipatitie_name' => 'San Matías', 'department_id' => 4],
            ['municipatitie_name' => 'San Pablo Tacachico', 'department_id' => 4],
            ['municipatitie_name' => 'Talnique', 'department_id' => 4],
            ['municipatitie_name' => 'Tamanique', 'department_id' => 4],
            ['municipatitie_name' => 'Teotepeque', 'department_id' => 4],
            ['municipatitie_name' => 'Tepecoyo', 'department_id' => 4],
            ['municipatitie_name' => 'Zaragoza', 'department_id' => 4],
            ['municipatitie_name' => 'Agua Caliente', 'department_id' => 5],
            ['municipatitie_name' => 'Arcatao', 'department_id' => 5],
            ['municipatitie_name' => 'Azacualpa', 'department_id' => 5],
            ['municipatitie_name' => 'Cancasque', 'department_id' => 5],
            ['municipatitie_name' => 'Chalatenango', 'department_id' => 5],
            ['municipatitie_name' => 'Citalá', 'department_id' => 5],
            ['municipatitie_name' => 'Comapala', 'department_id' => 5],
            ['municipatitie_name' => 'Concepción Quezaltepeque', 'department_id' => 5],
            ['municipatitie_name' => 'Dulce Nombre de María', 'department_id' => 5],
            ['municipatitie_name' => 'El Carrizal', 'department_id' => 5],
            ['municipatitie_name' => 'El Paraíso', 'department_id' => 5],
            ['municipatitie_name' => 'La Laguna', 'department_id' => 5],
            ['municipatitie_name' => 'La Palma', 'department_id' => 5],
            ['municipatitie_name' => 'La Reina', 'department_id' => 5],
            ['municipatitie_name' => 'Las Vueltas', 'department_id' => 5],
            ['municipatitie_name' => 'Nueva Concepción', 'department_id' => 5],
            ['municipatitie_name' => 'Nueva Trinidad', 'department_id' => 5],
            ['municipatitie_name' => 'Nombre de Jesús', 'department_id' => 5],
            ['municipatitie_name' => 'Ojos de Agua', 'department_id' => 5],
            ['municipatitie_name' => 'Potonico', 'department_id' => 5],
            ['municipatitie_name' => 'San Antonio de la Cruz', 'department_id' => 5],
            ['municipatitie_name' => 'San Antonio Los Ranchos', 'department_id' => 5],
            ['municipatitie_name' => 'San Fernando (Chalatenango)', 'department_id' => 5],
            ['municipatitie_name' => 'San Francisco Lempa', 'department_id' => 5],
            ['municipatitie_name' => 'San Francisco Morazán', 'department_id' => 5],
            ['municipatitie_name' => 'San Ignacio', 'department_id' => 5],
            ['municipatitie_name' => 'San Isidro Labrador', 'department_id' => 5],
            ['municipatitie_name' => 'Las Flores', 'department_id' => 5],
            ['municipatitie_name' => 'San Luis del Carmen', 'department_id' => 5],
            ['municipatitie_name' => 'San Miguel de Mercedes', 'department_id' => 5],
            ['municipatitie_name' => 'San Rafael', 'department_id' => 5],
            ['municipatitie_name' => 'Santa Rita', 'department_id' => 5],
            ['municipatitie_name' => 'Tejutla', 'department_id' => 5],
            ['municipatitie_name' => 'Cojutepeque', 'department_id' => 7],
            ['municipatitie_name' => 'Candelaria', 'department_id' => 7],
            ['municipatitie_name' => 'El Carmen (Cuscatlán)', 'department_id' => 7],
            ['municipatitie_name' => 'El Rosario (Cuscatlán)', 'department_id' => 7],
            ['municipatitie_name' => 'Monte San Juan', 'department_id' => 7],
            ['municipatitie_name' => 'Oratorio de Concepción', 'department_id' => 7],
            ['municipatitie_name' => 'San Bartolomé Perulapía', 'department_id' => 7],
            ['municipatitie_name' => 'San Cristóbal', 'department_id' => 7],
            ['municipatitie_name' => 'San José Guayabal', 'department_id' => 7],
            ['municipatitie_name' => 'San Pedro Perulapán', 'department_id' => 7],
            ['municipatitie_name' => 'San Rafael Cedros', 'department_id' => 7],
            ['municipatitie_name' => 'San Ramón', 'department_id' => 7],
            ['municipatitie_name' => 'Santa Cruz Analquito', 'department_id' => 7],
            ['municipatitie_name' => 'Santa Cruz Michapa', 'department_id' => 7],
            ['municipatitie_name' => 'Suchitoto', 'department_id' => 7],
            ['municipatitie_name' => 'Tenancingo', 'department_id' => 7],
            ['municipatitie_name' => 'Aguilares', 'department_id' => 6],
            ['municipatitie_name' => 'Apopa', 'department_id' => 6],
            ['municipatitie_name' => 'Ayutuxtepeque', 'department_id' => 6],
            ['municipatitie_name' => 'Cuscatancingo', 'department_id' => 6],
            ['municipatitie_name' => 'Ciudad Delgado', 'department_id' => 6],
            ['municipatitie_name' => 'El Paisnal', 'department_id' => 6],
            ['municipatitie_name' => 'Guazapa', 'department_id' => 6],
            ['municipatitie_name' => 'Ilopango', 'department_id' => 6],
            ['municipatitie_name' => 'Mejicanos', 'department_id' => 6],
            ['municipatitie_name' => 'Nejapa', 'department_id' => 6],
            ['municipatitie_name' => 'Panchimalco', 'department_id' => 6],
            ['municipatitie_name' => 'Rosario de Mora', 'department_id' => 6],
            ['municipatitie_name' => 'San Marcos', 'department_id' => 6],
            ['municipatitie_name' => 'San Martín', 'department_id' => 6],
            ['municipatitie_name' => 'San Salvador', 'department_id' => 6],
            ['municipatitie_name' => 'Santiago Texacuangos', 'department_id' => 6],
            ['municipatitie_name' => 'Santo Tomás', 'department_id' => 6],
            ['municipatitie_name' => 'Soyapango', 'department_id' => 6],
            ['municipatitie_name' => 'Tonacatepeque', 'department_id' => 6],
            ['municipatitie_name' => 'Zacatecoluca', 'department_id' => 8],
            ['municipatitie_name' => 'Cuyultitán', 'department_id' => 8],
            ['municipatitie_name' => 'El Rosario (La Paz)', 'department_id' => 8],
            ['municipatitie_name' => 'Jerusalén', 'department_id' => 8],
            ['municipatitie_name' => 'Mercedes La Ceiba', 'department_id' => 8],
            ['municipatitie_name' => 'Olocuilta', 'department_id' => 8],
            ['municipatitie_name' => 'Paraíso de Osorio', 'department_id' => 8],
            ['municipatitie_name' => 'San Antonio Masahuat', 'department_id' => 8],
            ['municipatitie_name' => 'San Emigdio', 'department_id' => 8],
            ['municipatitie_name' => 'San Francisco Chinameca', 'department_id' => 8],
            ['municipatitie_name' => 'San Pedro Masahuat', 'department_id' => 8],
            ['municipatitie_name' => 'San Juan Nonualco', 'department_id' => 8],
            ['municipatitie_name' => 'San Juan Talpa', 'department_id' => 8],
            ['municipatitie_name' => 'San Juan Tepezontes', 'department_id' => 8],
            ['municipatitie_name' => 'San Luis La Herradura', 'department_id' => 8],
            ['municipatitie_name' => 'San Luis Talpa', 'department_id' => 8],
            ['municipatitie_name' => 'San Miguel Tepezontes', 'department_id' => 8],
            ['municipatitie_name' => 'San Pedro Nonualco', 'department_id' => 8],
            ['municipatitie_name' => 'San Rafael Obrajuelo', 'department_id' => 8],
            ['municipatitie_name' => 'Santa María Ostuma', 'department_id' => 8],
            ['municipatitie_name' => 'Santiago Nonualco', 'department_id' => 8],
            ['municipatitie_name' => 'Tapalhuaca', 'department_id' => 8],
            ['municipatitie_name' => 'Cinquera', 'department_id' => 9],
            ['municipatitie_name' => 'Dolores', 'department_id' => 9],
            ['municipatitie_name' => 'Guacotecti', 'department_id' => 9],
            ['municipatitie_name' => 'Ilobasco', 'department_id' => 9],
            ['municipatitie_name' => 'Jutiapa', 'department_id' => 9],
            ['municipatitie_name' => 'San Isidro (Cabañas)', 'department_id' => 9],
            ['municipatitie_name' => 'Sensuntepeque', 'department_id' => 9],
            ['municipatitie_name' => 'Tejutepeque', 'department_id' => 9],
            ['municipatitie_name' => 'Victoria', 'department_id' => 9],
            ['municipatitie_name' => 'Apastepeque',  'department_id' =>10],
            ['municipatitie_name' => 'Guadalupe',  'department_id' =>10],
            ['municipatitie_name' => 'San Cayetano Istepeque',  'department_id' =>10],
            ['municipatitie_name' => 'San Esteban Catarina',  'department_id' =>10],
            ['municipatitie_name' => 'San Ildefonso',  'department_id' =>10],
            ['municipatitie_name' => 'San Lorenzo',  'department_id' =>10],
            ['municipatitie_name' => 'San Sebastián',  'department_id' =>10],
            ['municipatitie_name' => 'San Vicente',  'department_id' =>10],
            ['municipatitie_name' => 'Santa Clara',  'department_id' =>10],
            ['municipatitie_name' => 'Santo Domingo',  'department_id' =>10],
            ['municipatitie_name' => 'Tecoluca',  'department_id' =>10],
            ['municipatitie_name' => 'Tepetitán',  'department_id' =>10],
            ['municipatitie_name' => 'Verapaz', 'department_id' => 10],
        ];
        
        foreach ($municipalities as $mun) {
            Municipality::create($mun);
        }
    }
}