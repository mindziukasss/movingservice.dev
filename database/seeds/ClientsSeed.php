<?php

use App\Models\MSClients;
use Illuminate\Database\Seeder;

class ClientsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $clients = [
            ["id" => "client1", "name" => "Jonas", "phone_number" => "8-609-11111", "address" => "Savnorių pr. 8", "type" => "I", "comment" => "Sunkus darbas"],
           	["id" => "client2", "name" => "Petras", "phone_number" => "8-609-11112", "address" => "Pilies g. 10", "type" => "I", "comment" => "Darbas apie dvi valandas"],
           	["id" => "client3", "name" => "UAB Trakt", "phone_number" => "8-609-11113", "address" => "Trakų g. 7", "type" => "L", "comment" => "Tik vairuoti"],
           	["id" => "client4", "name" => "UAB Sabala", "phone_number" => "8-609-11114", "address" => "Geldų g. 23", "type" => "L", "comment" => "Pernešti baldu vežti nereikia"],
           	["id" => "client5", "name" => "Tadas", "phone_number" => "8-609-11115", "address" => "Slyvų g. 6", "type" => "I", "comment" => "Knygos iš penkoto į pirmą"],
           	["id" => "client6", "name" => "karolis", "phone_number" => "8-609-11116", "address" => "Kuku g. 18", "type" => "I", "comment" => "Tik vairuoti"],

        ];
        DB::beginTransaction();
        try {
            foreach ($clients as $client) {
                $record = MSClients::find($client['id']);
                if (!$record) {
                    MSClients::create($client);
                }
            }
        } catch (Exception $e) {
            DB::rollback();
            echo 'Point of failure '. $e->getCode() . ' ' . $e->getMessage();
            throw new Exception($e);
        }
        DB::commit();
    }

}
