<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;


class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::Create([
            'jobtitle' => 'Webentwickler', 
            'description' => 'Websites und Webanwendungen erstellen, optimieren 
            und warten. Design und Entwicklung – Erstellung von Webseiten und 
            Webanwendungen mit HTML, CSS und JavaScript. Backend-Programmierung – 
            Nutzung von Programmiersprachen wie PHP, Python oder Node.js zur 
            Verwaltung von Datenbanken und Serverlogik. Fehlersuche und Testing – 
            Identifikation und Behebung von Bugs sowie Durchführung von Funktionstests.', 
            'salary' => 65000]);
        Job::Create(['jobtitle' => 'Domain-Administrator', 
            'description' => 'Verwaltung und Wartung von IT-Netzwerken und Domänen 
            innerhalb eines Unternehmens. Verwaltung von Benutzerkonten und Zugriffsrechten – 
            Sicherstellung, dass Mitarbeiter die richtigen Berechtigungen haben. Konfiguration 
            und Wartung von Servern – Verwaltung von Windows- oder Linux-Domänenservern. 
            Netzwerksicherheit – Implementierung von Sicherheitsrichtlinien, Firewalls und 
            Zugriffskontrollen.', 
            'salary' => 85000]);
        Job::Create([
            'jobtitle' => 'Projektmanager', 
            'description' => 'Planung, Steuerung und Umsetzung von Projekten. 
            Projektplanung – Erstellung eines detaillierten Plans mit Zielen, Zeitrahmen, 
            Ressourcen und Budget. Ressourcenmanagement – Zuweisung von Personal, 
            Geldmitteln und Materialien, um das Projekt effizient durchzuführen. 
            Teamführung – Koordination der Projektmitarbeiter und Sicherstellung einer 
            produktiven Zusammenarbeit', 
            'salary' => 80000]);
    }
}
