<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190716092014 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, idfood_id INT DEFAULT NULL, idusers_id INT DEFAULT NULL, INDEX IDX_24CC0DF2658AD5AA (idfood_id), INDEX IDX_24CC0DF2CD66FC30 (idusers_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2658AD5AA FOREIGN KEY (idfood_id) REFERENCES nourriture (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2CD66FC30 FOREIGN KEY (idusers_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commandefood CHANGE numcarte numcarte INT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE panier');
        $this->addSql('ALTER TABLE commandefood CHANGE numcarte numcarte VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE created_at created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
    }
}
