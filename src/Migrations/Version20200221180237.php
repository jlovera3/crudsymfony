<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200221180237 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autor CHANGE fecha_nacimiento fecha_nacimiento DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE libro ADD brochure_filename VARCHAR(255) DEFAULT NULL, CHANGE isbn isbn INT DEFAULT NULL, CHANGE fecha fecha DATE DEFAULT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE autor CHANGE fecha_nacimiento fecha_nacimiento DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE libro DROP brochure_filename, CHANGE isbn isbn INT DEFAULT NULL, CHANGE fecha fecha DATE DEFAULT \'NULL\', CHANGE image image LONGBLOB DEFAULT NULL');
    }
}
