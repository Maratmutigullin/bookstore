<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227102208 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO book_format(id, title, description, comment) VALUES(1, 'eBook', 'description', 'comment')");
        $this->addSql("INSERT INTO book_format(id, title, description, comment) VALUES(2, 'eBook2', 'description2', 'comment2')");

    }

    public function down(Schema $schema): void
    {
      $this->addSql("DELETE FROM book_format");
    }
}