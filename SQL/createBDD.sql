#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Create: database
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS mediabase

#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id     int NOT NULL AUTO_INCREMENT,
        pseudo Varchar(50) NOT NULL ,
        mdp    Varchar(50) NOT NULL ,
        PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;


#------------------------------------------------------------
# Table: datas
#------------------------------------------------------------

CREATE TABLE datas(
        id          int NOT NULL  AUTO_INCREMENT,
        type        Int NOT NULL ,
        chemin      Varchar(100) NOT NULL ,
        mimetype    Varchar(25) NOT NULL ,
        description Varchar(50) NOT NULL ,
        date        Datetime NOT NULL ,
        id_user     Int NOT NULL ,
        PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;

ALTER TABLE DATAS ADD CONSTRAINT FK_DATAS_id_USER FOREIGN KEY (id_user) REFERENCES USER(id);
