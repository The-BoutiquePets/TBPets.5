<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;

class CreateCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Categories::create([
          'img_category' => 'https://th.bing.com/th/id/OIP.rujM_LLcgUwTqhZOzbxs9AHaFj?pid=ImgDet&rs=1',
          'name_category' => 'Comida Seca'
      ]);
      Categories::create([
          'img_category' => 'https://th.bing.com/th/id/OIP.zVH8MHMkoQkgZtYnJYaEbAHaHa?pid=ImgDet&rs=1',
          'name_category' => 'Comida Humeda'
      ]);
      Categories::create([
          'img_category' => 'https://3.bp.blogspot.com/-oPPGWxQ0E9Q/WXA09DCDnGI/AAAAAAAHNh8/JjXAJUqhLtIg2nmMLeYJvrpC7GW3pZ4SQCLcBGAs/s1600/Cookie-PNG-File.png',
          'name_category' => 'Galletas'
      ]);
    }
}
