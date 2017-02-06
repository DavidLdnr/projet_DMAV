#------------------------------------------------------------
#        Script MySQL. : mediabase
#------------------------------------------------------------

#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id int auto_increment NOT NULL,
        pseudo varchar(50) NOT NULL,
        mdp varchar(50) NOT NULL,
        PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;


#------------------------------------------------------------
# Table: datas
#------------------------------------------------------------

CREATE TABLE datas(
        id int auto_increment  NOT NULL,
        type int NOT NULL,
        chemin varchar(100) NOT NULL,
        mimetype varchar(25) NOT NULL,
        description varchar(50) NOT NULL,
        date datetime NOT NULL,
        id_user int NOT NULL,
        PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;

ALTER TABLE datas ADD CONSTRAINT FK_DATAS_id_USER FOREIGN KEY (id_user) REFERENCES users(id);
