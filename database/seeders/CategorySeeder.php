<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::Create([
            'category_name' => 'Digitalisierung', 
            'description' => 'Digitalisierung ist eine zentrale Kategorie in der 
            modernen Joblandschaft, die sich mit der digitalen Transformation von 
            Prozessen, Unternehmen und Gesellschaft beschäftigt. Sie umfasst Berufe, 
            die technologische Innovationen vorantreiben und digitale Lösungen 
            entwickeln.']); 
        Category::Create([
            'category_name' => 'Marketing', 
            'description' => 'Marketing ist eine vielseitige Kategorie, die sich mit
            der Vermarktung von Produkten, Dienstleistungen und Marken beschäftigt. 
            Sie umfasst kreative, analytische und strategische Tätigkeiten, die 
            Unternehmen helfen, ihre Zielgruppen zu erreichen und ihre Marktposition 
            zu stärken.']);   
        Category::Create([
            'category_name' => 'Forschung', 
            'description' => 'In der Forschung beschäftigen sich Mitarbeiter mit der 
            systematischen Untersuchung und Entwicklung neuer Erkenntnisse in 
            verschiedensten Fachgebieten beschäftigt. Sie umfasst wissenschaftliche, 
            technologische und experimentelle Tätigkeiten, die Innovationen und 
            Fortschritt vorantreiben.']);
        Category::Create([
            'category_name' => 'Finanzwesen', 
            'description' => 'Finanzwesen beschäftigt sich mit der Verwaltung, 
            Analyse und Optimierung finanzieller Ressourcen beschäftigt. Sie 
            umfasst Berufe, die Unternehmen, Privatpersonen und öffentliche 
            Einrichtungen in finanziellen Angelegenheiten unterstützen, Risiken 
            bewerten und wirtschaftliche Entscheidungen treffen.']);
    }
}
