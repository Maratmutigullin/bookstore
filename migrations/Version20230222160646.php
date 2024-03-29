<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230222160646 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book ADD "user" VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE book ALTER image DROP NOT NULL');
        $this->addSql('ALTER TABLE book ALTER autors DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book DROP "user"');
        $this->addSql('ALTER TABLE book ALTER image SET NOT NULL');
        $this->addSql('ALTER TABLE book ALTER autors SET NOT NULL');
    }
}
