<?php

namespace App\Console\Commands;


use GuzzleHttp\Client;
use Illuminate\Console\Command;

class importCidades extends Command
{  
    
    
    protected $signature = 'command:importCidades';
    
    protected $description = 'Command description';

   
    public function __construct()
    {
        parent::__construct();
    }

    
    public function handle()
    {
        $this->saveApiData();
        return Command::SUCCESS;
      
    }

    

    public function saveApiData($uf = 35)
    {
        $client = new Client();
        $res = $client->get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$uf}/distritos"
        );

        $result = $res->getBody()->getContents();
        $file = 'saveCity.txt';
        $current = file_get_contents($file);
        $current .= $result;
        file_put_contents($file, $current);
        echo $result;

    }



    // Consumo da API com curl
    // public function saveApi($uf = 35)
    // {   
    //     $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL,"https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$uf}/distritos");
    //         $result = curl_exec($ch);
    //         curl_close($ch);
        
    //     echo $result;

    // }
}
