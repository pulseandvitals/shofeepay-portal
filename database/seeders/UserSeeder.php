<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * @var Faker $faker
     */
    protected $faker;
    public function __construct(Faker $faker)
    {
        $this->faker = $faker;
    }
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $limit = config('env') == 'local' ? 5 : 10;

        foreach(range(1,$limit) as $value) {
            User::factory()->create([
                'name' => $this->faker->name(),
                'email' => $this->faker->safeEmail(),
                'role' => 'User',
                'avatar' => $this->faker->randomDigit(6),
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]);
        }
        $this->AdminSeeder();
    }
    private function AdminSeeder()
    {
        User::create([
            'name' => 'ShofeePay Admin',
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'avatar' => $this->faker->image(),
            'password' => bcrypt('password'),
        ]);
    }
}
