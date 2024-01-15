<?php

namespace class;

class UserManager
{
  private PDO $database;
  private array $users = [] ;
  public function __construct($database)
  {
    $this->database = $database;
  }

  public function insert(User $user) : void
  {
    $request = $this->database->prepare('INSERT INTO user (nom, prenom, age) VALUES (:nom , :prenom, :age)');
    $request->execute([
      'nom' => $user->getNom(),
      'prenom' => $user->getPrenom(),
      'age' => $user->getAge()
    ]);
  }

  public function read(): array
  {
    $request = $this->database->query('SELECT * FROM user');
    $users = $request->fetchAll();
    return $users;
  }

  public function hydrate(array $data) : void 
  {
    foreach ($data as $user) {
      $newUser = new User($user);
      $this->users[] = $newUser;
    }
  }

  public function getUsers() : array
  {
    return $this->users;
  }
}
