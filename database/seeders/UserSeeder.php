<?php

namespace Database\Seeders;

use App\Models\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [
            // admin 1
            [
                'name' => 'Ashab Uddin',
                'email' => 'ashab@gmail.com',
                'phone' => '01725489562',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 1,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Jahid Rony',
                'email' => 'jahid@gmail.com',
                'phone' => '01725487952',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 1,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Rabib Hasan',
                'email' => 'rabib@gmail.com',
                'phone' => '01785495623',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 1,
                'language' => 'en',
                'status' => 1,
            ],

            // moderator 2
            [
                'name' => 'Shahidul Islam',
                'email' => 'shahidul@gmail.com',
                'phone' => '01924489562',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 2,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Sajedul Haq',
                'email' => 'sajedul@gmail.com',
                'phone' => '01826489562',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 2,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Harunur Rashid',
                'email' => 'harun@gmail.com',
                'phone' => '01356985245',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 2,
                'language' => 'en',
                'status' => 1,
            ],

            // employee 3
            [
                'name' => 'Obaydul Haq',
                'email' => 'employeer1@gmail.com',
                'phone' => '01524589562',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 3,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Eng. Ismail Hosain',
                'email' => 'employeer2@gmail.com',
                'phone' => '01451289562',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 3,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Mobarak Hossain',
                'email' => 'employeer3@gmail.com',
                'phone' => '01457889563',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 3,
                'language' => 'en',
                'status' => 1,
            ],

            // landowner 4
            [
                'name' => 'Adv. Parvej Hossain',
                'email' => 'owner1@gmail.com',
                'phone' => '01824595785',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 4,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Adv. Hamidur Rahaman',
                'email' => 'owner2@gmail.com',
                'phone' => '01354785896',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 4,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Dr. Mahabub Alam',
                'email' => 'owner3@gmail.com',
                'phone' => '01524587956',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 4,
                'language' => 'en',
                'status' => 1,
            ],
            // client 5
            [
                'name' => 'Prof. Barkat Ullah',
                'email' => 'barkat@gmail.com',
                'phone' => '01589562345',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 5,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Prof. Hasanuzzaman',
                'email' => 'hasan@gmail.com',
                'phone' => '01989562345',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 5,
                'language' => 'en',
                'status' => 1,
            ],
            [
                'name' => 'Dr. Rejaul Karim',
                'email' => 'rejaul@gmail.com',
                'phone' => '01512562345',
                'password' => Crypt::encryptString('12345678'),
                'role_id' => 5,
                'language' => 'en',
                'status' => 1,
            ],
        ];


        foreach ($users as $key => $value) {

            User::create($value);
        }
    }
}
