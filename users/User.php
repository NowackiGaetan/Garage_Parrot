<?php
class User {
    private string $id;
    private string $email;
    private string $password;
    private string $firstName;
    private string $lastName;
    private array $roles = [];

    public function addRole(string $role): void
    {
        $this->roles[] = $role;
    }
    public function getRoles(): array
    {
        return $this->roles;
    }
};