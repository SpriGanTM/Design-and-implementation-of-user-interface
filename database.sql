CREATE DATABASE bike_repair
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE bike_repair;

CREATE TABLE clients (
    id INT PRIMARY KEY AUTO_INCREMENT,

    full_name VARCHAR(255) NOT NULL,

    phone VARCHAR(30) NOT NULL,

    email VARCHAR(255) NOT NULL
);

CREATE TABLE services (
    id INT PRIMARY KEY AUTO_INCREMENT,

    title VARCHAR(255) NOT NULL,

    price DECIMAL(10,2) NOT NULL,

    duration_minutes INT NOT NULL
);

CREATE TABLE specialists (
    id INT PRIMARY KEY AUTO_INCREMENT,

    full_name VARCHAR(255) NOT NULL,

    specialization VARCHAR(255),

    experience_years INT
);

CREATE TABLE appointments (
    id INT PRIMARY KEY AUTO_INCREMENT,

    client_id INT NOT NULL,

    specialist_id INT NOT NULL,

    service_id INT NOT NULL,

    appointment_datetime DATETIME NOT NULL,

    status VARCHAR(50) DEFAULT 'new',

    FOREIGN KEY (client_id)
        REFERENCES clients(id),

    FOREIGN KEY (specialist_id)
        REFERENCES specialists(id),

    FOREIGN KEY (service_id)
        REFERENCES services(id)
);
