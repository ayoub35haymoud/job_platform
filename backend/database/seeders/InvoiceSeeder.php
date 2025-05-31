<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('invoices')->insert([
            [
                'subscribe_id' => 1,
                'recruiter_id' => 1,
                'invoice_number' => 'INV-0001',
                'amount' => 29.99,
                'currency' => 'CAD',
                'payment_method' => 'stripe',
                'payment_reference' => 'ch_1ABC',
                'status' => 'paid',
                'issued_at' => Carbon::parse('2025-05-01 10:00:00'),
                'paid_at' => Carbon::parse('2025-05-01 10:05:00'),
                'pdf_path' => '/invoices/INV-0001.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subscribe_id' => 2,
                'recruiter_id' => 2,
                'invoice_number' => 'INV-0002',
                'amount' => 79.99,
                'currency' => 'CAD',
                'payment_method' => 'paypal',
                'payment_reference' => 'PAYID-XYZ123',
                'status' => 'paid',
                'issued_at' => Carbon::parse('2025-05-05 09:00:00'),
                'paid_at' => Carbon::parse('2025-05-05 09:01:00'),
                'pdf_path' => '/invoices/INV-0002.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
