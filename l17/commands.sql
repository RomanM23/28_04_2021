USE skillup_db;

CREATE TABLE `users`
(
    `id`         int(4) PRIMARY KEY AUTO_INCREMENT,
    `name`       varchar(100) NOT NULL UNIQUE,
    `berthday`   DATE         NULL,
    `created_at` TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP    NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

ALTER TABLE `users` RENAME COLUMN `berthday` TO `birthday`;

DESCRIBE `users`;

INSERT INTO  `users` (`name`, `birthday`) VALUES ('ROMAN', '1994-01-23');

INSERT INTO  `users` (`name`, `birthday`) VALUES ('Oleg', '1494-02-11'), ('Taras', '1266-04-12');

SELECT * FROM `users`;