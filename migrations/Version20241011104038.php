<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241011104038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asso_3 DROP FOREIGN KEY asso_3_ibfk_1');
        $this->addSql('ALTER TABLE asso_3 DROP FOREIGN KEY asso_3_ibfk_2');
        $this->addSql('ALTER TABLE intervention_props DROP FOREIGN KEY FK_2E1BB62C527FC1EB');
        $this->addSql('ALTER TABLE intervention_props DROP FOREIGN KEY FK_2E1BB62C8EAE3863');
        $this->addSql('DROP TABLE asso_3');
        $this->addSql('DROP TABLE intervention_props');
        $this->addSql('DROP TABLE tbl_props');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asso_3 (id INT NOT NULL, id_1 INT NOT NULL, INDEX id_1 (id_1), INDEX IDX_74EA44A1BF396750 (id), PRIMARY KEY(id, id_1)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE intervention_props (intervention_id INT NOT NULL, props_id INT NOT NULL, INDEX IDX_2E1BB62C8EAE3863 (intervention_id), INDEX IDX_2E1BB62C527FC1EB (props_id), PRIMARY KEY(intervention_id, props_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tbl_props (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE asso_3 ADD CONSTRAINT asso_3_ibfk_1 FOREIGN KEY (id) REFERENCES camping_car (id)');
        $this->addSql('ALTER TABLE asso_3 ADD CONSTRAINT asso_3_ibfk_2 FOREIGN KEY (id_1) REFERENCES type (id)');
        $this->addSql('ALTER TABLE intervention_props ADD CONSTRAINT FK_2E1BB62C527FC1EB FOREIGN KEY (props_id) REFERENCES tbl_props (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE intervention_props ADD CONSTRAINT FK_2E1BB62C8EAE3863 FOREIGN KEY (intervention_id) REFERENCES tbl_intervention (id) ON DELETE CASCADE');
    }
}
