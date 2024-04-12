-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 avr. 2024 à 18:40
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `scientic`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `account`
--

INSERT INTO `account` (`id_account`, `id_user`) VALUES
(6, 7),
(10, 11);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `titre` text NOT NULL,
  `image` text NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `titre`, `image`, `resume`, `description`, `id_user`) VALUES
(2, 'Article 1', 'https://cdn.pixabay.com/photo/2024/03/20/06/18/ai-generated-8644732_1280.jpg', 'Resume 1 -- Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis id tortor, semper rhoncus porta senectus faucibus interdum condimentum nisl sed gravida, montes fringilla eu parturient posuere convallis praesent porttitor arcu habitant. Diam pellentesque aenean pretium nisi euismod sociosqu lacinia torquent massa, senectus leo at malesuada gravida ad hac ut ultrices potenti, commodo arcu aliquam litora curabitur vehicula curae platea. Gravida cubilia vitae auctor integer phasellus elementum suspendisse libero, ullamcorper ultrices taciti molestie nisl malesuada. Euismod torquent nisi fusce feugiat vivamus sodales pellentesque, consequat aliquet tortor maecenas nunc dictum ante, morbi dapibus faucibus praesent nulla cras. Primis ultrices egestas ultricies ante dignissim litora curabitur, mollis diam praesent ligula sollicitudin justo, nam aliquet tellus mauris senectus augue.\r\n\r\nFermentum viverra vehicula quam eros congue nibh lacinia accumsan lobortis, pretium maecenas dapibus ad molestie aliquet phasellus mauris fringilla pellentesque, primis rutrum sagittis ullamcorper arcu nec fusce feugiat. Et nisi quis gravida nostra fringilla curae nascetur lobortis, augue nulla congue tellus penatibus fusce consequat posuere eleifend, eu class semper ultricies arcu per eros. Ante mollis habitant hendrerit eu laoreet tincidunt velit donec, libero duis taciti magna conubia condimentum mus bibendum, justo metus tristique netus massa viverra eget. Quis himenaeos mi ultrices tellus sociis volutpat in facilisi, venenatis et dictum malesuada purus nullam. Ut sociis imperdiet per tempus egestas blandit tortor dictum, iaculis nisi fusce lectus urna rhoncus vestibulum vivamus, metus nulla interdum duis vel id a. Nec ac tortor iaculis mus condimentum nullam dis placerat, vulputate nam hendrerit sociosqu elementum ut habitant, lobortis maecenas velit euismod suscipit curabitur platea. Nec himenaeos felis diam montes natoque volutpat tempor praesent, nostra porttitor scelerisque hendrerit mi ridiculus sociis, a quisque cubilia mattis mollis vivamus phasellus.', 'www.google.com', 3),
(3, 'Article2', 'https://cdn.pixabay.com/photo/2024/03/02/08/49/ai-generated-8607961_1280.png', 'Resume 2 -- Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis id tortor, semper rhoncus porta senectus faucibus interdum condimentum nisl sed gravida, montes fringilla eu parturient posuere convallis praesent porttitor arcu habitant. Diam pellentesque aenean pretium nisi euismod sociosqu lacinia torquent massa, senectus leo at malesuada gravida ad hac ut ultrices potenti, commodo arcu aliquam litora curabitur vehicula curae platea. Gravida cubilia vitae auctor integer phasellus elementum suspendisse libero, ullamcorper ultrices taciti molestie nisl malesuada. Euismod torquent nisi fusce feugiat vivamus sodales pellentesque, consequat aliquet tortor maecenas nunc dictum ante, morbi dapibus faucibus praesent nulla cras. Primis ultrices egestas ultricies ante dignissim litora curabitur, mollis diam praesent ligula sollicitudin justo, nam aliquet tellus mauris senectus augue.\r\n\r\nFermentum viverra vehicula quam eros congue nibh lacinia accumsan lobortis, pretium maecenas dapibus ad molestie aliquet phasellus mauris fringilla pellentesque, primis rutrum sagittis ullamcorper arcu nec fusce feugiat. Et nisi quis gravida nostra fringilla curae nascetur lobortis, augue nulla congue tellus penatibus fusce consequat posuere eleifend, eu class semper ultricies arcu per eros. Ante mollis habitant hendrerit eu laoreet tincidunt velit donec, libero duis taciti magna conubia condimentum mus bibendum, justo metus tristique netus massa viverra eget. Quis himenaeos mi ultrices tellus sociis volutpat in facilisi, venenatis et dictum malesuada purus nullam. Ut sociis imperdiet per tempus egestas blandit tortor dictum, iaculis nisi fusce lectus urna rhoncus vestibulum vivamus, metus nulla interdum duis vel id a. Nec ac tortor iaculis mus condimentum nullam dis placerat, vulputate nam hendrerit sociosqu elementum ut habitant, lobortis maecenas velit euismod suscipit curabitur platea. Nec himenaeos felis diam montes natoque volutpat tempor praesent, nostra porttitor scelerisque hendrerit mi ridiculus sociis, a quisque cubilia mattis mollis vivamus phasellus.', 'www.google.com', 3),
(4, 'Article 3', 'https://cdn.pixabay.com/photo/2024/01/17/12/06/car-8514314_1280.png', 'Resume 3 -- Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis id tortor, semper rhoncus porta senectus faucibus interdum condimentum nisl sed gravida, montes fringilla eu parturient posuere convallis praesent porttitor arcu habitant. Diam pellentesque aenean pretium nisi euismod sociosqu lacinia torquent massa, senectus leo at malesuada gravida ad hac ut ultrices potenti, commodo arcu aliquam litora curabitur vehicula curae platea. Gravida cubilia vitae auctor integer phasellus elementum suspendisse libero, ullamcorper ultrices taciti molestie nisl malesuada. Euismod torquent nisi fusce feugiat vivamus sodales pellentesque, consequat aliquet tortor maecenas nunc dictum ante, morbi dapibus faucibus praesent nulla cras. Primis ultrices egestas ultricies ante dignissim litora curabitur, mollis diam praesent ligula sollicitudin justo, nam aliquet tellus mauris senectus augue.\r\n\r\nFermentum viverra vehicula quam eros congue nibh lacinia accumsan lobortis, pretium maecenas dapibus ad molestie aliquet phasellus mauris fringilla pellentesque, primis rutrum sagittis ullamcorper arcu nec fusce feugiat. Et nisi quis gravida nostra fringilla curae nascetur lobortis, augue nulla congue tellus penatibus fusce consequat posuere eleifend, eu class semper ultricies arcu per eros. Ante mollis habitant hendrerit eu laoreet tincidunt velit donec, libero duis taciti magna conubia condimentum mus bibendum, justo metus tristique netus massa viverra eget. Quis himenaeos mi ultrices tellus sociis volutpat in facilisi, venenatis et dictum malesuada purus nullam. Ut sociis imperdiet per tempus egestas blandit tortor dictum, iaculis nisi fusce lectus urna rhoncus vestibulum vivamus, metus nulla interdum duis vel id a. Nec ac tortor iaculis mus condimentum nullam dis placerat, vulputate nam hendrerit sociosqu elementum ut habitant, lobortis maecenas velit euismod suscipit curabitur platea. Nec himenaeos felis diam montes natoque volutpat tempor praesent, nostra porttitor scelerisque hendrerit mi ridiculus sociis, a quisque cubilia mattis mollis vivamus phasellus.', 'www.google.com', 3),
(5, 'Article 4', 'https://cdn.pixabay.com/photo/2017/08/01/17/27/jellyfish-2566795_1280.jpg', 'Resume 4 -- Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis id tortor, semper rhoncus porta senectus faucibus interdum condimentum nisl sed gravida, montes fringilla eu parturient posuere convallis praesent porttitor arcu habitant. Diam pellentesque aenean pretium nisi euismod sociosqu lacinia torquent massa, senectus leo at malesuada gravida ad hac ut ultrices potenti, commodo arcu aliquam litora curabitur vehicula curae platea. Gravida cubilia vitae auctor integer phasellus elementum suspendisse libero, ullamcorper ultrices taciti molestie nisl malesuada. Euismod torquent nisi fusce feugiat vivamus sodales pellentesque, consequat aliquet tortor maecenas nunc dictum ante, morbi dapibus faucibus praesent nulla cras. Primis ultrices egestas ultricies ante dignissim litora curabitur, mollis diam praesent ligula sollicitudin justo, nam aliquet tellus mauris senectus augue.\r\n\r\nFermentum viverra vehicula quam eros congue nibh lacinia accumsan lobortis, pretium maecenas dapibus ad molestie aliquet phasellus mauris fringilla pellentesque, primis rutrum sagittis ullamcorper arcu nec fusce feugiat. Et nisi quis gravida nostra fringilla curae nascetur lobortis, augue nulla congue tellus penatibus fusce consequat posuere eleifend, eu class semper ultricies arcu per eros. Ante mollis habitant hendrerit eu laoreet tincidunt velit donec, libero duis taciti magna conubia condimentum mus bibendum, justo metus tristique netus massa viverra eget. Quis himenaeos mi ultrices tellus sociis volutpat in facilisi, venenatis et dictum malesuada purus nullam. Ut sociis imperdiet per tempus egestas blandit tortor dictum, iaculis nisi fusce lectus urna rhoncus vestibulum vivamus, metus nulla interdum duis vel id a. Nec ac tortor iaculis mus condimentum nullam dis placerat, vulputate nam hendrerit sociosqu elementum ut habitant, lobortis maecenas velit euismod suscipit curabitur platea. Nec himenaeos felis diam montes natoque volutpat tempor praesent, nostra porttitor scelerisque hendrerit mi ridiculus sociis, a quisque cubilia mattis mollis vivamus phasellus.', 'www.google.com', 3),
(6, 'article 5', 'https://cdn.pixabay.com/photo/2024/02/12/14/56/woman-8568693_1280.jpg', 'Resume 5 -- Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis id tortor, semper rhoncus porta senectus faucibus interdum condimentum nisl sed gravida, montes fringilla eu parturient posuere convallis praesent porttitor arcu habitant. Diam pellentesque aenean pretium nisi euismod sociosqu lacinia torquent massa, senectus leo at malesuada gravida ad hac ut ultrices potenti, commodo arcu aliquam litora curabitur vehicula curae platea. Gravida cubilia vitae auctor integer phasellus elementum suspendisse libero, ullamcorper ultrices taciti molestie nisl malesuada. Euismod torquent nisi fusce feugiat vivamus sodales pellentesque, consequat aliquet tortor maecenas nunc dictum ante, morbi dapibus faucibus praesent nulla cras. Primis ultrices egestas ultricies ante dignissim litora curabitur, mollis diam praesent ligula sollicitudin justo, nam aliquet tellus mauris senectus augue.\r\n\r\nFermentum viverra vehicula quam eros congue nibh lacinia accumsan lobortis, pretium maecenas dapibus ad molestie aliquet phasellus mauris fringilla pellentesque, primis rutrum sagittis ullamcorper arcu nec fusce feugiat. Et nisi quis gravida nostra fringilla curae nascetur lobortis, augue nulla congue tellus penatibus fusce consequat posuere eleifend, eu class semper ultricies arcu per eros. Ante mollis habitant hendrerit eu laoreet tincidunt velit donec, libero duis taciti magna conubia condimentum mus bibendum, justo metus tristique netus massa viverra eget. Quis himenaeos mi ultrices tellus sociis volutpat in facilisi, venenatis et dictum malesuada purus nullam. Ut sociis imperdiet per tempus egestas blandit tortor dictum, iaculis nisi fusce lectus urna rhoncus vestibulum vivamus, metus nulla interdum duis vel id a. Nec ac tortor iaculis mus condimentum nullam dis placerat, vulputate nam hendrerit sociosqu elementum ut habitant, lobortis maecenas velit euismod suscipit curabitur platea. Nec himenaeos felis diam montes natoque volutpat tempor praesent, nostra porttitor scelerisque hendrerit mi ridiculus sociis, a quisque cubilia mattis mollis vivamus phasellus.', 'www.google.com', 3),
(9, 'Article Test', 'https://cdn.pixabay.com/photo/2014/11/03/11/06/hippo-515027_1280.jpg', 'Content article test -- Lorem ipsum dolor sit amet consectetur adipiscing elit vel venenatis id tortor, semper rhoncus porta senectus faucibus interdum condimentum nisl sed gravida, montes fringilla eu parturient posuere convallis praesent porttitor arcu habitant. Diam pellentesque aenean pretium nisi euismod sociosqu lacinia torquent massa, senectus leo at malesuada gravida ad hac ut ultrices potenti, commodo arcu aliquam litora curabitur vehicula curae platea. Gravida cubilia vitae auctor integer phasellus elementum suspendisse libero, ullamcorper ultrices taciti molestie nisl malesuada. Euismod torquent nisi fusce feugiat vivamus sodales pellentesque, consequat aliquet tortor maecenas nunc dictum ante, morbi dapibus faucibus praesent nulla cras. Primis ultrices egestas ultricies ante dignissim litora curabitur, mollis diam praesent ligula sollicitudin justo, nam aliquet tellus mauris senectus augue.\r\n\r\nFermentum viverra vehicula quam eros congue nibh lacinia accumsan lobortis, pretium maecenas dapibus ad molestie aliquet phasellus mauris fringilla pellentesque, primis rutrum sagittis ullamcorper arcu nec fusce feugiat. Et nisi quis gravida nostra fringilla curae nascetur lobortis, augue nulla congue tellus penatibus fusce consequat posuere eleifend, eu class semper ultricies arcu per eros. Ante mollis habitant hendrerit eu laoreet tincidunt velit donec, libero duis taciti magna conubia condimentum mus bibendum, justo metus tristique netus massa viverra eget. Quis himenaeos mi ultrices tellus sociis volutpat in facilisi, venenatis et dictum malesuada purus nullam. Ut sociis imperdiet per tempus egestas blandit tortor dictum, iaculis nisi fusce lectus urna rhoncus vestibulum vivamus, metus nulla interdum duis vel id a. Nec ac tortor iaculis mus condimentum nullam dis placerat, vulputate nam hendrerit sociosqu elementum ut habitant, lobortis maecenas velit euismod suscipit curabitur platea. Nec himenaeos felis diam montes natoque volutpat tempor praesent, nostra porttitor scelerisque hendrerit mi ridiculus sociis, a quisque cubilia mattis mollis vivamus phasellus.', 'www.google.com', 7),
(10, 'Article Aditionel', 'https://cdn.pixabay.com/photo/2017/07/01/15/40/playa-francesca-2461838_1280.jpg', 'Lorem ipsum dolor sit amet consectetur, adipiscing elit ante.\r\nPrimis aliquet vestibulum hac porta, turpis rutrum sapien.\r\nEuismod laoreet tortor eleifend leo, metus lacinia.\r\nVivamus aptent ut ante gravida cursus, auctor sollicitudin mattis at.\r\nPlatea parturient imperdiet massa, neque auctor purus magnis, tristique consequat.\r\nNetus nibh mollis ut sociis etiam, est nulla dis.\r\nLobortis himenaeos etiam auctor congue, neque arcu.\r\nMollis vivamus potenti diam nascetur eu, ornare nisl ac.\r\nDictum praesent tortor neque quis dictumst, eget vulputate vivamus.\r\nProin dapibus sem suscipit, enim porta class, natoque massa.', 'www.google.com', 11);

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id_user` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `date_pub` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id_user`, `id_post`, `date_pub`) VALUES
(3, 2, '2024-03-22'),
(3, 3, '2024-04-08'),
(3, 5, '2024-03-23'),
(3, 6, '2024-03-26'),
(11, 10, '2024-04-09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `pass`, `role`) VALUES
(3, 'perez', 'pepito', 'pepito@test.com', '$2y$10$VzeBXz4HSAKRjHgyWUommOCPuz7pET/UVjhD.TySB/KdDFcBKSqf6', 'contributor'),
(7, 'NOM TEST', 'Prenom Test', 'emailtest@test.com', '$2y$10$nal.a7shEeL/kQGfRCdD6uUhiVmnzTMmjJCl990swWJchyiqxgWCy', 'contributor'),
(8, 'NOM DISABLE', 'Prenom Disable', 'disable@test.com', '$2y$10$k4Djol1bCzisEjp92ygFsOQv9soW110I8mOj.EQwzqMIY7glF/fBW', 'contributor'),
(11, 'ADMIN', 'User Admin', 'admin@test.com', '$2y$10$ZspaDo9sqnE3qLMl1xGK2uu3nOUe/S7ENSaw3kBV0uH/A4rnsj6xG', 'administrator');

--
-- Déclencheurs `users`
--
DELIMITER $$
CREATE TRIGGER `add_acc` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO account (id_user) VALUES (NEW.id_user)
$$
DELIMITER ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id_user`,`id_post`),
  ADD KEY `id_post` (`id_post`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `publication`
--
ALTER TABLE `publication`
  ADD CONSTRAINT `publication_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `publication_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
