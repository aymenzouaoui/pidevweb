<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230505023825 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE title title VARCHAR(150) NOT NULL, CHANGE nbp nbp INT DEFAULT NULL');
        $this->addSql('ALTER TABLE documentexpedition DROP INDEX colis_id, ADD UNIQUE INDEX UNIQ_4B2DA2224D268D70 (colis_id)');
        $this->addSql('ALTER TABLE documentexpedition CHANGE statut statut VARCHAR(50) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE documentexpedition ADD CONSTRAINT FK_4B2DA2224D268D70 FOREIGN KEY (colis_id) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE gifts CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE id_c_id id_c_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(150) NOT NULL');
        $this->addSql('ALTER TABLE gifts ADD CONSTRAINT FK_A4DAE02B1AF787D1 FOREIGN KEY (id_c_id) REFERENCES Competition (id)');
        $this->addSql('ALTER TABLE gifts ADD CONSTRAINT FK_A4DAE02BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A4DAE02BA76ED395 ON gifts (user_id)');
        $this->addSql('DROP INDEX fk_cg ON gifts');
        $this->addSql('CREATE INDEX IDX_A4DAE02B1AF787D1 ON gifts (id_c_id)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES user (id)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F1DFD61E5 FOREIGN KEY (id_colis_id) REFERENCES `colis` (id)');
        $this->addSql('DROP INDEX c_idua ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F8973C782 ON annonces (ida_U)');
        $this->addSql('DROP INDEX c_idcolis ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F1DFD61E5 ON annonces (id_colis_id)');
        $this->addSql('ALTER TABLE colis DROP FOREIGN KEY FK_470BDFF935F8C041');
        $this->addSql('DROP INDEX IDX_470BDFF935F8C041 ON colis');
        $this->addSql('ALTER TABLE colis CHANGE id_u id_u  INT NOT NULL');
        $this->addSql('ALTER TABLE colis ADD CONSTRAINT FK_470BDFF9E8824683 FOREIGN KEY (id_u ) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_470BDFF9E8824683 ON colis (id_u )');
        $this->addSql('ALTER TABLE colis_rec DROP INDEX UNIQ_5F99F50E6F858F92, ADD INDEX IDX_5F99F50E6F858F92 (id_u_id)');
        $this->addSql('ALTER TABLE colis_rec DROP INDEX UNIQ_5F99F50E1AF787D1, ADD INDEX IDX_5F99F50E1AF787D1 (id_c_id)');
        $this->addSql('ALTER TABLE reclamations DROP FOREIGN KEY fk_r');
        $this->addSql('ALTER TABLE reclamations DROP FOREIGN KEY fk_r');
        $this->addSql('ALTER TABLE reclamations CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE reclamations ADD CONSTRAINT FK_1CAD6B766D6DB7FC FOREIGN KEY (idc) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_r ON reclamations');
        $this->addSql('CREATE INDEX IDX_1CAD6B766D6DB7FC ON reclamations (idc)');
        $this->addSql('ALTER TABLE reclamations ADD CONSTRAINT fk_r FOREIGN KEY (idC) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495563346B17 FOREIGN KEY (id_trans_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fk_42c849553bde73df ON reservation');
        $this->addSql('CREATE INDEX IDX_42C849553BDE73DF ON reservation (idV)');
        $this->addSql('DROP INDEX fk_42c8495563346b17 ON reservation');
        $this->addSql('CREATE INDEX IDX_42C8495563346B17 ON reservation (id_trans_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE adress adress VARCHAR(255) NOT NULL, CHANGE cin cin VARCHAR(255) NOT NULL, CHANGE date_naissance date_naissance DATE NOT NULL, CHANGE status status TINYINT(1) NOT NULL, CHANGE token token VARCHAR(255) NOT NULL, CHANGE numtel numtel VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE vehicule CHANGE etat etat INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F1DFD61E5');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F1DFD61E5');
        $this->addSql('DROP INDEX idx_cb988c6f8973c782 ON `annonces`');
        $this->addSql('CREATE INDEX c_idua ON `annonces` (ida_U)');
        $this->addSql('DROP INDEX idx_cb988c6f1dfd61e5 ON `annonces`');
        $this->addSql('CREATE INDEX c_idcolis ON `annonces` (id_colis_id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F1DFD61E5 FOREIGN KEY (id_colis_id) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE `colis` DROP FOREIGN KEY FK_470BDFF9E8824683');
        $this->addSql('DROP INDEX IDX_470BDFF9E8824683 ON `colis`');
        $this->addSql('ALTER TABLE `colis` CHANGE id_u  id_u INT NOT NULL');
        $this->addSql('ALTER TABLE `colis` ADD CONSTRAINT FK_470BDFF935F8C041 FOREIGN KEY (id_u) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_470BDFF935F8C041 ON `colis` (id_u)');
        $this->addSql('ALTER TABLE colis_rec DROP INDEX IDX_5F99F50E1AF787D1, ADD UNIQUE INDEX UNIQ_5F99F50E1AF787D1 (id_c_id)');
        $this->addSql('ALTER TABLE colis_rec DROP INDEX IDX_5F99F50E6F858F92, ADD UNIQUE INDEX UNIQ_5F99F50E6F858F92 (id_u_id)');
        $this->addSql('ALTER TABLE Competition CHANGE id id INT NOT NULL, CHANGE title title VARCHAR(100) NOT NULL, CHANGE nbp nbp INT NOT NULL');
        $this->addSql('ALTER TABLE `DocumentExpedition` DROP INDEX UNIQ_4B2DA2224D268D70, ADD INDEX colis_id (colis_id)');
        $this->addSql('ALTER TABLE `DocumentExpedition` DROP FOREIGN KEY FK_4B2DA2224D268D70');
        $this->addSql('ALTER TABLE `DocumentExpedition` CHANGE statut statut VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02B1AF787D1');
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02BA76ED395');
        $this->addSql('DROP INDEX IDX_A4DAE02BA76ED395 ON Gifts');
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02B1AF787D1');
        $this->addSql('ALTER TABLE Gifts CHANGE id id INT NOT NULL, CHANGE id_c_id id_c_id INT NOT NULL, CHANGE photo photo VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX idx_a4dae02b1af787d1 ON Gifts');
        $this->addSql('CREATE INDEX Fk_CG ON Gifts (id_c_id)');
        $this->addSql('ALTER TABLE Gifts ADD CONSTRAINT FK_A4DAE02B1AF787D1 FOREIGN KEY (id_c_id) REFERENCES Competition (id)');
        $this->addSql('ALTER TABLE `reclamations` MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE `reclamations` DROP FOREIGN KEY FK_1CAD6B766D6DB7FC');
        $this->addSql('DROP INDEX `primary` ON `reclamations`');
        $this->addSql('ALTER TABLE `reclamations` DROP FOREIGN KEY FK_1CAD6B766D6DB7FC');
        $this->addSql('ALTER TABLE `reclamations` CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE `reclamations` ADD CONSTRAINT fk_r FOREIGN KEY (idC) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_1cad6b766d6db7fc ON `reclamations`');
        $this->addSql('CREATE INDEX fk_r ON `reclamations` (idC)');
        $this->addSql('ALTER TABLE `reclamations` ADD CONSTRAINT FK_1CAD6B766D6DB7FC FOREIGN KEY (idc) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C8495563346B17');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C8495563346B17');
        $this->addSql('DROP INDEX idx_42c849553bde73df ON `reservation`');
        $this->addSql('CREATE INDEX FK_42C849553BDE73DF ON `reservation` (idV)');
        $this->addSql('DROP INDEX idx_42c8495563346b17 ON `reservation`');
        $this->addSql('CREATE INDEX FK_42C8495563346B17 ON `reservation` (id_trans_id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C8495563346B17 FOREIGN KEY (id_trans_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE adress adress VARCHAR(255) DEFAULT NULL, CHANGE cin cin VARCHAR(255) DEFAULT NULL, CHANGE date_naissance date_naissance DATE DEFAULT NULL, CHANGE status status TINYINT(1) DEFAULT NULL, CHANGE token token VARCHAR(255) DEFAULT NULL, CHANGE numtel numtel VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE `vehicule` CHANGE etat etat TINYINT(1) NOT NULL');
    }
}
