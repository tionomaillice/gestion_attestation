<?php

namespace Database\Seeders;

use App\Models\AttestationRetraits;
use Illuminate\Database\Seeder;
use App\Models\Attestations;
use App\Models\Demande;
use App\Models\Demandes;
use App\Models\User;
use App\Models\Dossiers;
use App\Models\Retraits;
use App\Models\UserPermissions;
use App\Models\UserRoles;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call(TypeAttestationsSeeder::class);
        Attestations::factory(10)->create();
        User::factory(10)->create();
        Demandes::factory(10)->create();
        Retraits::factory(10)->create();
        //UserPermissions::factory(10)->create();
        //UserRoles::factory(10)->create();
        $this-> call(PermissionsSeeder::class);
        $this-> call(RolesSeeder::class);
        $this-> call(MentionsSeeder::class);
        $this-> call( StatutDemandeSeeder::class);
        // \App\Models\User::factory(10)->create();


        User::find(1)-> roles()-> attach(1);
        User::find(2)-> roles()-> attach(2);
        User::find(3)-> roles()-> attach(3);
        User::find(4)-> roles()-> attach(4);
        User::find(5)-> roles()-> attach(5);
    }
}
