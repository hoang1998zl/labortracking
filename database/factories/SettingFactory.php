<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'website_address' => '200 đường số 9, phường Tân Phú, Quận 7, TP. Hồ Chí Minh',
            'website_phone' => '094 842 7979',
            'website_email' => 'gn24@gmail.com',
            'website_tax_code' => '0318533085',
            'website_name' => 'Công Ty Cổ Phần GN24',
            'meta_description' => '',
            'meta_keyword' => '',
        ];
    }
}
