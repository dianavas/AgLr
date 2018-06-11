DROP TABLE utilizator CASCADE CONSTRAINTS
/
DROP TABLE cont CASCADE CONSTRAINTS
/
DROP TABLE teren CASCADE CONSTRAINTS
/
DROP TABLE cadastru CASCADE CONSTRAINTS
/

CREATE TABLE utilizator (
  id INT NOT NULL PRIMARY KEY,
  nume VARCHAR2(15) NOT NULL,
  prenume VARCHAR2(30) NOT NULL,
  data_nastere DATE,
  email VARCHAR2(40),
  tip VARCHAR2(30) NOT NULL,
  created_at DATE,
  updated_at DATE
)
/

CREATE TABLE cont (
  id INT NOT NULL PRIMARY KEY,
  id_utilizator INT NOT NULL,
  username VARCHAR2(30) NOT NULL,
  parola VARCHAR2(30) NOT NULL,
  created_at DATE,
  updated_at DATE,
  CONSTRAINT fk_cont_id_utilizator FOREIGN KEY (id_utilizator) REFERENCES utilizator(id)
)
/

CREATE TABLE teren (
  id INT NOT NULL PRIMARY KEY,
  id_utilizator INT NOT NULL,
  clima VARCHAR2(15),
  riscuri VARCHAR2(30),
  altele VARCHAR2(40),
  categorie VARCHAR2(30) NOT NULL,
  de_vanzare INT,
  created_at DATE,
  updated_at DATE,
  CONSTRAINT fk_teren_id_utilizator FOREIGN KEY (id_utilizator) REFERENCES utilizator(id)
)
/

CREATE TABLE cadastru (
  id INT NOT NULL PRIMARY KEY,
  id_teren INT NOT NULL,
  suprafata INT NOT NULL,
  created_at DATE,
  updated_at DATE,
  CONSTRAINT fk_cadastru_id_teren FOREIGN KEY (id_teren) REFERENCES teren(id)
)
/