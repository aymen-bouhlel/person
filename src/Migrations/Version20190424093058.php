<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190424093058 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE vacation (id INT AUTO_INCREMENT NOT NULL, person_id INT DEFAULT NULL, start_at DATETIME DEFAULT NULL, finish_at DATETIME DEFAULT NULL, INDEX IDX_E3DADF75217BBB47 (person_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vacation ADD CONSTRAINT FK_E3DADF75217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD1763DA5256D');
        $this->addSql('DROP INDEX UNIQ_34DCD1763DA5256D ON person');
        $this->addSql('ALTER TABLE person ADD image VARCHAR(255) DEFAULT NULL, DROP image_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE vacation');
        $this->addSql('ALTER TABLE person ADD image_id INT DEFAULT NULL, DROP image');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD1763DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_34DCD1763DA5256D ON person (image_id)');
    }
}
