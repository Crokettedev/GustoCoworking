<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190712224234 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commandefood (id INT AUTO_INCREMENT NOT NULL, id_food_id INT DEFAULT NULL, id_users_id INT DEFAULT NULL, numcommand INT NOT NULL, numcarte VARCHAR(255) NOT NULL, dateexp VARCHAR(255) NOT NULL, codesecu VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_9E03275D64132EB4 (id_food_id), INDEX IDX_9E03275D376858A8 (id_users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commandefood ADD CONSTRAINT FK_9E03275D64132EB4 FOREIGN KEY (id_food_id) REFERENCES nourriture (id)');
        $this->addSql('ALTER TABLE commandefood ADD CONSTRAINT FK_9E03275D376858A8 FOREIGN KEY (id_users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE nourriture CHANGE contenu contenu LONGTEXT NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commandefood');
        $this->addSql('ALTER TABLE nourriture CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE contenu contenu LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE image image VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
