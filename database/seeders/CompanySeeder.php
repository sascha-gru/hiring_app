<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::Create([
            'name' => 'Software Solutions', 
            'description' => ' Software Solutions entwickelt und implementiert digitale Anwendungen, 
            um Unternehmen bei der Optimierung von Prozessen, Automatisierung und Innovation zu 
            unterstützen. Wir bieten maßgeschneiderte Lösungen für verschiedene Branchen, von 
            Finanzen über Gesundheitswesen bis hin zu Industrie und E-Commerce.',
            'street' => 'IT-Strasse 78', 
            'zip' => 12345, 
            'location' => 'IT-Ort']);
        Company::Create([
            'name' => 'Hardware Solutions', 
            'description' => 'Hardware Solutions ist Spezialist in der Entwicklung und im Vertrieb 
            von physischen IT- und Technologieprodukten, die Unternehmen und Verbraucher bei ihrer 
            täglichen Arbeit unterstützen. Wir konzentrieren uns auf die Herstellung und Optimierung 
            von Hardware, oft kombiniert mit Software-Integration.',
            'street' => 'Netzwerk-Strasse 26', 
            'zip' => 23456, 
            'location' => 'Netzwerk-Ort']);
        Company::Create([
            'name' => 'Project Solutions', 
            'description' => 'Project Solutions plant, steuert und realisiert komplexe Vorhaben 
            in verschiedenen Branchen, von Bauprojekten über Softwarelösungen bis hin zu 
            Unternehmensstrategien. Wir kombinieren technisches Know-how, wirtschaftliche Analysen 
            und kreatives Denken, um innovative und nachhaltige Projekte zu gestalten.',
            'street' => 'Projekt-Strasse 10A', 
            'zip' => 34567, 
            'location' => 'Projekt-Ort']);
    }
}
