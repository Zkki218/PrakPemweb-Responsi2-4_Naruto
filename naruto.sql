-- Database naruto.sql

-- Tabel chara
CREATE TABLE chara (
    id_chara INT AUTO_INCREMENT PRIMARY KEY, 
    nama VARCHAR(255),
    gambar TEXT
);

-- Tabel user
CREATE TABLE user (
    id_user INT AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(255),
    password VARCHAR(255),
    level VARCHAR(20),
    id_chara INT,
    FOREIGN KEY (id_chara) REFERENCES chara(id_chara)
);

-- Tabel jutsu
CREATE TABLE jutsu (
    id_jutsu INT AUTO_INCREMENT PRIMARY KEY, 
    nama VARCHAR(255),
    gambar TEXT
);

-- Tabel handsigns
CREATE TABLE handsigns (
    id_handsigns INT AUTO_INCREMENT PRIMARY KEY, 
    nama VARCHAR(255),
    gambar TEXT
);

-- Tabel relasi chara_jutsu (many-to-many)
CREATE TABLE chara_jutsu ( 
    id_chara INT,
    id_jutsu INT,
    PRIMARY KEY (id_chara, id_jutsu),
    FOREIGN KEY (id_chara) REFERENCES chara(id_chara),
    FOREIGN KEY (id_jutsu) REFERENCES jutsu(id_jutsu)
);

-- Insert data ke dalam tabel chara
INSERT INTO chara (nama, gambar) VALUES
('Uzumaki Naruto', 'img/chara/naruto/Full_Naruto.png'),
('Uchiha Sasuke', 'img/chara/sasuke/Full_Sasuke.png'),
('Hatake Kakashi', 'img/chara/kakashi/Full_Kakashi.png'),
('Uchiha Itachi', 'img/chara/itachi/Full_Itachi.png'),
('Uchiha Obito', 'img/chara/obito/Full_Obito.png'),
('Uchiha Madara', 'img/chara/madara/Full_Madara.png'),
('Senju Hashirama', 'img/chara/hashirama/Full_Hashirama.png'),
('Senju Tobirama', 'img/chara/tobirama/Full_Tobirama.png'),
('Sarutobi Hiruzen', 'img/chara/hiruzen/Full_Hiruzen.png'),
('Namikaze Minato', 'img/chara/minato/Full_Minato.png');

-- Insert data ke dalam tabel jutsu
INSERT INTO jutsu (nama, gambar) VALUES
('Rasengan', 'img/jutsu/rasengan/Cover_Rasengan.png'),
('Tajuu Kage Bunshin no Jutsu', 'img/jutsu/tajuukagebunshin/Cover_Tajuukagebunshin.png'),
('Chidori', 'img/jutsu/chidori/Cover_Chidori.png'),
('Katon: Goukakyuu no Jutsu', 'img/jutsu/goukakyuu/Cover_Goukakyuu.png'),
('Raikiri', 'img/jutsu/raikiri/Cover_Raikiri.png'),
('Doton: Doryuuheki', 'img/jutsu/doryuuheki/Cover_Doryuuheki.png'),
('Tsukuyomi', 'img/jutsu/tsukuyomi/Cover_Tsukuyomi.png'),
('Susanoo', 'img/jutsu/susanoo/Cover_Susanoo.png'),
('Katon: Bakufuu Ranbu', 'img/jutsu/bakufuuranbu/Cover_Bakufuuranbu.png'),
('Kamui', 'img/jutsu/kamui/Cover_Kamui.png'),
('Tengai Shinsei', 'img/jutsu/tengaishinsei/Cover_Tengaishinsei.png'),
('Mokuton: Mokujin no Jutsu', 'img/jutsu/mokujin/Cover_Mokujin.png'),
('Senpou Mokuton: Shin Suusenju', 'img/jutsu/shinsuusenju/Cover_Shinsuusenju.png'),
('Hiraishin Giri', 'img/jutsu/hiraishin/Cover_Hiraishin.png'),
('Suiton: Suiryuudan no Jutsu', 'img/jutsu/suiryuudan/Cover_Suiryuudan.png'),
('Katon: Karyuu Endan', 'img/jutsu/karyuuendan/Cover_Karyuuendan.png'),
('Kuchiyose no Jutsu', 'img/jutsu/kuchiyose/Cover_Kuchiyose.png'),
('Hiraishin no Jutsu', 'img/jutsu/hiraishin/Cover_Hiraishin.png'),
('Shiki Fuujin', 'img/jutsu/shikifuujin/Cover_Shikifuujin.png');

-- Insert data ke dalam tabel handsigns
INSERT INTO handsigns (nama, gambar) VALUES
('Rat', 'img/handsigns/Rat.svg'),
('Ox', 'img/handsigns/Ox.svg'),
('Tiger', 'img/handsigns/Tiger.svg'),
('Hare', 'img/handsigns/Hare.svg'),
('Dragon', 'img/handsigns/Dragon.svg'),
('Snake', 'img/handsigns/Snake.svg'),
('Horse', 'img/handsigns/Horse.svg'),
('Ram', 'img/handsigns/Ram.svg'),
('Monkey', 'img/handsigns/Monkey.svg'),
('Bird', 'img/handsigns/Bird.svg'),
('Dog', 'img/handsigns/Dog.svg'),
('Boar', 'img/handsigns/Boar.svg'),
('Clone', 'img/handsigns/Clone.svg'),
('Clap Hands', 'img/handsigns/Clap_hands.png');
