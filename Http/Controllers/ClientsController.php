<?php 

namespace Http\Controllers;

use Services\ValidatorService;

class ClientsController extends Controller
{
    public function index()
    {
        $currentUserId = 1;

        $clients = $this->db->query("select * from clients")->get();

        return view('Clients/index.view.php', [
            'clients' => $clients
        ]);
    }

    public function create()
    {
        return view('Clients/create.view.php');
    }

    public function store()
    {
        $errors = [];

        $rules = [
            'name' => 'required|string|min:2|max:255',
        ];

        $errors = ValidatorService::validate($_POST, $rules);

        if (!empty($errors)) {
            return view('Clients/create.view.php', [
                'errors' => $errors,
            ]);
        }

        $this->db->query("INSERT INTO clients (name, user_id) VALUES(:name, :user_id)", [
            'name' => $_POST['name'],
            'user_id' => 1
        ]);
    
        header('location: /clients');
        die();
    }

    public function show()
    {
        $client = $this->db->query("select * from clients where id = :id", ['id' => $_GET['id']])->findOrFail();

        return view('Clients/show.view.php', [
            'heading' => 'Client',
            'client' => $client
        ]);
    }

    public function edit()
    {
        $client = $this->db->query("select * from clients where id = :id", ['id' => $_GET['id']])->findOrFail();

        return view('Clients/edit.view.php', [
            'heading' => 'Client',
            'client' => $client,
            'errors' => []
        ]);
    }

    public function update()
    {
        $errors = [];

        $client = $this->db->query("select * from clients where id = :id", [
            'id' => $_POST['id']])->findOrFail();

        $rules = [
            'name' => 'required|string|min:2|max:255',
        ];

        $errors = ValidatorService::validate($_POST, $rules);

        if (!empty($errors)) {
            return view('Clients/edit.view.php', [
                'errors' => $errors,
                'client' => $client
            ]);
        }

        $this->db->query('update clients set name = :name where id = :id', [
            'name' => $_POST['name'],
            'id' => $_POST['id']
        ]);
    
        header('location: /clients');
        die();
    }

    public function delete()
    {
        $client = $this->db->query("select * from clients where id = :id", [
            'id' => $_POST['id']])->findOrFail();

        $this->db->query("delete from clients where id = :id", [
            'id' => $_POST['id']
        ]);

        header('location: /clients');
        die();
        
    }

}   