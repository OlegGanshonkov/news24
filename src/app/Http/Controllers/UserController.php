<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::select('SELECT * FROM users2 WHERE age > ?', [18]);
        return view('user.index', ['users' => $users]);
    }

    public function insert()
    {
        $insert = DB::insert('INSERT INTO users2 (name, surname, age) VALUES (?,?,?)', ['shluha', 'suka', '34']);
        return view('user.insert', ['insert' => $insert]);
    }

    public function delete()
    {
        $delete = DB::delete('DELETE FROM users2 WHERE id = :id', ['id' => 7]);
    }

    public function update()
    {
        $update = DB::update('UPDATE users2 SET age = :age WHERE name = :name', ['age' => 14, 'name' => 'shluha']);
        return $update;
    }
}
