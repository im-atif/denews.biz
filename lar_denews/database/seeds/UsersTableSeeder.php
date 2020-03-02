<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'      =>  'Atif Ibrahim',
            'slug'      =>  'admin',
            'email'     =>  'admin@denewz.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  1
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/admin.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);

        $user = App\User::create([
            'name'      =>  'Rafia Numan',
            'slug'      =>  'rafia',
            'email'     =>  'rafia@denews.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  0
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/rafia.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);
        
        $user = App\User::create([
            'name'      =>  'Muhammad Irfan',
            'slug'      =>  'irfan',
            'email'     =>  'irfan@denews.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  0
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/irfan.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);
        
        $user = App\User::create([
            'name'      =>  'Aminah Sheikh',
            'slug'      =>  'aminah',
            'email'     =>  'aminah@denews.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  0
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/aminah.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);
        
        $user = App\User::create([
            'name'      =>  'Momal Yaqoob',
            'slug'      =>  'momal',
            'email'     =>  'momal@denews.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  0
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/momal.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);
        
        $user = App\User::create([
            'name'      =>  'Rohan Afridi',
            'slug'      =>  'rohan',
            'email'     =>  'rohan@denews.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  0
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/rohan.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);

        $user = App\User::create([
            'name'      =>  'Usman Khan',
            'slug'      =>  'usman',
            'email'     =>  'usman@denews.biz',
            'password'  =>  bcrypt('password'),
            'admin'     =>  0
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  '/uploads/team/usman.jpg',
            'about'     =>  'At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.',
            'web'       =>  'https://www.dedezigners.com',
            'facebook'  =>  'https://www.facebook.com',
            'instagram' =>  'https://www.instagram.com',
            'twitter'   =>  'https://www.twitter.com',
            'linkedin'  =>  'https://www.linkedin.com'
        ]);
    }
}
