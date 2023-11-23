<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231123091850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE marque DROP FOREIGN KEY marque_ibfk_1');
        $this->addSql('CREATE TABLE concession (id INT AUTO_INCREMENT NOT NULL, nomdelavoiture VARCHAR(255) NOT NULL, marquedelavoiture VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, voituredisponible TINYINT(1) NOT NULL, prixdelavoiture NUMERIC(7, 2) NOT NULL, imagedelavoiture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque_concession (marque_id INT NOT NULL, concession_id INT NOT NULL, INDEX IDX_4CD6083F4827B9B2 (marque_id), INDEX IDX_4CD6083F4132BB14 (concession_id), PRIMARY KEY(marque_id, concession_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE marque_concession ADD CONSTRAINT FK_4CD6083F4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE marque_concession ADD CONSTRAINT FK_4CD6083F4132BB14 FOREIGN KEY (concession_id) REFERENCES concession (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concencession DROP FOREIGN KEY concencession_ibfk_1');
        $this->addSql('DROP TABLE concencession');
        $this->addSql('ALTER TABLE marque MODIFY Id_marque INT NOT NULL');
        $this->addSql('DROP INDEX Id_concencession ON marque');
        $this->addSql('DROP INDEX `primary` ON marque');
        $this->addSql('ALTER TABLE marque DROP Id_concencession, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE modele modele VARCHAR(255) NOT NULL, CHANGE annee annee VARCHAR(255) NOT NULL, CHANGE prix prix VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL, CHANGE Id_marque id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE marque ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE personne MODIFY Id_personne INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON personne');
        $this->addSql('ALTER TABLE personne CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE datedenaissance datedenaissance VARCHAR(255) NOT NULL, CHANGE datedupermis datedupermis VARCHAR(255) NOT NULL, CHANGE mail mail VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL, CHANGE codepostal codepostal VARCHAR(255) NOT NULL, CHANGE ville ville VARCHAR(255) NOT NULL, CHANGE Id_personne id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE personne ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE vendeur MODIFY Id_vendeur INT NOT NULL');
        $this->addSql('ALTER TABLE vendeur DROP FOREIGN KEY vendeur_ibfk_1');
        $this->addSql('DROP INDEX Id_personne ON vendeur');
        $this->addSql('DROP INDEX `primary` ON vendeur');
        $this->addSql('ALTER TABLE vendeur ADD concession_id INT DEFAULT NULL, ADD dateachatvoiture VARCHAR(255) NOT NULL, ADD remiseachat VARCHAR(255) NOT NULL, DROP datedelachat, DROP remise, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE prixdelavente prixdelavente VARCHAR(255) NOT NULL, CHANGE Id_vendeur id INT AUTO_INCREMENT NOT NULL, CHANGE Id_personne personne_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vendeur ADD CONSTRAINT FK_7AF49996A21BD112 FOREIGN KEY (personne_id) REFERENCES personne (id)');
        $this->addSql('ALTER TABLE vendeur ADD CONSTRAINT FK_7AF499964132BB14 FOREIGN KEY (concession_id) REFERENCES concession (id)');
        $this->addSql('CREATE INDEX IDX_7AF49996A21BD112 ON vendeur (personne_id)');
        $this->addSql('CREATE INDEX IDX_7AF499964132BB14 ON vendeur (concession_id)');
        $this->addSql('ALTER TABLE vendeur ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vendeur DROP FOREIGN KEY FK_7AF499964132BB14');
        $this->addSql('CREATE TABLE concencession (Id_concencession INT AUTO_INCREMENT NOT NULL, nomdelavoiture VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, marquedelavoiture VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, desciption VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, voituredisponible TINYINT(1) DEFAULT NULL, prixdelavoiture VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, prix NUMERIC(7, 2) DEFAULT NULL, image VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, Id_vendeur INT DEFAULT NULL, INDEX Id_vendeur (Id_vendeur), PRIMARY KEY(Id_concencession)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE concencession ADD CONSTRAINT concencession_ibfk_1 FOREIGN KEY (Id_vendeur) REFERENCES vendeur (Id_vendeur)');
        $this->addSql('ALTER TABLE marque_concession DROP FOREIGN KEY FK_4CD6083F4827B9B2');
        $this->addSql('ALTER TABLE marque_concession DROP FOREIGN KEY FK_4CD6083F4132BB14');
        $this->addSql('DROP TABLE concession');
        $this->addSql('DROP TABLE marque_concession');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE vendeur MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE vendeur DROP FOREIGN KEY FK_7AF49996A21BD112');
        $this->addSql('DROP INDEX IDX_7AF49996A21BD112 ON vendeur');
        $this->addSql('DROP INDEX IDX_7AF499964132BB14 ON vendeur');
        $this->addSql('DROP INDEX `PRIMARY` ON vendeur');
        $this->addSql('ALTER TABLE vendeur ADD datedelachat VARCHAR(50) DEFAULT NULL, ADD remise VARCHAR(50) DEFAULT NULL, ADD Id_personne INT DEFAULT NULL, DROP personne_id, DROP concession_id, DROP dateachatvoiture, DROP remiseachat, CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE prenom prenom VARCHAR(50) DEFAULT NULL, CHANGE prixdelavente prixdelavente VARCHAR(50) DEFAULT NULL, CHANGE id Id_vendeur INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE vendeur ADD CONSTRAINT vendeur_ibfk_1 FOREIGN KEY (Id_personne) REFERENCES personne (Id_personne)');
        $this->addSql('CREATE INDEX Id_personne ON vendeur (Id_personne)');
        $this->addSql('ALTER TABLE vendeur ADD PRIMARY KEY (Id_vendeur)');
        $this->addSql('ALTER TABLE personne MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON personne');
        $this->addSql('ALTER TABLE personne CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE prenom prenom VARCHAR(50) DEFAULT NULL, CHANGE datedenaissance datedenaissance VARCHAR(50) DEFAULT NULL, CHANGE datedupermis datedupermis VARCHAR(50) DEFAULT NULL, CHANGE mail mail VARCHAR(50) DEFAULT NULL, CHANGE telephone telephone VARCHAR(50) DEFAULT NULL, CHANGE adresse adresse VARCHAR(50) DEFAULT NULL, CHANGE codepostal codepostal VARCHAR(50) DEFAULT NULL, CHANGE ville ville VARCHAR(50) DEFAULT NULL, CHANGE id Id_personne INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE personne ADD PRIMARY KEY (Id_personne)');
        $this->addSql('ALTER TABLE marque MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON marque');
        $this->addSql('ALTER TABLE marque ADD Id_concencession INT DEFAULT NULL, CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE modele modele VARCHAR(50) DEFAULT NULL, CHANGE annee annee DATE DEFAULT NULL, CHANGE prix prix NUMERIC(7, 2) DEFAULT NULL, CHANGE image image VARCHAR(50) DEFAULT NULL, CHANGE id Id_marque INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE marque ADD CONSTRAINT marque_ibfk_1 FOREIGN KEY (Id_concencession) REFERENCES concencession (Id_concencession)');
        $this->addSql('CREATE INDEX Id_concencession ON marque (Id_concencession)');
        $this->addSql('ALTER TABLE marque ADD PRIMARY KEY (Id_marque)');
    }
}
