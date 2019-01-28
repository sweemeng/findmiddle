DROP TABLE IF EXISTS `appointment`;
CREATE TABLE appointment (
    id INT NOT NULL AUTO_INCREMENT,
    lat FLOAT NOT NULL default '0',
    lng FLOAT NOT NULL default '0',
    PRIMARY KEY(id)
);

DROP TABLE IF EXISTS `participant`;
CREATE TABLE participant (
    email VARCHAR(50),
    lat FLOAT NOT NULL default '0',
    lng FLOAT NOT NULL default '0',
    originator TINYINT NOT NULL,
    appointment_id INT NOT NULL 
);
