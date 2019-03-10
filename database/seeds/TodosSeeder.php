<?php

use Illuminate\Database\Seeder;
use App\todos;
class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=0; $i<10; $i++){
        	todos::create([
        		'todo'=>str_random(10),
        		'content'=>str_random(40)]);
        }    }
}
