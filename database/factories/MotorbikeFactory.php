<?php

namespace Database\Factories;

use App\Models\Motorbike as MotorbikeModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MotorbikeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MotorbikeModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $marca = $this->faker->randomElement(["Suzuki", "Honda", "Yamaha", "Kawasaki", "Ducati"]);
        $modelo = $this->faker->randomElement(
            ["SV 650", "GS 500", "GSX 650 F", "CBR 500", "CB650R", "MT-09", "MT-07", "R6", "R1", 
            "Versys 650", "Ninja 650", "Ninja 1000", "ZH2", "Monster", "Supersport", "Panigale"
        ]);
        return [
            "marca"      => $marca,
            "modelo"     => $modelo,
            "cilindrada" => $this->faker->numberBetween(500, 1200),
            "potencia"   => $this->faker->numberBetween(100, 200),
            "anyo"       => $this->faker->year(),
            "url_imagen" => $this->faker->randomElement([
                "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs1.cdn.autoevolution.com%2Fimages%2Fmoto_gallery%2FKAWASAKI-Versys-650-6735_3.jpg&f=1&nofb=1",
                "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.asphaltandrubber.com%2Fwp-content%2Fgallery%2Fducati-1299-panigale%2F2015-Ducati-1299-Panigale-06.jpg&f=1&nofb=1",
                "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.automagazin.at%2Fwp-content%2Fuploads%2F2018%2F01%2Fsug.jpg&f=1&nofb=1",
                "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.actumoto.ch%2Fwp-content%2Fuploads%2F2020%2F01%2FHonda_CB1000R_Stardust_stat_SPH7892.jpg&f=1&nofb=1",
                "https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.agoramoto.com%2Fwp-content%2Fuploads%2F2020%2F05%2F195876_2020_HONDA_CBR1000RR-R_SP.jpg&f=1&nofb=1",
                "https://i0.wp.com/www.motorcycle.com/blog/wp-content/uploads/2019/11/110519-Suzuki-GSX-S1000-2.jpg?ssl=1",
                "https://www.totalmotorcycle.com/wp-content/uploads/2020/11/2021-Yamaha-MT-10b.jpg",
                "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.asphaltandrubber.com%2Fwp-content%2Fuploads%2F2014%2F11%2F2015-yamaha-r1.jpg&f=1&nofb=1",
                "https://www.ducatistoke.co.uk/img/Monster.jpg",
                "https://www.mystockmanager.co.uk/i/?image_id=3187882&item_type=vehicle_new"
            ]),
            "slug"     => Str::slug($marca." ".$modelo, "-")
        ];
    }
}
