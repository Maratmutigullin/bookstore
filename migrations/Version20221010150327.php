<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221010150327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ALTER publication_date TYPE DATE');
        $this->addSql('ALTER TABLE book ALTER publication_date DROP NOT NULL');
        $this->addSql('COMMENT ON COLUMN book.publication_date IS \'(DC2Type:date_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ALTER publication_date TYPE DATE');
        $this->addSql('ALTER TABLE book ALTER publication_date SET NOT NULL');
        $this->addSql('COMMENT ON COLUMN book.publication_date IS NULL');
    }
}
