<?php
class User
{
    private string $id;
    private string $email;
    private string $password;
    private array $roles = [];

    public function sayHello(): string
    {
        return 'Bonjour ' . $this->email;
    }
    public function addRole(string $role): void
    {
        $this->roles[] = $role;
    }
    public function getRoles(): array
    {
        return $this->roles;
    }
};
