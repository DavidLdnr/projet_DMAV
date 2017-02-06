#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: USER
#------------------------------------------------------------

CREATE TABLE USER(
        USER_id     int (11) Auto_increment  NOT NULL ,
        USER_pseudo Varchar (50) NOT NULL ,
        USER_mdp    Varchar (50) NOT NULL ,
        PRIMARY KEY (USER_id )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DATAS
#------------------------------------------------------------

CREATE TABLE DATAS(
        DATA_id          int (11) Auto_increment  NOT NULL ,
        DATA_type        Int NOT NULL ,
        DATA_chemin      Varchar (100) NOT NULL ,
        DATA_mimetype    Varchar (25) NOT NULL ,
        DATA_description Varchar (50) NOT NULL ,
        DATA_date        Datetime NOT NULL ,
        USER_id          Int NOT NULL ,
        PRIMARY KEY (DATA_id )
)ENGINE=InnoDB;

ALTER TABLE DATAS ADD CONSTRAINT FK_DATAS_USER_id FOREIGN KEY (USER_id) REFERENCES USER(USER_id);
