<?php

namespace App\Console\Commands;

use App\Models\Person;
use Illuminate\Console\Command;

class ImportCongress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:congress';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = "https://raw.githubusercontent.com/CivilServiceUSA/us-senate/master/us-senate/data/us-senate.json";

        $json = json_decode(file_get_contents($url));

        foreach($json as $item) {
            $person = Person::firstOrNew(['opensecrets' => $item->opensecrets, 'office' => 'senate']);
            $array = (array) $item;

            $person->fill($array);
            $person->save();
        }

        $url = "https://raw.githubusercontent.com/CivilServiceUSA/us-house/master/us-house/data/us-house.json";

        $json = json_decode(file_get_contents($url));

        foreach($json as $item) {
            $person = Person::firstOrNew(['opensecrets' => $item->opensecrets, 'office' => 'house']);
            $array = (array) $item;

            $person->fill($array);
            $person->save();
        }
    }
}
