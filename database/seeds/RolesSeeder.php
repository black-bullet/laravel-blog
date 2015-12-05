<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RolesSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();
        DB::table('permissions')->delete();
        DB::table('permission_role')->delete();

        //Create user roles
        $user = new Role();
        $user->name = 'user';
        $user->display_name = 'Project User';
        $user->description = 'Just User';
        $user->save();

        $admin = new Role();
        $admin->name = 'admin';
        $admin->display_name = 'User Administrator';
        $admin->description = 'User is allowed to manage and edit other users';
        $admin->save();

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password'=>bcrypt('12345678')
        ]);
        $user = User::where('email', '=', 'admin@email.com')->first();
        $user->attachRole($admin);


        //Create user permissions
//        $createPost = new Permission();
//        $createPost->name = 'create-post';
//        $createPost->display_name = 'create posts';
//        $createPost->description = 'create new blog posts';
//        $createPost->save();
//
//        $updatePost = new Permission();
//        $updatePost->name = 'update-post';
//        $updatePost->display_name = 'update posts';
//        $updatePost->description = 'update blog posts';
//        $updatePost->save();
//
//        $deletePost = new Permission();
//        $deletePost->name = 'delete-post';
//        $deletePost->display_name = 'delete posts';
//        $deletePost->description = 'delete blog posts';
//        $deletePost->save();
//
        //Attach permission
//        $admin->attachPermissions([
//            $createPost,
//            $updatePost,
//            $deletePost
//        ]);
    }
}