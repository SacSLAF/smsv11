<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            ['name' => 'Dashboard', 'slug' => 'view-dashboard', 'groupby' => 0, 'description' => 'Access the main dashboard'],

            ['name' => 'User', 'slug' => 'view-user', 'groupby' => 1, 'description' => 'View user details'],
            ['name' => 'User', 'slug' => 'add-user', 'groupby' => 1, 'description' => 'Add a new user'],
            ['name' => 'User', 'slug' => 'edit-user', 'groupby' => 1, 'description' => 'Edit user details'],
            ['name' => 'User', 'slug' => 'delete-user', 'groupby' => 1, 'description' => 'Delete a user'],

            ['name' => 'Role', 'slug' => 'view-role', 'groupby' => 2, 'description' => 'View role details'],
            ['name' => 'Role', 'slug' => 'add-role', 'groupby' => 2, 'description' => 'Add a new role'],
            ['name' => 'Role', 'slug' => 'edit-role', 'groupby' => 2, 'description' => 'Edit role details'],
            ['name' => 'Role', 'slug' => 'delete-role', 'groupby' => 2, 'description' => 'Delete a role'],

            ['name' => 'Category', 'slug' => 'view-category', 'groupby' => 3, 'description' => 'View category details'],
            ['name' => 'Category', 'slug' => 'add-category', 'groupby' => 3, 'description' => 'Add a new category'],
            ['name' => 'Category', 'slug' => 'edit-category', 'groupby' => 3, 'description' => 'Edit category details'],
            ['name' => 'Category', 'slug' => 'delete-category', 'groupby' => 3, 'description' => 'Delete a category'],

            ['name' => 'Subcategory', 'slug' => 'view-subcategory', 'groupby' => 4, 'description' => 'View subcategory details'],
            ['name' => 'Subcategory', 'slug' => 'add-subcategory', 'groupby' => 4, 'description' => 'Add a new subcategory'],
            ['name' => 'Subcategory', 'slug' => 'edit-subcategory', 'groupby' => 4, 'description' => 'Edit subcategory details'],
            ['name' => 'Subcategory', 'slug' => 'delete-subcategory', 'groupby' => 4, 'description' => 'Delete a subcategory'],

            ['name' => 'Product', 'slug' => 'view-product', 'groupby' => 5, 'description' => 'View product details'],
            ['name' => 'Product', 'slug' => 'add-product', 'groupby' => 5, 'description' => 'Add a new product'],
            ['name' => 'Product', 'slug' => 'edit-product', 'groupby' => 5, 'description' => 'Edit product details'],
            ['name' => 'Product', 'slug' => 'delete-product', 'groupby' => 5, 'description' => 'Delete a product'],
        ];

        DB::table('permissions')->insert($permission);
    }
}
