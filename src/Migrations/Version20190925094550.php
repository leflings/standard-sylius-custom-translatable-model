<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190925094550 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE wattoo_product_variant_association_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_644BA73177153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE wattoo_product_variant_association_type_translation (id INT AUTO_INCREMENT NOT NULL, translatable_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, locale VARCHAR(255) NOT NULL, INDEX IDX_DACB0ECE2C2AC5D3 (translatable_id), UNIQUE INDEX wattoo_product_variant_association_type_translation_uniq_trans (translatable_id, locale), PRIMARY KEY(id)) DEFAULT CHARACTER SET UTF8 COLLATE UTF8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE wattoo_product_variant_association_type_translation ADD CONSTRAINT FK_DACB0ECE2C2AC5D3 FOREIGN KEY (translatable_id) REFERENCES wattoo_product_variant_association_type (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE wattoo_product_variant_association_type_translation DROP FOREIGN KEY FK_DACB0ECE2C2AC5D3');
        $this->addSql('DROP TABLE wattoo_product_variant_association_type');
        $this->addSql('DROP TABLE wattoo_product_variant_association_type_translation');
    }
}
