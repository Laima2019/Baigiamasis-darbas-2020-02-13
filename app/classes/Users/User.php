<?php

namespace App\Users;

class User
{

    private $data = [];

    public function __construct($data = null)
    {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'name' => null,
                'surname' => null,
                'email' => null,
                'password' => null,
                'phone' => null,
            ];
        }
    }

    public function setData($array)
    {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setName($array['name'] ?? null);
        $this->setSurname($array['surname'] ?? null);
        $this->setEmail($array['email'] ?? null);
        $this->setPassword($array['password'] ?? null);
        $this->setPhone($array['phone'] ?? null);
    }

    public function getData()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'surname' => $this->getSurname(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'phone' => $this->getPhone(),
        ];
    }

    public function setId(int $id)
    {
        $this->data['id'] = $id;
    }

    public function setName(String $name)
    {
        $this->data['name'] = $name;
    }

    public function setSurname(String $surname)
    {
        $this->data['surname'] = $surname;
    }

    public function setEmail(String $email)
    {
        $this->data['email'] = $email;
    }

    public function setPassword(String $password)
    {
        $this->data['password'] = $password;
    }

    public function setPhone(string $phone)
    {
        $this->data['phone'] = $phone;
    }

    public function getId()
    {
        return $this->data['id'];
    }

    public function getName()
    {
        return $this->data['name'];
    }

    public function getSurname()
    {
        return $this->data['surname'];
    }

    public function getEmail()
    {
        return $this->data['email'];
    }

    public function getPassword()
    {
        return $this->data['password'];
    }

    public function getPhone()
    {
        return $this->data['phone'];
    }
}
