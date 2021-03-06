<?php

use App\Admin;
use App\Advertiser;
use App\Area;
use App\AuctionEstate;
use App\Client;
use App\Estate;
use App\EstateImage;
use App\Links;
use App\LocalEstate;
use App\Page;
use App\Portfolio;
use App\Profile;
use App\RequestEstate;
use App\Role;
use App\Settings;
use App\User;
use App\UserImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(AdSortTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(DestinationTableSeeder::class);
        $this->call(DurationTableSeeder::class);
        $this->call(OfferTableSeeder::class);
        $this->call(PaymentSortTableSeeder::class);
        $this->call(PremiumTableSeeder::class);
        $this->call(PriceSortTableSeeder::class);
        $this->call(SortTableSeeder::class);
        $this->call(RoleTableSeeder::class);   
        $this->call(TeamTableSeeder::class);    
        


        $role1 = Role::whereId(1)->firstOrFail();
        $role2 = Role::whereId(2)->firstOrFail();
        $role3 = Role::whereId(3)->firstOrFail();
        $role4 = Role::whereId(4)->firstOrFail();
        $role5 = Role::whereId(5)->firstOrFail();
        $role6 = Role::whereId(6)->firstOrFail();
        $role7 = Role::whereId(7)->firstOrFail();
        $role8 = Role::whereId(8)->firstOrFail();
        $role9 = Role::whereId(9)->firstOrFail();

        factory(User::class, 400)->create();
        factory(Profile::class, 400)->create();

        App\User::where('id' , '>' , '50')->each(function ($user) use ($role1) { 
            $user->roles()->attach($role1->id); 
        });

        App\User::where('id' , '>' , '100')->where('id' , '<' , '50')->each(function ($user) use ($role2) { 
            $user->roles()->attach($role2->id); 
        });

        App\User::where('id' , '>' , '150')->where('id' , '<' , '100')->each(function ($user) use ($role3) { 
            $user->roles()->attach($role3->id); 
        });

        App\User::where('id' , '>' , '200')->where('id' , '<' , '150')->each(function ($user) use ($role4) { 
            $user->roles()->attach($role4->id); 
        });

        App\User::where('id' , '>' , '250')->where('id' , '<' , '200')->each(function ($user) use ($role5) { 
            $user->roles()->attach($role5->id); 
        });

        App\User::where('id' , '>' , '300')->where('id' , '<' , '250')->each(function ($user) use ($role6) { 
            $user->roles()->attach($role6->id); 
        });

        App\User::where('id' , '>' , '350')->where('id' , '<' , '300')->each(function ($user) use ($role7) { 
            $user->roles()->attach($role7->id); 
        });

        App\User::where('id' , '>' , '400')->where('id' , '<' , '350')->each(function ($user) use ($role8) { 
            $user->roles()->attach($role8->id); 
        });

        App\User::where('id' , '>' , '450')->where('id' , '<' , '400')->each(function ($user) use ($role9) { 
            $user->roles()->attach($role9->id); 
        });

        
        factory(Estate::class, 100)->create();*/
        //factory(Advertiser::class, 200)->create();
        /*factory(LocalEstate::class, 50)->create();
        factory(AuctionEstate::class, 50)->create();
        factory(RequestEstate::class, 50)->create();

       
        factory(Admin::class, 20)->create();

        factory(Settings::class, 1)->create();

        factory(Client::class, 15)->create();

        factory(Portfolio::class, 15)->create();

        $this->call(PageTableSeeder::class);

        factory(Page::class, 50)->create();

        $this->call(IconTableSeeder::class);

        factory(Links::class, 20)->create();

        factory(EstateImage::class, 139)->create();

        factory(UserImage::class, 139)->create();*/

    }
}
