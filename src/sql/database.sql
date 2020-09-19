
CREATE DATABASE Negozio;

USE Negozio;


-- Tabella per la gestione Di Tutti i prodotti interni allo shop con refernza alla Tabella Categoria
CREATE TABLE PRODOTTI(

    CodProd CHAR(5) NOT NULL,
    CodCat CHAR(2) NOT NULL,
    DescrProd CHAR(30) NOT NULL,
    PrezzoProd DEC(5,2) NOT NULL,
    QtaRes INT(3),

    PRIMARY KEY (CodProd),
    FOREIGN KEY(CodCat) REFERENCES Categoria
    ON DELETE RESTRICT
    ON UPDATE CASCADE
    
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Creazione Tabella Per la gestione delle varie catogorie di Oggetti presenti nello Store
CREATE TABLE Categoria(
    CodCat CHAR(2) NOT NULL,
    DescrCat CHAR(30) NOT NULL,
    PRIMARY KEY (CodCat)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;




