<?php

use App\Employee;
use App\Task;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Employee::class, 100) -> make()
                                    -> each(function($employee){
        $task = Task::inRandomOrder()-> first();
        $employee -> task() -> associate($task);
        $employee -> save();
      });
    }
}
