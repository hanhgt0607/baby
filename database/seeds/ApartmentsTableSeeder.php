<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('apartments')->delete();
        DB::table('apartments')->insert([
            [
                'id'=>1,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>8000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>2,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>50000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>3,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>6000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>4,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>4000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>5,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>100000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>6,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>900000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>7,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>3000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>8,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>60000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>9,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>2000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>10,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>2000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>11,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>200,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>12,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>20000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>13,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>20000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>14,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>2000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>15,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>9000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>16,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>20000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>17,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>3000000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],[
                'id'=>18,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>500000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>19,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>20000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
            [
                'id'=>20,
                'name'=>'Sunhouse',
                'address'=>'Hà Nội',
                'price'=>20000,
                'general_information'=>'Nhà đẹp giá gốc',
                'details'=>'Chung cư thoáng mát, xanh, sạch, đẹp',
                'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0tmtH8ikesLtO08aLvBeKbgqwawZ52-orY46vbuJVP8b6s4JN',
                'status'=>1
            ],
        ]);
    }
}
