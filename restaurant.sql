.mode column
.headers on

DROP TABLE IF EXISTS Restaurant;
DROP TABLE IF EXISTS City;
DROP TABLE IF EXISTS Client;

CREATE TABLE Restaurant(
	RestaurantID		INTEGER PRIMARY KEY,
	Name 			VARCHAR(255),
	Address 		VARCHAR(255),
	PhoneNumber		VARCHAR(255),
	CityID 			INTEGER,
	OwnerID			INTEGER
);

CREATE TABLE City(
	CityID 			INTEGER PRIMARY KEY,
	Name 			VARCHAR(255)
);

CREATE TABLE Client(
	ClientID 		INTEGER PRIMARY KEY,
	Name 			VARCHAR(255),
	Password		VARCHAR(255),
	Username		VARCHAR(255),
	Photo 			VARCHAR(255)
);

--Users
INSERT INTO Client(ClientID, Name, Password, Username, Photo) VALUES (null, 'João Silva','7110eda4d09e062aa5e4a390b0a572ac0d2c0220','joao123', 'res/profile-icon.png');

--Cidades (acrescentar mais?)
INSERT INTO City(CityID, Name) VALUES (null, 'Porto');
INSERT INTO City(CityID, Name) VALUES (null, 'Braga');
INSERT INTO City(CityID, Name) VALUES (null, 'Lisboa');
INSERT INTO City(CityID, Name) VALUES (null, 'Setúbal');
INSERT INTO City(CityID, Name) VALUES (null, 'Faro');

--Restaurantes (ver www.pai.pt)
--Porto ID 1
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Filha da Mãe Preta', 'Cais Ribeira 39/40', 222086066, 1, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Manuel Alves', 'Avenida Fernão Magalhães 782', 225371627, 1, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Abadia do Porto', 'Rua Ateneu C Porto 22/4', 222008757, 1, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'O Pátio', 'Rua Santa Catarina 312', 222034028, 1, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Novo Paris', 'Travessa Congregados 19', 220424334, 1, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'ÉLeBê', 'Rua St Ildefonso 118/120', 222032455, 1, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Churrasqueira Papagaio', 'Travessa Carmo 30-A', 220403568, 1, 1);

--Braga ID 2
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'A Paragem', 'Portela', 253662771, 2, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'São Frutuoso', 'Rua Costa Gomes 168', 253623372, 2, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Terminal Coimbra', 'Rua José F S Azevedo 57 r/c', 253141243, 2, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Delicatum', 'Travessa Taxa 2', 253619584, 2, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Filhos de Moura', 'Rua Fervenças 66', 253433145, 2, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Cosy Sushi Bar', 'Avenida Robert Smith 38', 253141053, 2, 1);

--Lisboa ID 3
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Mar do Inferno', 'Avenida Rei Humberto II Itália', 214832218, 3, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Maria Portuguesa', 'Rua Francisco J Vitorino 8', 214063317, 3, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Simphonya Belém', 'Avenida Ilha Madeira 13', 212693580, 3, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Edmundo', 'Avenida Gomes Pereira 1', 217153335, 3, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Cocheira Alentejana', 'Travessa Poço Cid 19', 213464868, 3, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Adlib', 'Avenida Liberdade 127', 213228350, 3, 1);

--Setúbal ID 4
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'O Cruzamento', 'Estrada Nacional 120 2', 269476541, 4, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Carolina do Aires', 'Rua D. João V 4', 212971074, 4, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Segreti Di Mare', 'Rua Miguel Torga 1', 965537220, 4, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Nana Petiscos', 'Rua Eugénio Salvador 23', 933240178, 4, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Dona Bia', 'Torre', 968116684, 4, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Ti Gracinda dos Leitões', 'Rua Florex Lote 5', 212180723, 4, 1);

--Faro ID 5
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Willie`s', 'Rua Brasil Lote 7-B-r/c', 289380849, 5, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'O Telheiro', 'Praia da Mareta', 282624179, 5, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Bóia Bar', 'Rua Miguel Torga 1', 282241324, 5, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Club House Quinta da Balaia', 'Quinta da Balaia1', 289056276, 5, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Restaurant Colina Verde', 'Rua da Aldeia da Colina Lote 9', 282574776, 5, 1);
INSERT INTO Restaurant(RestaurantID, Name, Address, PhoneNumber, CityID, OwnerID)
VALUES (null, 'Pizzaria Senhor Frog`s', 'Rua Vasco Gama 47', 289313881, 5, 1);
