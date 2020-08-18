<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            [
                'id'=>1,
                'name'=>'Deepak Sharma',
                'email'=>'qualdev.deepak@gmail.com',
                'phone'=>'9828891233',
                'type'=>'admin',
                'password'=>'$2y$10$KRRrgws7hCtXVPnkfDA1UOKXAyoWkfG4sUkvIuwhQ1CTqOpusIauC',
                'image'=>'',
                'status'=>1
            ],[
                'id'=>2,
                'name'=>'Rajesh k Vaishnav',
                'email'=>'qualdev.rajesh@gmail.com',
                'phone'=>'9828891233',
                'type'=>'subadmin',
                'password'=>'$2y$10$KRRrgws7hCtXVPnkfDA1UOKXAyoWkfG4sUkvIuwhQ1CTqOpusIauC',
                'image'=>'',
                'status'=>1
            ],
        ];
        foreach ($adminRecords as $key =>$record){
            App\Admin::create($record);
        }
    }
}
