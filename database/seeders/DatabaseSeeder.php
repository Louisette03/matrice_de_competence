<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Domain;
use App\Models\Formation;
use App\Models\Module;
use App\Models\Project;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::factory()->create([
            'name' => "admin",
        ]);

        $collabRole = Role::factory()->create([
            'name' => "collaborator",
        ]);

        \App\Models\User::factory(9)->create();

        Domain::factory(10)->create();
        Project::factory(10)->create();
        Module::factory(10)->create();
        Formation::factory(10)->create();

        foreach( \App\Models\User::all() as $user) {
            $user->roles()->attach($collabRole);
            $user->modules()->attach(Module::all()->random(), ["level" => Arr::random(["not_knowledge", 'little_knowledge', 'master'])]) ;
            $user->save();
        }

        foreach(Module::all() as $module){
            $module->projects()->attach(Project::all()->random()) ;
            $module->save();
        }

        foreach(Domain::all() as $domain){
            $domain->formations()->attach(Formation::all()->random()) ;
            $domain->save();
        }

        $adminUser = \App\Models\User::factory()->create([
            'fname' =>"admin",
            'lname' =>"admin",
            'register' =>Str::random(10),
            'profile' => \Illuminate\Support\Arr::random(['it', 'at']),
            'status' => 'intern',
            'hiring_date' => Carbon::now(),
            'email' => 'admin@sgci.ci',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $adminUser->roles()->attach($adminRole);
        $adminUser->save();
    }
}
