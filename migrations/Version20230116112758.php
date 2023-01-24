<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230116112758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_to_book_format DROP CONSTRAINT fk_d02de222741f9a75');
        $this->addSql('DROP INDEX idx_d02de222741f9a75');
        $this->addSql('ALTER TABLE book_to_book_format RENAME COLUMN book_to_book_format_id TO format_id');
        $this->addSql('ALTER TABLE book_to_book_format ADD CONSTRAINT FK_D02DE222D629F605 FOREIGN KEY (format_id) REFERENCES book_format (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D02DE222D629F605 ON book_to_book_format (format_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE book_to_book_format DROP CONSTRAINT FK_D02DE222D629F605');
        $this->addSql('DROP INDEX IDX_D02DE222D629F605');
        $this->addSql('ALTER TABLE book_to_book_format RENAME COLUMN format_id TO book_to_book_format_id');
        $this->addSql('ALTER TABLE book_to_book_format ADD CONSTRAINT fk_d02de222741f9a75 FOREIGN KEY (book_to_book_format_id) REFERENCES book_format (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_d02de222741f9a75 ON book_to_book_format (book_to_book_format_id)');
    }
}
