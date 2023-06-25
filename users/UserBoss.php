<?php
class UserBoss
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function subscribe(string $email, string $password, string $firstName, string $lastName): bool
    {
        if (strlen($password) < 8) {
            return false;
        }
        $statement = $this->pdo->prepare('
INSERT INTO users (id, email, password, firstName, lastName) 
VALUES (UUID(), :email, :password, :firstName, :lastName)'
        );
        $statement->bindValue(':email', $email, PDO::PARAM_STR);
        $statement->bindValue(':password', password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);
        $statement->bindValue(':firstName', $firstName, PDO::PARAM_STR);
        $statement->bindValue(':lastName', $lastName, PDO::PARAM_STR);
        return $statement->execute();
    }
    public function connect(string $email, string $password): User
    {
        require_once 'User.php';
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $statement->setFetchMode(PDO::FETCH_CLASS, 'User');
        $statement->bindValue(':email', $email);
        if ($statement->execute()) {
            $user = $statement->fetch();
            if ($user !== false && password_verify($password, $user->getPassword())) {
                return $user;
            }
        }
        throw new Exception('Identifiants invalides');
    }
}