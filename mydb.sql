-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Gru 2017, 17:28
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `auto`
--

CREATE TABLE `auto` (
  `idAuto` int(11) NOT NULL,
  `numerSeryjny` varchar(45) DEFAULT NULL,
  `marka` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `kolor` varchar(45) DEFAULT NULL,
  `rok` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `auto`
--

INSERT INTO `auto` (`idAuto`, `numerSeryjny`, `marka`, `model`, `kolor`, `rok`) VALUES
(1, '12345', 'BMW', 'E46', 'Srebrny', '2002'),
(2, 'VKACJ58900', 'Honda', 'Civic', 'Czarny', '2015'),
(3, 'YAABB889', 'Citroen', 'C3', 'Granatowy', '1998'),
(4, 'KKK556789', 'Opel', 'Insignia', 'Czerwony', '2015');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bilet`
--

CREATE TABLE `bilet` (
  `idBilet` int(11) NOT NULL,
  `numerBiletu` varchar(45) DEFAULT NULL,
  `idAuto` int(11) DEFAULT NULL,
  `idKlient` int(11) DEFAULT NULL,
  `dataOtrzymania` date DEFAULT NULL,
  `komentarz` varchar(45) DEFAULT NULL,
  `dataZwrotu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `bilet`
--

INSERT INTO `bilet` (`idBilet`, `numerBiletu`, `idAuto`, `idKlient`, `dataOtrzymania`, `komentarz`, `dataZwrotu`) VALUES
(2, '456790', 2, 6, '2017-12-28', 'Rozwalona głowica', '2017-12-30'),
(3, '111111', 2, 5, '2017-12-20', 'Uszkodzone hamulce', '2017-12-28'),
(5, '123141', 4, 7, '2017-12-27', 'Zepsuta klimatyzacja', '2017-12-31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `czesci`
--

CREATE TABLE `czesci` (
  `idCzesci` int(11) NOT NULL,
  `numerCzesci` int(11) DEFAULT NULL,
  `opis` varchar(45) DEFAULT NULL,
  `cenaZakupu` double DEFAULT NULL,
  `cenaDetaliczna` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `czesci`
--

INSERT INTO `czesci` (`idCzesci`, `numerCzesci`, `opis`, `cenaZakupu`, `cenaDetaliczna`) VALUES
(1, 34, 'Sprzęgło', 450.5, 510.7),
(2, 52, 'Klocki hamulcowe', 54, 78),
(3, 7892, 'Szyba przednia', 34, 50),
(4, 2147483647, 'Komplet opon ', 1000, 1240);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `faktura`
--

CREATE TABLE `faktura` (
  `idFaktura` int(11) NOT NULL,
  `numerFaktury` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `idAuto` int(11) DEFAULT NULL,
  `idKlient` int(11) DEFAULT NULL,
  `idSprzedawcy` int(11) NOT NULL,
  `kwota` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `faktura`
--

INSERT INTO `faktura` (`idFaktura`, `numerFaktury`, `data`, `idAuto`, `idKlient`, `idSprzedawcy`, `kwota`) VALUES
(5, 45678, '2012-02-17', 1, 1, 1, 123123),
(10, 666666, '0000-00-00', 1, 1, 1, 2222),
(11, 67890, '2017-12-28', 2, 6, 1, 345000),
(12, 123121, '2017-12-28', 4, 7, 2, 13500);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `idKlient` int(11) NOT NULL,
  `nazwiskoK` varchar(45) DEFAULT NULL,
  `imieK` varchar(45) DEFAULT NULL,
  `numerTelefonu` varchar(45) DEFAULT NULL,
  `adres` varchar(45) DEFAULT NULL,
  `miasto` varchar(45) DEFAULT NULL,
  `kodPocztowy` varchar(20) DEFAULT NULL,
  `nip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`idKlient`, `nazwiskoK`, `imieK`, `numerTelefonu`, `adres`, `miasto`, `kodPocztowy`, `nip`) VALUES
(1, 'Wysocki', 'Bartłomiej', '123456789', 'Polna 3', 'Izabelin', '95-070', '123456789'),
(5, 'Czyżyk', 'Wiesław', '510540560', 'Rudzka 6', 'Pcim Dolny', '91-030', '4884792178'),
(6, 'Przechwalski', 'Jan', '534567890', 'Kaliska 4', 'Gorzów', '50-600', '9143480608'),
(7, 'Tarczyk', 'Jarosław', '551550511', 'Krzyżaka 6', 'Konstancin', '65-300', '8225812140'),
(8, 'Rębalski', 'Adam', '441445670', 'Wolska 14', 'Kraków', '91-300', '2824121433');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `mechanik`
--

CREATE TABLE `mechanik` (
  `idMechanik` int(11) NOT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `imie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `mechanik`
--

INSERT INTO `mechanik` (`idMechanik`, `nazwisko`, `imie`) VALUES
(1, 'Wolski', 'Tomasz'),
(2, 'Krystofiak', 'Krzysztof'),
(3, 'Czawrylski', 'Czarek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `naprawaczesci`
--

CREATE TABLE `naprawaczesci` (
  `idNaprawaCzesci` int(11) NOT NULL,
  `idCzesci` int(11) DEFAULT NULL,
  `idBilet` int(11) DEFAULT NULL,
  `iloscCzesci` int(11) DEFAULT NULL,
  `cena` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `naprawaczesci`
--

INSERT INTO `naprawaczesci` (`idNaprawaCzesci`, `idCzesci`, `idBilet`, `iloscCzesci`, `cena`) VALUES
(1, 2, 2, 3, 450),
(2, 2, 2, 3, 450),
(4, 2, 2, 3, 450),
(5, 2, 2, 3, 450),
(6, 4, 5, 1, 200),
(7, 4, 2, 1, 600);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `serwismechanik`
--

CREATE TABLE `serwismechanik` (
  `idSerwisMechanik` int(11) NOT NULL,
  `idBilet` int(11) DEFAULT NULL,
  `idMechanik` int(11) DEFAULT NULL,
  `ocena` varchar(45) DEFAULT NULL,
  `komentarzM` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `serwismechanik`
--

INSERT INTO `serwismechanik` (`idSerwisMechanik`, `idBilet`, `idMechanik`, `ocena`, `komentarzM`) VALUES
(3, 2, 2, '5', 'Super robota'),
(4, 5, 3, '4', 'Dobrze wykonana praca');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzedawca`
--

CREATE TABLE `sprzedawca` (
  `idSprzedawca` int(11) NOT NULL,
  `nazwisko` varchar(45) DEFAULT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `sprzedawca`
--

INSERT INTO `sprzedawca` (`idSprzedawca`, `nazwisko`, `imie`, `pass`) VALUES
(1, 'Admin', 'Admin', '$2y$10$2Ufn/lsgtx8YR8RQsZ8piuooEVY9qQRvEwSPixq5Xcxu0d9XQNjyC'),
(2, 'Kowalski', 'Jan', '0000'),
(8, 'Radzymił', 'Krzystof', '$2y$10$.gq4TaX44VSMLQUcL6dyPuhsJ/Ack2XP4p4KQgVaJUibkUy3mTx5W'),
(9, 'Radzymił', 'Krzystof', '$2y$10$1jwj/7qM2wzTxOB7S1E1lOEHIWr3aazQmMvDyt3Dsda85aG48Jm8q');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`idAuto`);

--
-- Indexes for table `bilet`
--
ALTER TABLE `bilet`
  ADD PRIMARY KEY (`idBilet`),
  ADD KEY `FK1_idx` (`idAuto`),
  ADD KEY `FK2_idx` (`idKlient`);

--
-- Indexes for table `czesci`
--
ALTER TABLE `czesci`
  ADD PRIMARY KEY (`idCzesci`);

--
-- Indexes for table `faktura`
--
ALTER TABLE `faktura`
  ADD PRIMARY KEY (`idFaktura`),
  ADD KEY `FK1_idx` (`idKlient`),
  ADD KEY `FK2_idx` (`idAuto`),
  ADD KEY `FK3_idx` (`idSprzedawcy`);

--
-- Indexes for table `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`idKlient`);

--
-- Indexes for table `mechanik`
--
ALTER TABLE `mechanik`
  ADD PRIMARY KEY (`idMechanik`);

--
-- Indexes for table `naprawaczesci`
--
ALTER TABLE `naprawaczesci`
  ADD PRIMARY KEY (`idNaprawaCzesci`),
  ADD KEY `FK1_idx` (`idCzesci`),
  ADD KEY `FK2_idx` (`idBilet`);

--
-- Indexes for table `serwismechanik`
--
ALTER TABLE `serwismechanik`
  ADD PRIMARY KEY (`idSerwisMechanik`),
  ADD KEY `FK2_idx` (`idBilet`),
  ADD KEY `FK1_idx` (`idMechanik`);

--
-- Indexes for table `sprzedawca`
--
ALTER TABLE `sprzedawca`
  ADD PRIMARY KEY (`idSprzedawca`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `auto`
--
ALTER TABLE `auto`
  MODIFY `idAuto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `bilet`
--
ALTER TABLE `bilet`
  MODIFY `idBilet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `czesci`
--
ALTER TABLE `czesci`
  MODIFY `idCzesci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `faktura`
--
ALTER TABLE `faktura`
  MODIFY `idFaktura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `idKlient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `mechanik`
--
ALTER TABLE `mechanik`
  MODIFY `idMechanik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `naprawaczesci`
--
ALTER TABLE `naprawaczesci`
  MODIFY `idNaprawaCzesci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `serwismechanik`
--
ALTER TABLE `serwismechanik`
  MODIFY `idSerwisMechanik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `sprzedawca`
--
ALTER TABLE `sprzedawca`
  MODIFY `idSprzedawca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `bilet`
--
ALTER TABLE `bilet`
  ADD CONSTRAINT `FK1Bilet` FOREIGN KEY (`idAuto`) REFERENCES `auto` (`idAuto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK2Bilet` FOREIGN KEY (`idKlient`) REFERENCES `klient` (`idKlient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `faktura`
--
ALTER TABLE `faktura`
  ADD CONSTRAINT `FK1Faktura` FOREIGN KEY (`idKlient`) REFERENCES `klient` (`idKlient`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK2Faktura` FOREIGN KEY (`idAuto`) REFERENCES `auto` (`idAuto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK3Faktura` FOREIGN KEY (`idSprzedawcy`) REFERENCES `sprzedawca` (`idSprzedawca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `naprawaczesci`
--
ALTER TABLE `naprawaczesci`
  ADD CONSTRAINT `FK1naprawaCzesci` FOREIGN KEY (`idCzesci`) REFERENCES `czesci` (`idCzesci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK2NaprawaCzesci` FOREIGN KEY (`idBilet`) REFERENCES `bilet` (`idBilet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `serwismechanik`
--
ALTER TABLE `serwismechanik`
  ADD CONSTRAINT `FK1SerwisMechanik` FOREIGN KEY (`idMechanik`) REFERENCES `mechanik` (`idMechanik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK2SerwisMechanik` FOREIGN KEY (`idBilet`) REFERENCES `bilet` (`idBilet`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
