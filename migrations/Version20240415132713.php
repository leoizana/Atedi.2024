<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240415132713 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE intervention_props (intervention_id INT NOT NULL, props_id INT NOT NULL, INDEX IDX_2E1BB62C8EAE3863 (intervention_id), INDEX IDX_2E1BB62C527FC1EB (props_id), PRIMARY KEY(intervention_id, props_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tbl_props (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE intervention_props ADD CONSTRAINT FK_2E1BB62C8EAE3863 FOREIGN KEY (intervention_id) REFERENCES tbl_intervention (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_props ADD CONSTRAINT FK_2E1BB62C527FC1EB FOREIGN KEY (props_id) REFERENCES tbl_props (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tbl_intervention DROP equipment_complete');
        $this->addSql('ALTER TABLE tbl_intervention_report ADD disk_state VARCHAR(255) DEFAULT NULL, ADD uptime INT DEFAULT NULL, ADD battery_degradation INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tbl_user ADD first_name VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE intervention_props DROP FOREIGN KEY FK_2E1BB62C8EAE3863');
        $this->addSql('ALTER TABLE intervention_props DROP FOREIGN KEY FK_2E1BB62C527FC1EB');
        $this->addSql('DROP TABLE intervention_props');
        $this->addSql('DROP TABLE tbl_props');
        $this->addSql('ALTER TABLE tbl_intervention ADD equipment_complete VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tbl_intervention_report DROP disk_state, DROP uptime, DROP battery_degradation');
        $this->addSql('ALTER TABLE tbl_user DROP first_name');
    }
}
