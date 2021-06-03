<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\DessertMenu;
use App\Models\MainCourseMenu;
use App\Models\Menu;
use App\Models\RoomAndSuite;
use App\Models\StarterMenu;
use App\Models\Testimony;
use App\Models\TypeBed;
use App\Models\TypeRoom;
use Illuminate\Database\Seeder;
use function count;
use function rand;

/**
 * @property  faker
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $type_room = [
            'Chambre standard',
            'Chambre premium'
        ];

        $type_bed = [
            'Queen size (160 cm x 200 cm)',
            'King size (180 cm x 200 cm)'
        ];

        for ($i = 0; $i < count($type_room); $i++) {
            TypeRoom::create([
                'type_room' => $type_room[$i],
                'type_bed' => $type_bed[$i]
            ]);
        }

        $room_and_suites = [
            [
                'name' => 'Ecume',
                'img' => 'img/img_1.jpg',
                'location' => '(au rez-de-chaussée)',
                'max_people' => 4,
                'price' => 120,
                'type_room_id' => 1,
            ],
            [
                'name' => 'Marée haute',
                'img' => 'img/img_2.jpg',
                'location' => 'Balcon ou Fenêtre Arquée',
                'max_people' => 4,
                'price' => 130,
                'type_room_id' => 1,
            ],
            [
                'name' => 'Cabine',
                'img' => 'img/img_3.jpg',
                'location' => 'Terrasse',
                'max_people' => 6,
                'price' => 150,
                'type_room_id' => 1,
            ],
            [
                'name' => 'Sable',
                'img' => 'img/img_4.jpg',
                'location' => 'Balcon',
                'max_people' => 4,
                'price' => 170,
                'type_room_id' => 2,
            ],
            [
                'name' => 'Vigie',
                'img' => 'img/img_5.jpg',
                'location' => 'Terrasse',
                'max_people' => 2,
                'price' => 98,
                'type_room_id' => 2,
            ]
        ];

        foreach ($room_and_suites as $room) {
            RoomAndSuite::create($room);
        }

//        collect($room_and_suites)->each(fn($room_and_suite) => RoomAndSuite::create($room_and_suite));

        $all_testimonies = [
            [
                'name' => 'Pierre',
                'img' => 'img/profile_1.jpg',
                'star' => 5,
                'comment' => "C'était vraiment genial !!!! Super hotel, super ptit dej au top !",
            ],
            [
                'name' => 'Paul',
                'img' => 'img/profile_2.jpg',
                'star' => 4,
                'comment' => "Tres bon séjour, nous avons apprécié notre chambre et les conseils du personnel aux petit soins pour nous. La region est magnifique, et on reviendra surement ! <br Merci Relais du Pahre",
            ],
            [
                'name' => 'Jeanine',
                'img' => 'img/profile_3.jpg',
                'star' => 1,
                'comment' => "Séjour moyen, personnel désagréable au possible, et en plus il y avais un cheveu dans mon croissant... Sympa... <br\> Enfin, la vue est belle en tous cas...",
            ],
        ];

        foreach ($all_testimonies as $testimonies) {
            Testimony::create($testimonies);
        }

        $all_menus = [
            [
                'name' => '1',
                'description' => null,
                'drink' => null,
                'price' => 26,
            ],
            [
                'name' => '2',
                'description' => null,
                'drink' => null,
                'price' => 31,
            ],
            [
                'name' => 'enfant',
                'description' => 'moins de 12 ans',
                'drink' => 'Jus de fruits, Coca Cola, Ice Tea (20 cl)',
                'price' => 12.50,
            ],
        ];

        foreach ($all_menus as $menu) {
            Menu::create($menu);
        }

        $all_starters = [
            [
                'menu_id' => 1,
                'content' => 'Croustillants de chèvre, miel au piment d’Espelette, mesclun de salade',
            ],
            [
                'menu_id' => 1,
                'content' => 'Œuf mollet frit aux bretzels, lentilles au xérès et émulsion au lard fumé',
            ],
            [
                'menu_id' => 1,
                'content' => 'Petit tartare de bœuf médocain préparé par le chef, mesclun de salade',
            ],
            [
                'menu_id' => 1,
                'content' => 'Assiette de jambon Serrano et ses toasts grillés',
            ],
            [
                'menu_id' => 2,
                'content' => 'Assiette de charcuterie, jambon Serrano et rillette d’oie',
            ],
            [
                'menu_id' => 2,
                'content' => 'Saumon fumé par nos soins, betteraves en pickles et crème légère au yuzu',
            ],
            [
                'menu_id' => 2,
                'content' => 'Cassolette d’escargots',
            ],
            [
                'menu_id' => 2,
                'content' => 'Mi-cuit de foie gras de canard, chutney de fruits de saison',
            ],
        ];

        foreach ($all_starters as $starter) {
            StarterMenu::create($starter);
        }

        $all_main_courses = [
            [
                'menu_id' => 1,
                'content' => 'Dos de lieu noir, beurre blanc à l’orange et mousseline de carotte',
            ],
            [
                'menu_id' => 1,
                'content' => 'Suprême de poulet rôti de Vensac, risotto crémeux aux champignons',
            ],
            [
                'menu_id' => 1,
                'content' => 'Salade Médocaine',
            ],
            [
                'menu_id' => 2,
                'content' => 'Onglet de bœuf, sauce au poivre ou sauce à l’échalote et frites maison',
            ],
            [
                'menu_id' => 2,
                'content' => 'Filet de bar à la plancha, fondue de poireaux et crème aux herbes fraiches',
            ],
            [
                'menu_id' => 2,
                'content' => 'Quasi de veau rôti, crumble de noisette, pommes fondantes',
            ],
            [
                'menu_id' => 2,
                'content' => 'Noix de Saint-Jacques rôties, mousseline de butternut et crème safranée \n (Supplément 6.00€)',
            ],
            [
                'menu_id' => 3,
                'content' => 'Steak haché de bœuf français, frites maison',
            ],
            [
                'menu_id' => 3,
                'content' => 'Croquettes de poisson de Lacanau',
            ],
        ];

        foreach ($all_main_courses as $main_course) {
            MainCourseMenu::create($main_course);
        }

        $all_desserts = [
            [
                'menu_id' => 1,
                'content' => 'Crème brulée à la vanille de bourbon',
            ],
            [
                'menu_id' => 1,
                'content' => 'Tiramisu au café',
            ],
            [
                'menu_id' => 1,
                'content' => 'Glace 2 ou 3 boules',
            ],
            [
                'menu_id' => 2,
                'content' => 'Crème brulée à la vanille de bourbon',
            ],
            [
                'menu_id' => 2,
                'content' => 'Tiramisu au café',
            ],
            [
                'menu_id' => 3,
                'content' => 'Mousse au chocolat ou Glace Smarties',
            ],
        ];

        foreach ($all_desserts as $dessert) {
            DessertMenu::create($dessert);
        }

        Booking::factory(5)->create();
    }
}
