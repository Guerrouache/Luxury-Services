<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240313122948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job_offer ADD job_category_id INT DEFAULT NULL, DROP job_category');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4E712A86AB FOREIGN KEY (job_category_id) REFERENCES job_category (id)');
        $this->addSql('CREATE INDEX IDX_288A3A4E712A86AB ON job_offer (job_category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4E712A86AB');
        $this->addSql('DROP INDEX IDX_288A3A4E712A86AB ON job_offer');
        $this->addSql('ALTER TABLE job_offer ADD job_category INT NOT NULL, DROP job_category_id');
    }
}
