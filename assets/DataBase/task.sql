--Ejemplo BD tasks en MYSQL con Version de 8.40
CREATE DATABASE tasks;

USE tasks;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Hacer la declaración de impuestos', '2025-01-25 12:01:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Pedir nuevos cheques', '2025-01-25 12:03:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Avisar al banco del nuevo teléfono', '2025-01-25 12:10:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Pedir el crédito', '2025-01-25 12:15:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Activar la nueva tarjeta del banco', '2025-01-25 12:11:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Pedir cita en el médico', '2025-01-25 12:08:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Comprar organizador de pastillas', '2025-01-25 12:01:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Buscar aperitivos saludables', '2025-01-25 12:03:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Rellenar el Kit de Primeros Auxilios', '2025-01-25 12:10:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Montar el nuevo organizador del armario', '2025-01-25 12:15:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Revestir la mesa del comedor', '2025-01-25 12:11:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Revestir la mesa del comedor', '2025-01-25 12:08:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Apuntarse a un gimnasio local', '2025-01-25 12:01:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Hacer tarjetas de Química', '2025-01-25 12:03:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Actualizar currículum', '2025-01-25 12:10:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Enviar sugerencia de jornada laboral', '2025-01-25 12:15:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Revestir la mesa del comedor', '2025-01-25 12:11:20');

INSERT INTO `tasks`.`tasks` (`task_name`, `created_at`) 
VALUES ('Revestir la mesa del comedor', '2025-01-25 12:08:20');



