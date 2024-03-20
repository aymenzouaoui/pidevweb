<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240320125833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Competition (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(150) NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, type INT NOT NULL, nbp INT DEFAULT NULL, id_uc INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition_user (competition_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_83D0485B7B39D312 (competition_id), INDEX IDX_83D0485BA76ED395 (user_id), PRIMARY KEY(competition_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `DocumentExpedition` (id INT AUTO_INCREMENT NOT NULL, colis_id INT NOT NULL, datesignature DATE NOT NULL, statut VARCHAR(50) NOT NULL, description VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_4B2DA2224D268D70 (colis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Gifts (id INT AUTO_INCREMENT NOT NULL, id_c_id INT DEFAULT NULL, user_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(100) NOT NULL, value VARCHAR(100) NOT NULL, photo VARCHAR(150) NOT NULL, INDEX IDX_A4DAE02B1AF787D1 (id_c_id), INDEX IDX_A4DAE02BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE QuizQuestion (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, answer1 VARCHAR(255) NOT NULL, answer2 VARCHAR(255) NOT NULL, answer3 VARCHAR(255) NOT NULL, correct_answer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `annonces` (id_annonce INT AUTO_INCREMENT NOT NULL, id_colis_id INT NOT NULL, type VARCHAR(255) NOT NULL, ville_dep VARCHAR(255) NOT NULL, ville_arr VARCHAR(255) NOT NULL, date_dep VARCHAR(255) NOT NULL, date_arr VARCHAR(255) NOT NULL, prix INT NOT NULL, description VARCHAR(255) NOT NULL, ida_U INT NOT NULL, INDEX IDX_CB988C6F8973C782 (ida_U), INDEX IDX_CB988C6F1DFD61E5 (id_colis_id), PRIMARY KEY(id_annonce)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_FE38F844A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `colis` (id INT AUTO_INCREMENT NOT NULL, id_u  INT NOT NULL, nomExpediteur VARCHAR(50) NOT NULL, adresseExpediteur VARCHAR(50) NOT NULL, nomDestinataire VARCHAR(50) NOT NULL, adresseDestinataire VARCHAR(50) NOT NULL, poids DOUBLE PRECISION NOT NULL, statut VARCHAR(30) NOT NULL, dateExpedition DATE NOT NULL, INDEX IDX_470BDFF9E8824683 (id_u ), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE colis_rec (id INT AUTO_INCREMENT NOT NULL, id_c_id INT DEFAULT NULL, id_u_id INT DEFAULT NULL, INDEX IDX_5F99F50E1AF787D1 (id_c_id), INDEX IDX_5F99F50E6F858F92 (id_u_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition_end_notification (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `evaluation` (id INT AUTO_INCREMENT NOT NULL, note INT NOT NULL, idTransporteur INT NOT NULL, INDEX IDX_1323A575FCC8ED84 (idTransporteur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, content VARCHAR(255) NOT NULL, timestamp DATETIME NOT NULL, receiverId INT NOT NULL, senderId INT NOT NULL, INDEX IDX_B6BD307FE9A89CDD (receiverId), INDEX IDX_B6BD307FF0D67FFD (senderId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `reclamations` (id INT AUTO_INCREMENT NOT NULL, idc INT NOT NULL, objet VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_1CAD6B766D6DB7FC (idc), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `reservation` (id_trans_id INT DEFAULT NULL, idRes INT AUTO_INCREMENT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, somme DOUBLE PRECISION NOT NULL, etat VARCHAR(30) NOT NULL, idV INT NOT NULL, INDEX IDX_42C849553BDE73DF (idV), INDEX IDX_42C8495563346B17 (id_trans_id), PRIMARY KEY(idRes)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, cin VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, date_creation_c DATE DEFAULT NULL, status TINYINT(1) NOT NULL, token VARCHAR(255) NOT NULL, score VARCHAR(255) DEFAULT NULL, numtel VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, compte_ex DATE DEFAULT NULL, token_ex DATE DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `validation` (id INT AUTO_INCREMENT NOT NULL, idu INT NOT NULL, imageA VARCHAR(255) NOT NULL, imageB VARCHAR(255) NOT NULL, valide TINYINT(1) NOT NULL, INDEX IDX_16AC5B6E99B902AD (idu), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `vehicule` (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, immat VARCHAR(30) NOT NULL, etat INT NOT NULL, kilometrage VARCHAR(30) NOT NULL, chevaux INT NOT NULL, marque VARCHAR(30) NOT NULL, modele VARCHAR(30) NOT NULL, lpec VARCHAR(15) NOT NULL, prix DOUBLE PRECISION NOT NULL, img VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE competition_user ADD CONSTRAINT FK_83D0485B7B39D312 FOREIGN KEY (competition_id) REFERENCES Competition (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competition_user ADD CONSTRAINT FK_83D0485BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `DocumentExpedition` ADD CONSTRAINT FK_4B2DA2224D268D70 FOREIGN KEY (colis_id) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE Gifts ADD CONSTRAINT FK_A4DAE02B1AF787D1 FOREIGN KEY (id_c_id) REFERENCES Competition (id)');
        $this->addSql('ALTER TABLE Gifts ADD CONSTRAINT FK_A4DAE02BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F1DFD61E5 FOREIGN KEY (id_colis_id) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `colis` ADD CONSTRAINT FK_470BDFF9E8824683 FOREIGN KEY (id_u ) REFERENCES user (id)');
        $this->addSql('ALTER TABLE colis_rec ADD CONSTRAINT FK_5F99F50E1AF787D1 FOREIGN KEY (id_c_id) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE colis_rec ADD CONSTRAINT FK_5F99F50E6F858F92 FOREIGN KEY (id_u_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `evaluation` ADD CONSTRAINT FK_1323A575FCC8ED84 FOREIGN KEY (idTransporteur) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FE9A89CDD FOREIGN KEY (receiverId) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF0D67FFD FOREIGN KEY (senderId) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `reclamations` ADD CONSTRAINT FK_1CAD6B766D6DB7FC FOREIGN KEY (idc) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C8495563346B17 FOREIGN KEY (id_trans_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition_user DROP FOREIGN KEY FK_83D0485B7B39D312');
        $this->addSql('ALTER TABLE competition_user DROP FOREIGN KEY FK_83D0485BA76ED395');
        $this->addSql('ALTER TABLE `DocumentExpedition` DROP FOREIGN KEY FK_4B2DA2224D268D70');
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02B1AF787D1');
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02BA76ED395');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F1DFD61E5');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844A76ED395');
        $this->addSql('ALTER TABLE `colis` DROP FOREIGN KEY FK_470BDFF9E8824683');
        $this->addSql('ALTER TABLE colis_rec DROP FOREIGN KEY FK_5F99F50E1AF787D1');
        $this->addSql('ALTER TABLE colis_rec DROP FOREIGN KEY FK_5F99F50E6F858F92');
        $this->addSql('ALTER TABLE `evaluation` DROP FOREIGN KEY FK_1323A575FCC8ED84');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FE9A89CDD');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF0D67FFD');
        $this->addSql('ALTER TABLE `reclamations` DROP FOREIGN KEY FK_1CAD6B766D6DB7FC');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C8495563346B17');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('DROP TABLE Competition');
        $this->addSql('DROP TABLE competition_user');
        $this->addSql('DROP TABLE `DocumentExpedition`');
        $this->addSql('DROP TABLE Gifts');
        $this->addSql('DROP TABLE QuizQuestion');
        $this->addSql('DROP TABLE `annonces`');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE `colis`');
        $this->addSql('DROP TABLE colis_rec');
        $this->addSql('DROP TABLE competition_end_notification');
        $this->addSql('DROP TABLE `evaluation`');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE `reclamations`');
        $this->addSql('DROP TABLE `reservation`');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE `validation`');
        $this->addSql('DROP TABLE `vehicule`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
