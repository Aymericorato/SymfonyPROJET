<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220505082844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personnel ADD id INT AUTO_INCREMENT NOT NULL, DROP per_id, CHANGE per_metier per_metier VARCHAR(100) NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE personnel ADD CONSTRAINT FK_A6BCF3DE6905459C FOREIGN KEY (ent_id_id) REFERENCES entreprise (id)');
        $this->addSql('CREATE INDEX IDX_A6BCF3DE6905459C ON personnel (ent_id_id)');
        $this->addSql('ALTER TABLE personnel_profil ADD CONSTRAINT FK_CA28E5771C109075 FOREIGN KEY (personnel_id) REFERENCES personnel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur CHANGE util_mdp util_mdp VARCHAR(64) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE personnel MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE personnel DROP FOREIGN KEY FK_A6BCF3DE6905459C');
        $this->addSql('DROP INDEX IDX_A6BCF3DE6905459C ON personnel');
        $this->addSql('ALTER TABLE personnel DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE personnel ADD per_id INT NOT NULL, DROP id, CHANGE per_metier per_metier VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE personnel_profil DROP FOREIGN KEY FK_CA28E5771C109075');
        $this->addSql('ALTER TABLE utilisateur CHANGE util_mdp util_mdp VARCHAR(64) NOT NULL');
    }
}
