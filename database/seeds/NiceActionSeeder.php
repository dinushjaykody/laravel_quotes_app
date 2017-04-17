<?php

use Illuminate\Database\Seeder;
use App\NiceAction;

class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nice_action = new NiceAction();
        $nice_action1 = new NiceAction();
        $nice_action2 = new NiceAction();

        $nice_action->name = 'Greet';
        $nice_action->niceness = 3;
        $nice_action->save();

        $nice_action1->name = 'Hug';
        $nice_action1->niceness = 6;
        $nice_action1->save();

        $nice_action2->name = 'Kiss';
        $nice_action2->niceness = 6;
        $nice_action2->save();

    }
}
