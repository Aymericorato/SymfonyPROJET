<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315082434 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, ent_id INT NOT NULL, ent_raisonsociale VARCHAR(150) NOT NULL, ent_adresse1 VARCHAR(100) DEFAULT NULL, ent_adresse2 VARCHAR(100) DEFAULT NULL, ent_adresse3 VARCHAR(100) DEFAULT NULL, ent_ville VARCHAR(100) NOT NULL, ent_codepostal VARCHAR(5) NOT NULL, ent_pays VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE entreprise_option (entreprise_id INT NOT NULL, option_id INT NOT NULL, INDEX IDX_390BC87A4AEAFEA (entreprise_id), INDEX IDX_390BC87A7C41D6F (option_id), PRIMARY KEY(entreprise_id, option_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, opt_id INT NOT NULL, opt_libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel (id INT AUTO_INCREMENT NOT NULL, ent_id_id INT NOT NULL, per_id INT NOT NULL, per_nom VARCHAR(50) NOT NULL, per_prenom VARCHAR(50) NOT NULL, per_genre VARCHAR(50) NOT NULL, per_mail VARCHAR(100) NOT NULL, per_telephone VARCHAR(10) NOT NULL, per_metier VARCHAR(50) NOT NULL, INDEX IDX_A6BCF3DE6905459C (ent_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel_profil (personnel_id INT NOT NULL, profil_id INT NOT NULL, INDEX IDX_CA28E5771C109075 (personnel_id), INDEX IDX_CA28E577275ED078 (profil_id), PRIMARY KEY(personnel_id, profil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, pro_id INT NOT NULL, pro_libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, util_id INT NOT NULL, util_login VARCHAR(50) NOT NULL, util_mdp VARCHAR(50) NOT NULL, util_role VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE entreprise_option ADD CONSTRAINT FK_390BC87A4AEAFEA FOREIGN KEY (entreprise_id) REFERENCES entreprise (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE entreprise_option ADD CONSTRAINT FK_390BC87A7C41D6F FOREIGN KEY (option_id) REFERENCES `option` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DE6905459C FOREIGN KEY (ent_id_id) REFERENCES entreprise (id)');
        $this->addSql('ALTER TABLE personnel_profil ADD CONSTRAINT FK_CA28E5771C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE personnel_profil ADD CONSTRAINT FK_CA28E577275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entreprise_option DROP FOREIGN KEY FK_390BC87A4AEAFEA');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DE6905459C');
        $this->addSql('ALTER TABLE entreprise_option DROP FOREIGN KEY FK_390BC87A7C41D6F');
        $this->addSql('ALTER TABLE personnel_profil DROP FOREIGN KEY FK_CA28E5771C109075');
        $this->addSql('ALTER TABLE personnel_profil DROP FOREIGN KEY FK_CA28E577275ED078');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE entreprise_option');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('DROP TABLE personnel');
        $this->addSql('DROP TABLE personnel_profil');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE utilisateur');
    }
}
