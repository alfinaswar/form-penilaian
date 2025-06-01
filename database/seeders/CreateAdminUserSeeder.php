<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Hardik Savani',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),

            'nama_sekolah' => 'SMA Negeri 1 Bandung',
            'npsn' => '20202020',
            'jenjang' => 'SMA',
            'status_sekolah' => 'Negeri',
            'alamat_sekolah' => 'Jl. Merdeka No. 123, Bandung',
            'kota' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'kode_pos' => '40123',
            'telepon_sekolah' => '022-1234567',
            'email_sekolah' => 'sman1bdg@example.sch.id',
            'website_sekolah' => 'https://sman1bdg.sch.id',
            'deskripsi_sekolah' => 'SMA favorit di kota Bandung dengan berbagai prestasi akademik dan non-akademik.'
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
