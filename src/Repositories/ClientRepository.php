<?php

class ClientRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query(
            "SELECT * FROM clients
             ORDER BY id DESC"
        );

        return $stmt->fetchAll();
    }

    public function findById(
        int $id
    ): ?array {

        $stmt = $this->pdo->prepare(
            "SELECT * FROM clients
             WHERE id = :id"
        );

        $stmt->execute([
            'id' => $id
        ]);

        $result = $stmt->fetch();

        return $result ?: null;
    }

    public function create(
        array $data
    ): bool {

        $stmt = $this->pdo->prepare(
            "INSERT INTO clients
            (
                full_name,
                phone,
                email
            )
            VALUES
            (
                :full_name,
                :phone,
                :email
            )"
        );

        return $stmt->execute([
            'full_name' =>
                $data['full_name'],

            'phone' =>
                $data['phone'],

            'email' =>
                $data['email']
        ]);
    }

    public function update(
        int $id,
        array $data
    ): bool {

        $stmt = $this->pdo->prepare(
            "UPDATE clients
            SET
                full_name = :full_name,
                phone = :phone,
                email = :email
            WHERE id = :id"
        );

        return $stmt->execute([
            'full_name' =>
                $data['full_name'],

            'phone' =>
                $data['phone'],

            'email' =>
                $data['email'],

            'id' => $id
        ]);
    }

    public function delete(
        int $id
    ): bool {

        $stmt = $this->pdo->prepare(
            "DELETE FROM clients
             WHERE id = :id"
        );

        return $stmt->execute([
            'id' => $id
        ]);
    }

    public function hasAppointments(
        int $clientId
    ): bool {

        $stmt = $this->pdo->prepare(
            "SELECT COUNT(*)
             FROM appointments
             WHERE client_id = :id"
        );

        $stmt->execute([
            'id' => $clientId
        ]);

        return $stmt->fetchColumn() > 0;
    }
}
