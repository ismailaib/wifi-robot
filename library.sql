-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 03 mars 2023 à 23:50
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Name` varchar(512) DEFAULT NULL,
  `Quantity` varchar(512) DEFAULT NULL,
  `Img` varchar(512) DEFAULT NULL,
  `Info` varchar(512) DEFAULT NULL,
  `Type` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `Name`, `Quantity`, `Img`, `Info`, `Type`) VALUES
(1, 'Le Petit Nicolat', '3 in stock', 'assets/img/book-0.jpg', 'C’est un écolier et il est le héros de l\'histoire. Avec lui tout est « chouette ! ». Fils unique, il admire son père et sa mère dont il est « rien fier ». Il a un tas de copains avec qui il a formé la bande des « Vengeurs ».', 'adventure'),
(2, 'Mystery', '5 in stock', 'assets/img/book-1.jpg', 'nothing to see here hihihihihihi.', 'horror'),
(3, 'Harry Potter', '1 in stock', 'assets/img/book-2.jpg', ' Harry et ses amis doivent faire face à une nouvelle menace à Poudlard. La fameuse Chambre des secrets, bâtie plusieurs siècles plus tôt par l\'un des fondateurs de l\'école, Salazar Serpentard, aurait été rouverte par son « héritier ».', 'adventure'),
(4, 'Land of Stories', '6 in stock', 'assets/img/book-3.jpg', 'Le Pays des contes est un cycle littéraire créé par Chris Colfer dont le premier tome, Le Sortilège perdu, a été publié en 2012. En juin 2017, Chris Colfer annonce sur son compte Twitter l\'adaptation cinématographique du cycle littéraire. Il en écrira le scénario et en sera le producteur.', 'adventure'),
(5, 'Steve Jobs', '4 in stock', 'assets/img/book-4.jpg', 'Steve Jobs est la biographie autorisée de Steve Jobs, le cofondateur d\'Apple. La biographie a été écrite à la demande de Jobs par Walter Isaacson, qui avait écrit entre autres les biographies de Benjamin Franklin et Albert Einstein.', 'biographie'),
(6, 'Copperfield', '2 in stock', 'assets/img/book-5.jpg', 'The story follows the life of David Copperfield from childhood to maturity. David was born in Blunderstone, Suffolk, England, six months after the death of his father. David spends his early years in relative happiness with his loving, childish mother and their kindly housekeeper, Clara Peggotty. They call him Davy.', 'biographie'),
(7, 'Washington', '5 in stock', 'assets/img/book-6.jpg', 'George Washington est né le 22 février 1732 en Virginie. Son jour de naissance est le 22 février 1732 dans le calendrier grégorien, mais ce calendrier n\'était pas adopté par la Grande-Bretagne lorsqu\'il est né. C\'est pourquoi l\'acte de naissance indique le 11 février 1731.', 'biographie'),
(8, 'Mrs. Frisby', '2 in stock', 'assets/img/book-7.jpg', 'Madame Brisby et le secret de Nimh est un livre pour enfants de 1971 de Robert C. O\'Brien, avec des illustrations de Zena Bernstein. Lauréat de la médaille Newbery de 1972, l\'histoire a été adaptée au cinéma en 1982 sous le titre Brisby et le Secret de NIMH.', 'short'),
(9, 'Call of the Wild', '6 in stock', 'assets/img/book-8.jpg', 'Buck est un chien au grand coeur dont la vie heureuse est bouleversée lorsqu\'il est soudainement arraché de sa maison californienne et envoyé au Yukon dans les années 1890.', 'classics'),
(10, 'Mobydick', '2 in stock', 'assets/img/book-9.jpg', 'Moby-Dick1 (titre original en anglais : Moby-Dick; or, The Whale ; « Moby-Dick ; ou, le Cachalot ») est un roman de l\'écrivain américain Herman Melville paru en 1851, dont le titre provient du surnom donné à un grand cachalot au centre de l\'intrigue.', 'fantasy'),
(11, 'Empire of pain', '1 in stock', 'assets/img/book-10.jpg', 'Empire of Pain chronicles the multiple investigations of the Sacklers and their company, and the scorched-earth legal tactics that the family has used to evade accountability.', 'crime'),
(12, 'Bad Blood', '3 in stock', 'assets/img/book-11.jpg', 'Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley\'s fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true.', 'crime'),
(13, 'The Red Part', '6 in stock', 'assets/img/book-12.jpg', 'Bad Blood (2018) is the harrowing inside story of a how a tech start-up rooted in Silicon Valley\'s fake-it-till-you-make-it culture risked the lives of millions with a blood-testing device that proved too good to be true.', 'crime'),
(14, 'Invisible Man', '4 in stock', 'assets/img/book-13.jpg', 'The story is a bildungsroman that tells of a naive and idealistic (and, significantly, nameless) Southern Black youth who goes to Harlem, joins the fight against white oppression, and ends up ignored by his fellow Blacks as well as by whites.', 'horror'),
(15, 'Dracula', '2 in stock', 'assets/img/book-14.jpg', 'Dracula illustre ni plus ni moins que l\'éternelle lutte entre le Bien et le Mal, entre Dieu et le Diable et ce roman plante en profondeur le mythe d\'une humanité partagée entre les mortels et les immortels.', 'horror'),
(16, 'The Trial', '1 in stock', 'assets/img/book-15.jpg', 'One of his best known works, it tells the story of Josef K., a man arrested and prosecuted by a remote, inaccessible authority, with the nature of his crime revealed neither to him nor to the reader.', 'crime'),
(17, 'A.Q.O.T.F', '4 in stock', 'assets/img/book-16.jpg', 'All Quiet on the Western Front is straightforward and the story, characters, structure are riveting, but not overly complex. In fact, the straightforwardness of the book reflects its subject matter: real people, real prose, primary colors for primary emotions.', 'war'),
(18, 'Catch-22', '5 in stock', 'assets/img/book-17.jpg', 'Catch-22, satirical novel by American writer Joseph Heller, published in 1961. The work centres on Captain John Yossarian, an American bombardier stationed on a Mediterranean island during World War II, and chronicles his desperate attempts to stay alive.', 'war'),
(19, 'Le Petit Prince', '3 in stock', 'assets/img/book-18.jpg', 'Les aventures du Petit Prince commencent sur son astéroïde, nommé astéroïde B612, où un jour pousse une rose. Le Petit Prince devient l\'ami de cette rose fragile et belle. Il décide ensuite de visiter d\'autres mondes, car il s\'ennuyait sur sa petite planète.', 'Adventure');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ismail', 'ismailaitbouhmad@gmail.com', NULL, '$2y$10$Egdfl4Nz/3YLqjC/X2HeIOWlZv6upW1e1K1AOzWSD6sP38P4L3566', 0, NULL, '2023-01-24 15:21:10', '2023-01-24 15:21:10'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$fyVhWqL8iKCPaVRzFYWu3.DuX0lzJaED2R8D.kCVi5yqVTNqm7JfC', 1, NULL, '2023-01-24 15:24:34', '2023-01-24 15:24:34'),
(4, 'tester', 'tester@gmail.com', NULL, '$2y$10$LRTj9dM2vvqSGMzw7QhMu.qd7dfb.eBaWHYC6U1TWKgRAOsVfdE3m', 0, NULL, '2023-01-24 16:33:30', '2023-01-24 16:33:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
