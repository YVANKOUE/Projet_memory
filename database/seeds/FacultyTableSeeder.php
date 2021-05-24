<?php

use App\City;
use App\School;
use App\faculty;
use App\Metier;
use Faker\Factory;
use App\Orientationstudents;
use App\Serie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villes = ['Douala', 'Nkongsamba', 'Dschang','Ebolowa','Bandjoun','Foumban','Maroua', 'Yaoundé'];
        $filiéres = ['génie des procédés', 'génie maritime et portuaire', 'génie mécanique', 'génie civil', 'Génie informatique','génie énergétique','génie automobile','Qualité Hygiène sécurité environnement'];
        $images = ['img1.jpg', 'img2.jpg', 'img3.jpg','img4.jpg','img5.jpg','img6.jpg','img7.jpg','img8.jpg'];
        $diplome_d = ['Licence en Génie Industriel','Ingénieur en Génie Industriel'];
        $diplome_r = ['BAC C','BAC D','BAC E','BT'];
        $filiéres1 =  ['anglais et langue etrangére', 'Géographie', 'Sociologie et anthropologie', 'philosophie et psychologie', 'histoire', 'langues, littératures et civilisations négro-africaine', 'Francais et études francophone', 'Sociologie', 'Communication'];
        $images1 = ['img9.jpg', 'img10.jpg', 'img11.jpg','img12.jpg','img13.jpg','img14.jpg','img15.jpg','img16.jpg'];
        $diplome_d1 = ['Licence','Master','Doctorat'];
        $diplome_r1 = ['BAC A','GCE A-Level(avec 02 matiére)','GCE O-Level(avec 04 matiére)'];
        $filiéres2 =  ['Département des sciences cliniques', 'Département de chirurgie et spécialité', 'Département des sciences pharmaceutiques', 'Département de santé publique'];
        $images2 = ['img17.jpg', 'img18.jpg', 'img19.jpg','img20.jpg','img21.jpg','img22.jpg','img23.jpg','img24.jpg'];
        $diplome_d2 = ['Master','Doctorat'];
        $diplome_r2 = ['BAC','Licence'];
        $filiéres3 =  ['Département de analyse et politique économiques','Département économique publique','Département de finance et comptabilité','Département de marketing et organisation','Département des techniques quantitative'];
        $images3 = ['img25.jpg', 'img26.jpg', 'img27.jpg','img28.jpg','img30.jpg'];
        $diplome_d3 = ['Licence','MasterI','MasterII','Doctorat-PHD'];
        $diplome_r3 = ['BAC','BTS','Licence','Master'];
        $filiéres4 =  ['Droit des affaires',"Droit d'inspiration",'Droit privé Général et sciences Criminelles','Droit public','Science politique'];
        $images4 = ['img31.jpg', 'img32.jpg', 'img33.jpg','im34.jpg','img35.jpg'];
        $diplome_d4 = ['Licence','MasterI','MasterII','Doctorat-PHD'];
        $diplome_r4 = ['BAC','GCE Advanced Level'];
        $filiéres5 =  ['Biologie Animale',"Biologie végétale",'Biochimie et Pharmacologie','Chimie','Mathématique et Informatique','Physique','Science de la Terre','Science Biomédicales(Filiéres Professionnelles)'];
        $images5 = ['img36.jpg', 'img37.jpg', 'img38.jpg','im39.jpg','img40.jpg','img41.jpg','img42.jpg','img43.jpg'];
        $diplome_d5 = ['Licence','Master','Doctorat-PHD'];
        $diplome_r5 = ['BAC','Licence','Master'];
        $filiéres6 =  ['Production Animales',"production végétaux",'Foresterie','Sciences du sol','Economie Rurale','Vulgarisation Agricolr rt Sociologie Rurale','Agriculture','Génie Rural','Education a distance'];
        $images6 = ['img44.jpg', 'img45.jpg', 'img46.jpg','im47.jpg','img48.jpg','img49.jpg','img50.jpg','img51.jpg','img52.jpg'];
        $diplome_d6 = ['Licence Scientifique','BAC','BAC +2'];
        $diplome_r6 = ['Licence','MasterI','MasterII'];
        $filiéres7 =  ['Plate forme des Technologies Industrielles',"plate forme des technologies du numérique",'Génie Logistique','Organisation et Gestion Administrative','Gestion des Entreprise et des Administrations'];
        $images7 = ['img53.jpg', 'img54.jpg', 'img55.jpg','im56.jpg','img57.jpg','img58.jpg'];
        $filiéres8 =  ['Génie civil',"Génie Informatique",'Génie Forestier','Génie Electrique','Génie Mécanique','Enseignements Scientifique de base','Industries Textiles et Habillement','Technique Administratives','Sciences et techniques Economiques de Gestion',"Science de l'Education",'Economie Sociale et Famille'];
        $images8 = ['img59.jpg', 'img60.jpg', 'img61.jpg','im62.jpg','img63.jpg','img64.jpg','img65.jpg','img66.jpg','img67.jpg','img68.jpg','img69.jpg'];
        $filiéres9 =  ['Cinéma et Audio visuel',"Art Plastiques et Histoire de L'art",'Architecture et Urbanisme','Musicologie et Chorégraphie','Muséologie','Gestion et Conservation du patrimoine Culturel','Etude Théatrales'];
        $images9 = ['img70.jpg', 'img71.jpg', 'img72.jpg','im73.jpg','img74.jpg','img75.jpg','img76.jpg'];
        $filiéres10 =  ['Gestion des Pêche',"Aquaculture",'Gestion des Ecosystèmes','Transformation et Contrôle de Qualité des Produits Halieutiques','Océanographie'];
        $images10 = ['img77.jpg', 'img78.jpg', 'img79.jpg','im80.jpg','img81.jpg'];
        $filiéres11 =  ['Gestion Financière et Comptabilité',"Gestion Marketing",'Gestion des Ressources Humaines','Gestion du commerce International et Transports',"Gestion des systèmes d'information et Aide à la Décision"];
        $images11 = ['img77.jpg', 'img78.jpg', 'img79.jpg','im80.jpg','img81.jpg'];
        // Université de DSCHANG
        $filiéres12 =  ["Departement d'analyse et politique Economique","Département d'Economique publique et des ressources Humaines", "Département de Finance et de Comptabilité", "Département de Marketing et Organisation"];
        $images12 = ['img82.jpg', 'img83.jpg', 'img84.jpg','im85.jpg'];
        $filiéres13 =  ['Edudes Africaines',"Géographie",'Histoire','Langues Etrangères Appliquées',"Philosophie","Psychologie-Sociologie"];
        $images13 = ['img86.jpg','img87.jpg', 'img88.jpg','im89.jpg','img90.jpg', 'img91.jpg'];
        $filiéres14 =  ["Département de Droit Privé et Sciences Criminelles","Département du Common Law","Droit public et Sciences Politique"];
        $images14 = ['img92.jpg','img93.jpg',"img94.jpg"];
        $filiéres15 =  ['Gestion Financière et Comptabilité',"Gestion Marketing",'Gestion des Ressources Humaines','Gestion du commerce International et Transports',"Gestion des systèmes d'information et Aide à la Décision"];
        $images15 = ['img82.jpg', 'img83.jpg', 'img84.jpg','im85.jpg','img86.jpg'];
        $filiéres16 =  ['Département de Productions Animales',"Département de production des végétaux",'Département de Foresterie','Département de sciences du Sol',"Département d'Economie Rurale","Département de Vulgarisation Agricole et Sociologie Rurale","Département d'Agriculture","Département Génie Rural","Centre pour l'Education à Distance"];
        $images16 = ['img82.jpg', 'img83.jpg', 'img84.jpg','im85.jpg','img86.jpg'];
        $filiéres17 =  ['menuiserie et construction en bois','Exploitation forestière et transformation du bois',"assainissement des eaux","Production et distribution d'eau potable","Maintenance des ouvrages d'eau et assainissement","hydraulique agricole","aquaculture et bio-ressources halieutiques","Etudes d'impacts environnementaux","Gestion des risques et environnement","Aménagement du territire"];
        $images17 = ['img87.jpg', 'img88.jpg', 'img89.jpg','img90.jpg','img91.jpg','img92.jpg','img93.jpg','img94.jpg','img95.jpg','img96.jpg'];
        $filiéres18 =  ['Génie électrique',"Génie Civil",'Comptabilité et Gestion des Entreprises','Action Commerciale',"Secrétariat de direction","Informatique de Gestion",'Génie de Télécommunications et Réseaux',"Génie Mécanique et Production"];
        $images18 = ['img97.jpg', 'img98.jpg', 'img99.jpg','im100.jpg','img101.jpg','img102.jpg','img103.jpg','img104.jpg'];
        $filiéres19 =  ['Département des Arts Plastiques',"Département des Arts Décoratifs","Département d'Architecture et Art d'Ingénieur",'Département des Arts Technologie, et Patrimoine',"Département des Arts du Spectacle"];
        $images19 = ['img105.jpg', 'img106.jpg', 'img107.jpg','im108.jpg','img109.jpg'];
        $filiéres20 =  ['Chimie',"Geographie ",'Histoire',"Langue francaise et littératures d'expression","Langue étrangères","Lettres Bilingue","Mathématiques","Sciences Physique","Sciences de la vie et de la terre","Philosophie et Sciences de l'Education"];
        $images20 = ['img110.jpg', 'img111.jpg', 'img112.jpg','im113.jpg','img114.jpg','img115.jpg','img116.jpg','img117.jpg','img118.jpg','img119.jpg'];
        $filiéres21 =  ['Département des Energies renouvelables',"Département de l'Agriculture, de l'Elevage et des Produits dérivés","Département du Traitement des matériaux, de l'Architecture et de l'Habitat","Département de l'informatique et Télécommunication","Département du Textile et de l'Industrie de l'Habillement","Département de l'Hydraulique et de la maitrise des eaux","Département des Beaux Arts et des Sciences du Patrimoine","Département des Sciences Sociales pour le développement"];
        $images21 = ['img120.jpg', 'img121.jpg', 'img122.jpg','im123.jpg','img124.jpg','img125.jpg','img126.jpg','img127.jpg'];
        //Yaoundé
        // $filiéres22 =  ['Chimie',"Geographie ",'Histoire',"Langue francaise et littératures d'expression","Langue étrangères","Lettres Bilingue","Mathématiques","Sciences Physique","Sciences de la vie et de la terre","Philosophie et Sciences de l'Education"];
        // $images22 = ['img110.jpg', 'img111.jpg', 'img112.jpg','im113.jpg','img114.jpg','img115.jpg','img116.jpg','img117.jpg','img118.jpg','img119.jpg'];
        
        $filiéres23 =  ['Mathématique',"Informatique",'Chimie',"Chimie Organique","Chimie Inorganique","Physique","Sciences de la Terre et de l'Univers","Biologie des Organismes Végétaux","Biologie des Organismes Animaux","Biochimie"];
        $images23 = ['img120.jpg', 'img121.jpg', 'img122.jpg','im123.jpg','img124.jpg','img125.jpg','img126.jpg','img127.jpg','img128.jpg','img129.jpg'];
       
        $filiéres24 =  ['Mathématique et Sciences Physique','Génie Civil',"Génie Electrique",'Génie Informatique',"Génie Industriel","Génie Mécanique","Génie Télécommunication"];
        $images24 = ['img130.jpg', 'img131.jpg', 'img132.jpg','im133.jpg', 'img134.jpg', 'img135.jpg','im136.jpg'];
       
        $filiéres25 =  ['Anglais','Anthopologie',"Arts et Archélogie",'Etudes Bilingues',"Francais","Littérature et Civilisation Germanique","Littérature et Civilisation Ibéro-Américaines et italiennes","Littérature Négro-africaines","Philosophie","Psychologie","Sociologie et Tourisme"];
        $images25 = ['img137.jpg', 'img138.jpg', 'img139.jpg','im140.jpg', 'img141.jpg', 'img142.jpg','im143.jpg', 'img144.jpg','im145.jpg','im146.jpg'];
       
        $filiéres26 =  ['Techniciens de santé','Médécine générale',"Sciences Pharmaceutiques",'Médécine bucco-dentaire'];
        $images26 = ['img147.jpg', 'img148.jpg', 'img149.jpg','im150.jpg'];

        $filiéres27 =  ['Mathématique',"Physique",'Chimie',"Biologie","Géographie","Sciences de l'Education","Francais","Anglais","Langues Etrangères","Langues et cultures camerounaise","Philosophie","Histoire","Informatique"];
        $images27 = ['img151.jpg', 'img152.jpg', 'img153.jpg','im154.jpg','im155.jpg','im156.jpg','im157.jpg','im158.jpg','im159.jpg','im160.jpg','im161.jpg','im162.jpg','im163.jpg'];

        $filiéres28 =  ['Droit Privé','Droit Public',"English Law",'Science Politique'];
        $images28 = ['img164.jpg', 'img165.jpg', 'img166.jpg','im167.jpg'];

        $filiéres29 =  ["Département de l'Economie Internationale et Développement","Département de l'Economie Monétaire et Bancaire","Département de l'Analyse des politiques Economiques","Département de l'Economie des Ressources Humaine","Département de l'Economie Publique","Département des Techniques Quantitatives","Département des Services de Gestion"];
        $images29 = ['img168.jpg', 'img169.jpg', 'img170.jpg','im171.jpg', 'img172.jpg','im173.jpg', 'img174.jpg'];

        $filiéres30 =  ["Formation des spécialistes en sciences de la population","Recherche sur les questions de population en Afrique","Assistance technique et fourniture d'expertise aux Etats membres et aux partenaire"];
        $images30 = ['img175.jpg','img176.jpg','img177.jpg'];

        $filiéres31 =  ["Département de Politique Internationale","Département d'Economie Internationale","Département de Diplomate et des Enseignants Professionnels","Département du Droit International"];
        $images31 = ['img178.jpg','img179.jpg','img180.jpg','img181.jpg'];

        $filiéres32 =  ["Département de la radio","Département de la presse écrite","Département de la télévision","Département des enseignement généraux","département de l'information documentaire","département de l'édition et des arts graphiques","département de la communication africaine","département des TIC","département relations publiques"];
        $images32 = ['img182.jpg','img183.jpg','img184.jpg','img185.jpg','img186.jpg','img187.jpg','img188.jpg','img189.jpg','img190.jpg'];

        $filiéres33 =  ["Pédagogie génèrale","Psychologie","Didactiques des diciplines","Administration et Législation Scolaire","Supervision pédagogique","Philosophie et Sociologie de l'Education Politique éducative","Education comparée","Statistique appliquées à l'Education ","Recherche en Education","Elaboration et Evaluation des programmes","Ethique et Morale professionnelle","TIC","Pratique de Classe ou d'enseignement"];
        $images33 = ['img191.jpg','img192.jpg','img193.jpg','img194.jpg','img195.jpg','img196.jpg','img197.jpg','img198.jpg','img199.jpg','img200.jpg','img201.jpg','img202.jpg','img203.jpg'];

        $filiéres34 =  ["Economie Sociale et Familiale","Industrie de l'Habillement","Petite Mécanique","Comptabilité et Gestion","Bureautique et Communication Administrative","Installation Sanitaire","Electricité","Menuiserie","Maconnerie"];
        $images34 = ['img204.jpg','img205.jpg','img206.jpg','img207.jpg','img208.jpg','img209.jpg','img210.jpg','img211.jpg','img212.jpg'];

        //Universités privées
        $filiéres35 =  ["Informatique industrielle","Electronique","Electrotechnique","Génie civil","Froid et climatisation","Maintenance des systèmes informatique","Assurances","Secrétariat de Direction","Sécrétariat bureautique bilingue","Finance et Comptabilité","Marketing Commerce Vente","Génie Informatique"];
        $images35 = ['img213.jpg','img214.jpg','img215.jpg','img216.jpg','img217.jpg','img218.jpg','img219.jpg','img220.jpg','img221.jpg','img222.jpg','img223.jpg','img224.jpg','img225.jpg'];

        $filiéres36 =  ["Sciences et Systèmes d'informations","Génie Mécanique et Energétique","Génie Electrique et Automatique","Génie Industriel","Formation Humaine","Langue et Cultures Internationales","Pédagogie et Projet"];
        $images36 = ['img226.jpg','img227.jpg','img228.jpg','img229.jpg','img230.jpg','img231.jpg','img232.jpg'];

        $filiéres37 =  ["Logistique","Action Commerciale","Annonce","Banque","Tourisme","Comptabilité et Gestion","Hotellerie et Restauration","Commerce International","Economie Sociale","Communication d'entreprise"];
        $images37 = ['img233.jpg','img234.jpg','img235.jpg','img236.jpg','img237.jpg','img238.jpg','img239.jpg','img240.jpg','img241.jpg','img242.jpg'];
        
        $filiéres38 =  ["Commerce International","Action Commerciale","Marketing et Commerce","Comptabilité et Gestion d'Entreprise","Sécrétariat Bureautique Bilingue","Secrétariat de Direction","Informatique de Gestion","Banque Finance","Gestion logistique et Transport","Banque",'Maintenance des systèmes Informatique','Tourisme',"Communication d'Entreprise"];
        $images38 = ['img243.jpg','img244.jpg','img245.jpg','img246.jpg','img247.jpg','img248.jpg','img249.jpg','img250.jpg','img251.jpg','img252.jpg','img253.jpg','img254.jpg','img255.jpg'];

        $filiéres39 =  ["Génie Informatique","Génie Electrique"];
        $images39 = ['img256.jpg','img257.jpg'];

        $filiéres40 =  ["Sciences et Techniques Industrielles","Sciences de l'Ingénieur","Sciences de Gestion","Sciences et Technique Industrielle"];
        $images40 = ['img256.jpg','img257.jpg','img258.jpg','img259.jpg'];
        
        $filiéres41 =  ["Action Commerciale et Commerce International","Communication des Entreprise","Hotellerie-Restauration","Comptabilité et Gestion","Informatique de Gestion","Economie Sociale et Familiale","Journalisme","Maintenance er Après-vente Automobile","Electronique","Secrétariat de Direction et Secrétariat Bureautique Bilingue","Tourisme et Loisirs","Carrières juridiques","Droit des affaires","Génie des télécoms et réseaux","Génie informatique","Marketting-force de vente","Finances-comptabilité","Banque","Expertise comptable","Lettres modernes anglaises"];
        $images41 = ['img260.jpg','img261.jpg','img262.jpg','img263.jpg','img264.jpg','img265.jpg','img266.jpg','img267.jpg','img268.jpg','img269.jpg','img270.jpg','img271.jpg','img272.jpg','img273.jpg','img274.jpg','img275.jpg','img276.jpg','img277.jpg','img278.jpg','img279.jpg'];

        $filiéres42 =  ["Banque","Informatique Gestion","Comptabilité et Gestion des entreprises","Secrétariat Bureautique","Action Commerciale","Commerce International","Journalisme","Tourismes et Loisirs","Assurances","Journaliste","Photographie et Audiovisuel","Communication d'Entreprise","Transport et Logistique","Electronique","Froid et climatisation","Electrotechnique","Maintenance Automobile après vente","Batiment et Travaux publics","Informatique Industrielle","Maintenance des systèmes informatiques","Menuiserie Ebénisterie","Industrie d'Habillement","Economie Sociale","Hotellerie-Restauration"];
        $images42 = ['img260.jpg','img261.jpg','img262.jpg','img263.jpg','img264.jpg','img265.jpg','img266.jpg','img267.jpg','img268.jpg','img269.jpg','img270.jpg','img271.jpg','img272.jpg','img273.jpg','img274.jpg','img275.jpg','img276.jpg','img277.jpg','img278.jpg','img279.jpg'];

        $filiéres43 =  ["Sciences exactes","Sciences de la construction","Sciences Humaines et Socials","Enseignement en Ateliers","Architecture","Arts","Graphiques","Infographie"];
        $images43 = ['img260.jpg','img261.jpg','img262.jpg','img263.jpg','img264.jpg','img265.jpg','img266.jpg','img267.jpg'];

        $filiéres44 =  ["Télécommunication","Automatique","Informatique industrielle","Electronique","Electrotechnique","Génie Informatique","Maintenance Informatique","Construction mécanique","Fabrication mécanique","Mécanique automobile","Thermique et énergie","Batiments","Travaux publics","Urbanisme"];
        $images44 = ['img260.jpg','img261.jpg','img262.jpg','img263.jpg','img264.jpg','img265.jpg','img266.jpg','img267.jpg','img260.jpg','img261.jpg','img262.jpg','img263.jpg','img264.jpg','img265.jpg'];

        $filiéres45 =  ["Comptabilité Finances","Marketing","Commerce","Vente","Banque","Expertise","Comptable","Informatique de Gestion","Ressources humaines","Petites et Moyennes Organisations"];
        $images45 = ['img260.jpg','img261.jpg','img262.jpg','img263.jpg','img264.jpg','img265.jpg','img266.jpg','img267.jpg','img266.jpg','img267.jpg'];

        $filiéres46 =  ["Comptabilité marketing","Gestion des établissements financiers","Comptabilite et fiscalité"];
        $images46 = ['img260.jpg','img261.jpg','img262.jpg'];

        $series = ['BAC C','BAC D','BAC E','BAC BT','BAC A','BAC F'];
        
        $metiers = ['Enseignant(e)','Ingénieur agronome','chercheur','Ingénieur en Génie mécanique','Ingénieur en Construction','Technicien réseau','Analyse de la donnée','Conseiler(ère) clientèle','Développeur','Interprétariat et traducteur','Journalistes','Medecin','Officines de pharmacie','Responsable de gestion administrative','Analyste financier','Avocat','Majistrat','Agent Immobilier','Opérateur de fabrication','Domoticien','Expert en sécurité informatique','Réalisateur','Scénariste','Commercant(e)','Secrétaire de Direction','Chef Comptable'];
       
       
        foreach($villes as $ville){
        City::create([
            'name' => $ville
        ]);
    }
    $school_new = School::create([
        'name' => 'POLYTECH DE DOUALA',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur concours",
        'logo' => 'dddddd.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
    foreach ($filiéres as $key1 => $filiére) {
        foreach ($images as $key2 => $image) {
           if ($key2 == $key1) {
            $school_new->faculties()->attach(faculty::create([
                'name' => $filiére,
                'img' => $image
          ])
      );
           }
        }
       }
       
    $school_new1 = School::create([
        'name' => 'FACULTE DES ARTS, LETTRES ET SCIENCES HUMAINE',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur etude de dossier",
        'logo' => 'dddddd2.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres1 as $key1 => $filiére1) {
        foreach ($images1 as $key2 => $image1) {
           if ($key2 == $key1) {
            $school_new1->faculties()->attach(faculty::create([
                'name' => $filiére1,
                'img' => $image1
          ])
      );
           }
        }
       }
       $school_new3 = School::create([
        'name' => 'FACULTE DE MEDECINE ET DES SCIENCES PHARMACEUTIQUES',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur etude de dossier",
        'logo' => 'dddddd3.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres2 as $key1 => $filiére2) {
        foreach ($images2 as $key2 => $image2) {
           if ($key2 == $key1) {
            $school_new3->faculties()->attach(faculty::create([
                'name' => $filiére2,
                'img' => $image2
          ])
      );
           }
        }
        
       }
       $school_new4 = School::create([
        'name' => 'FACULTE DES SCIENCES ECONOMIQUES ET DE GESTION APPLIQUEE',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur etude de dossier",
        'logo' => 'dddddd4.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres3 as $key1 => $filiére3) {
        foreach ($images3 as $key2 => $image3) {
           if ($key2 == $key1) {
            $school_new4->faculties()->attach(faculty::create([
                'name' => $filiére3,
                'img' => $image3
          ])
      );
           }
        }
       }
       $school_new5 = School::create([
        'name' => 'FACULTE DES SCIENCES JURIDIQUE ET POLITIQUES',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur etude de dossier",
        'logo' => 'dddddd2.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
    foreach ($filiéres4 as $key1 => $filiére4) {
        foreach ($images4 as $key2 => $image4) {
           if ($key2 == $key1) {
            $school_new5->faculties()->attach(faculty::create([
                'name' => $filiére4,
                'img' => $image4
          ])
      );
           }
        }
       }
       $school_new6 = School::create([
        'name' => 'FACULTE DES SCIENCES',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur etude de dossier",
        'logo' => 'dddddd6.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres5 as $key1 => $filiére5) {
        foreach ($images5 as $key2 => $image5) {
           if ($key2 == $key1) {
            $school_new6->faculties()->attach(faculty::create([
                'name' => $filiére5,
                'img' => $image5
          ])
      );
           }
        }
       }
       $school_new7 = School::create([
        'name' => "FACULTE D'AGRONOMIE ET DES SCIENCES AGRICOLES",
        'city_id' => 1,
        'localisation' => 'Dschang',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette faculté se fait sur etude de dossier et concour",
        'logo' => 'dddddd7.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres6 as $key1 => $filiére6) {
        foreach ($images6 as $key2 => $image6) {
           if ($key2 == $key1) {
            $school_new7->faculties()->attach(faculty::create([
                'name' => $filiére6,
                'img' => $image6
          ])
      );
           }
        }
       }
       $school_new8 = School::create([
        'name' => 'INSTITUT UNIVERSITAIRE DE TECHNOLOGIE DE DOUALA',
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette Ecole se fait sur concour",
        'logo' => 'dddddd8.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres7 as $key1 => $filiére7) {
        foreach ($images7 as $key2 => $image7) {
           if ($key2 == $key1) {
            $school_new8->faculties()->attach(faculty::create([
                'name' => $filiére7,
                'img' => $image7
          ])
      );
           }
        }
       }
       $school_new9 = School::create([
        'name' => "ECOLE NORMALE SUPERIEURE D'ENSEIGNEMENT TECHNIQUE",
        'city_id' => 1,
        'localisation' => 'Douala',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette Ecole se fait sur concour",
        'logo' => 'dddddd9.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres8 as $key1 => $filiére8) {
        foreach ($images8 as $key2 => $image8) {
           if ($key2 == $key1) {
            $school_new9->faculties()->attach(faculty::create([
                'name' => $filiére8,
                'img' => $image8
          ])
      );
           }
        }
       }
       $school_new10 = School::create([
        'name' => "INSTITUT DES BEAUX ARTS DE NKONGSAMBA",
        'city_id' => 1,
        'localisation' => 'Nkongsamba',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette Ecole se fait sur concour",
        'logo' => 'ddddddk.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres9 as $key1 => $filiére9) {
        foreach ($images9 as $key2 => $image9) {
           if ($key2 == $key1) {
            $school_new10->faculties()->attach(faculty::create([
                'name' => $filiére9,
                'img' => $image9
          ])
      );
           }
        }
       }





       $school_new11 = School::create([
        'name' => "INSTITUT DES SCIENCES HALIEUTIQUES YABASSI",
        'city_id' => 1,
        'localisation' => 'YABASSI',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette Ecole se fait sur concour",
        'logo' => 'dddddd10.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres10 as $key1 => $filiére10) {
        foreach ($images10 as $key2 => $image10) {
           if ($key2 == $key1) {
            $school_new11->faculties()->attach(faculty::create([
                'name' => $filiére10,
                'img' => $image10
          ])
      );
           }
        }
       }

       $school_new12 = School::create([
        'name' => "ECOLE SUPERIEURE DES SCIENCES ECONOMIQUES ET COMMERCIALES",
        'city_id' => 1,
        'localisation' => 'DOUALA',
        'TypeUniversité'=>"Université d'Etat",
        'description'=>"L'accès a cette Ecole se fait sur concour et Etude de dossier",
        'logo' => 'dddddd11.jpg',
        'langue_formation' => 'Anglais et Francais',
    ]);
       foreach ($filiéres11 as $key1 => $filiére11) {
        foreach ($images11 as $key2 => $image11) {
           if ($key2 == $key1) {
            $school_new12->faculties()->attach(faculty::create([
                'name' => $filiére11,
                'img' => $image11
          ])
      );
           }
        }
       }
//Université de Dschang

$school_new13 = School::create([
    'name' => "FACULTE DES SCIENCES ECONOMIQUES ET DE GESTION",
    'city_id' => 3,
    'localisation' => 'Dschang',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur Etude de dossier",
    'logo' => 'dddddd12.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres12 as $key1 => $filiére12) {
    foreach ($images12 as $key2 => $image12) {
       if ($key2 == $key1) {
        $school_new13->faculties()->attach(faculty::create([
            'name' => $filiére12,
            'img' => $image12
      ])
  );
       }
    }
   }



   $school_new14 = School::create([
    'name' => "FACULTE DES LETTRES ET SCIENCES HUMAINES",
    'city_id' => 3,
    'localisation' => 'Dschang',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur Etude de dossier",
    'logo' => 'dddddd13.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres13 as $key1 => $filiére13) {
    foreach ($images13 as $key2 => $image13) {
       if ($key2 == $key1) {
        $school_new14->faculties()->attach(faculty::create([
            'name' => $filiére13,
            'img' => $image13
      ])
  );
       }
    }
   }


   $school_new15 = School::create([
    'name' => "FACULTE DES SCIENCES JURIDIQUES ET POLITIQUES",
    'city_id' => 3,
    'localisation' => 'Dschang',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur Etude de dossier",
    'logo' => 'dddddd14.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres14 as $key1 => $filiére14) {
    foreach ($images14 as $key2 => $image14) {
       if ($key2 == $key1) {
        $school_new15->faculties()->attach(faculty::create([
            'name' => $filiére14,
            'img' => $image14
      ])
  );
       }
    }
   }


   
   $school_new16 = School::create([
    'name' => "FACULTE D'AGRONOMIE ET DES SCIENCES AGRICOLES",
    'city_id' => 3,
    'localisation' => 'Dschang',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur Etude de dossier et concours",
    'logo' => 'dddddd15.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres16 as $key1 => $filiére16) {
    foreach ($images16 as $key2 => $image16) {
       if ($key2 == $key1) {
        $school_new16->faculties()->attach(faculty::create([
            'name' => $filiére16,
            'img' => $image16
      ])
  );
       }
    }
   }

   

//    $school_new17 = School::create([
//     'name' => "FACULTE D'AGRONOMIE ET DES SCIENCES AGRICOLES",
//     'city_id' => 4,
//     'localisation' => 'EBOLOWA',
//     'TypeUniversité'=>"Université d'Etat",
//     'description'=>"L'accès a cette Ecole se fait sur concours",
//     'logo' => 'dddddd16.jpg',
//     'langue_formation' => 'Anglais et Francais',
// ]);
//    foreach ($filiéres17 as $key1 => $filiére17) {
//     foreach ($images17 as $key2 => $image17) {
//        if ($key2 == $key1) {
//         $school_new17->faculties()->attach(faculty::create([
//             'name' => $filiére17,
//             'img' => $image17
//       ])
//   );
//        }
//     }
//    }




   
   $school_new18 = School::create([
    'name' => "INSTITUT UNIVERSITAIRE DE TECHNOLOGIE-FOTSO VICTOR",
    'city_id' => 5,
    'localisation' => 'BANDJOUN',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur concours",
    'logo' => 'dddddd17.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres18 as $key1 => $filiére18) {
    foreach ($images18 as $key2 => $image18) {
       if ($key2 == $key1) {
        $school_new18->faculties()->attach(faculty::create([
            'name' => $filiére18,
            'img' => $image18
      ])
  );
       }
    }
   }


      
   $school_new19 = School::create([
    'name' => "INSTITUT DES BEAUX ARTS (IBAF) DE FOUMBAN",
    'city_id' => 6,
    'localisation' => 'FOUMBAN',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur concours",
    'logo' => 'dddddd18.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres19 as $key1 => $filiére19) {
    foreach ($images19 as $key2 => $image19) {
       if ($key2 == $key1) {
        $school_new19->faculties()->attach(faculty::create([
            'name' => $filiére19,
            'img' => $image19
      ])
  );
       }
    }
   }



     
   $school_new20 = School::create([
    'name' => "ECOLE NORMAL SUPERIEURE DE MAROUA",
    'city_id' => 7,
    'localisation' => 'MAROUA',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur concours, sur étude de dossier, sur titre ou comme auditeur libre",
    'logo' => 'dddddd19.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres20 as $key1 => $filiére20) {
    foreach ($images20 as $key2 => $image20) {
       if ($key2 == $key1) {
        $school_new20->faculties()->attach(faculty::create([
            'name' => $filiére20,
            'img' => $image20
      ])
  );
       }
    }
   }

    //YAOUNDE
   $school_new22 = School::create([
    'name' => "ECOLE NATIONALE SUPERIEURE POLYTECHNIQUE",
    'city_id' => 8,
    'localisation' => 'YAOUNDE',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur concours",
    'logo' => 'dddddd21.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres24 as $key1 => $filiére24) {
    foreach ($images24 as $key2 => $image24) {
       if ($key2 == $key1) {
        $school_new22->faculties()->attach(faculty::create([
            'name' => $filiére24,
            'img' => $image24
      ])
  );
       }
    }
   }
   
   $school_new23 = School::create([
    'name' => "FACULTE DES SCIENCE DE YAOUNDE",
    'city_id' => 8,
    'localisation' => 'YAOUNDE',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se fait sur Etude de dossier",
    'logo' => 'dddddd22.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres23 as $key1 => $filiére23) {
    foreach ($images23 as $key2 => $image23) {
       if ($key2 == $key1) {
        $school_new23->faculties()->attach(faculty::create([
            'name' => $filiére23,
            'img' => $image23
      ])
  );
       }
    }
   }



   $school_new24 = School::create([
    'name' => "FACULTE DES ARTS, LETTRES ET SCIENCES HUMAINES DE YAOUNDE",
    'city_id' => 8,
    'localisation' => 'YAOUNDE',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole se par préinscription sur la base d'un dossier déposé",
    'logo' => 'dddddd23.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres25 as $key1 => $filiére25) {
    foreach ($images25 as $key2 => $image25) {
       if ($key2 == $key1) {
        $school_new24->faculties()->attach(faculty::create([
            'name' => $filiére25,
            'img' => $image25
      ])
  );
       }
    }
   }


   $school_new25 = School::create([
    'name' => "FACULTE DE MEDECINE ET DE SCIENCES BIOMEDICALES",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd24.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres26 as $key1 => $filiére26) {
    foreach ($images26 as $key2 => $image26) {
       if ($key2 == $key1) {
        $school_new25->faculties()->attach(faculty::create([
            'name' => $filiére26,
            'img' => $image26
      ])
  );
       }
    }
   }


   $school_new26 = School::create([
    'name' => "ECOLE NORMAL SUPERIEURE",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd25.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres27 as $key1 => $filiére27) {
    foreach ($images27 as $key2 => $image27) {
       if ($key2 == $key1) {
        $school_new26->faculties()->attach(faculty::create([
            'name' => $filiére27,
            'img' => $image27
      ])
  );
       }
    }
   }
   $school_new27 = School::create([
    'name' => "FACULTE DES SCIENCES JURIDIQUES ET POLITIQUES",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur Etude de dossier",
    'logo' => 'dddddd26.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres28 as $key1 => $filiére28) {
    foreach ($images28 as $key2 => $image28) {
       if ($key2 == $key1) {
        $school_new27->faculties()->attach(faculty::create([
            'name' => $filiére28,
            'img' => $image28
      ])
  );
       }
    }
   }

   $school_new28 = School::create([
    'name' => "FACULTES DES SCIENCES ECONOMIQUES ET DE GESTION",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur Etude de dossier",
    'logo' => 'dddddd27.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres29 as $key1 => $filiére29) {
    foreach ($images29 as $key2 => $image29) {
       if ($key2 == $key1) {
        $school_new28->faculties()->attach(faculty::create([
            'name' => $filiére29,
            'img' => $image29
      ])
  );
       }
    }
   }


   $school_new29 = School::create([
    'name' => "INSTITUT DE FORMATION ET DE RECHERCHE DEMOGRAPHIQUES",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd28.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres30 as $key1 => $filiére30) {
    foreach ($images30 as $key2 => $image30) {
       if ($key2 == $key1) {
        $school_new29->faculties()->attach(faculty::create([
            'name' => $filiére30,
            'img' => $image30
      ])
  );
       }
    }
   }


   $school_new30 = School::create([
    'name' => "INSTITUT DES RELATIONS INTERNATIONALES DU CAMEROUN",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd29.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres31 as $key1 => $filiére31) {
    foreach ($images31 as $key2 => $image31) {
       if ($key2 == $key1) {
        $school_new30->faculties()->attach(faculty::create([
            'name' => $filiére31,
            'img' => $image31
      ])
  );
       }
    }
   }


   $school_new31 = School::create([
    'name' => "ECOLE SUPERIEURE DES SCIENCES ET TECHNIQUES DE L'INFORMATIONET DE LA COMMUNICATION",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd30.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres32 as $key1 => $filiére32) {
    foreach ($images32 as $key2 => $image32) {
       if ($key2 == $key1) {
        $school_new31->faculties()->attach(faculty::create([
            'name' => $filiére32,
            'img' => $image32
      ])
  );
       }
    }
   }


   
   $school_new32 = School::create([
    'name' => "ECOLE NORMALE D'INSTITUTEUR D'ENSEIGNEMENT GENERALE",
    'city_id' => 1,
    // 'localisation' => '',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd31.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres33 as $key1 => $filiére33) {
    foreach ($images33 as $key2 => $image33) {
       if ($key2 == $key1) {
        $school_new32->faculties()->attach(faculty::create([
            'name' => $filiére33,
            'img' => $image33
      ])
  );
       }
    }
   }


   $school_new33 = School::create([
    'name' => "ECOLE NORMALE D'INSTITUTEURS D'ENSEIGNEMENT TECHNIQUE",
    'city_id' => 1,
    // 'localisation' => '',
    'TypeUniversité'=>"Université d'Etat",
    'description'=>"L'accès a cette Ecole ce fait sur concours",
    'logo' => 'dddddd32.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres34 as $key1 => $filiére34) {
    foreach ($images34 as $key2 => $image34) {
       if ($key2 == $key1) {
        $school_new33->faculties()->attach(faculty::create([
            'name' => $filiére34,
            'img' => $image34
      ])
  );
       }
    }
   }

//Université privée de Douala


$school_new34 = School::create([
    'name' => "ECOLE SUPERIEURE DES SCIENCES ET TECHNIQUES",
    'city_id' => 1,
    'localisation' => 'Douala',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier",
    'logo' => 'dddddd33.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres35 as $key1 => $filiére35) {
    foreach ($images35 as $key2 => $image35) {
       if ($key2 == $key1) {
        $school_new34->faculties()->attach(faculty::create([
            'name' => $filiére35,
            'img' => $image35
      ])
  );
       }
    }
   }


   $school_new35 = School::create([
    'name' => "ECOLE SUPERIEURE DE TECHNOLOGIE D'AFRIQUE CENTRALE",
    'city_id' => 1,
    'localisation' => 'Douala',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier et sur concour",
    'logo' => 'dddddd34.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres36 as $key1 => $filiére36) {
    foreach ($images36 as $key2 => $image36) {
       if ($key2 == $key1) {
        $school_new35->faculties()->attach(faculty::create([
            'name' => $filiére36,
            'img' => $image36
      ])
  );
       }
    }
   }



   $school_new36 = School::create([
    'name' => "INSTITUT SUPERIEUR TRANSPORT TOURISME AFFAIRES ET MANAGEMENT",
    'city_id' => 1,
    'localisation' => 'Douala',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier",
    'logo' => 'dddddd35.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres37 as $key1 => $filiére37) {
    foreach ($images37 as $key2 => $image37) {
       if ($key2 == $key1) {
        $school_new36->faculties()->attach(faculty::create([
            'name' => $filiére37,
            'img' => $image37
      ])
  );
       }
    }
   }



   $school_new37 = School::create([
    'name' => "INSTITUT SUPERIEUR PROFESSEURS REUNIS",
    'city_id' => 1,
    'localisation' => 'Douala',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier et sur Concours",
    'logo' => 'dddddd36.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres38 as $key1 => $filiére38) {
    foreach ($images38 as $key2 => $image38) {
       if ($key2 == $key1) {
        $school_new37->faculties()->attach(faculty::create([
            'name' => $filiére38,
            'img' => $image38
      ])
  );
       }
    }
   }





   
   $school_new38 = School::create([
    'name' => "ECOLE SUPERIEURE D'INGENIEURS D'AFRIQUE CENTRALE",
    'city_id' => 1,
    'localisation' => 'Douala',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier et sur Concours",
    'logo' => 'dddddd37.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres39 as $key1 => $filiére39) {
    foreach ($images39 as $key2 => $image39) {
       if ($key2 == $key1) {
        $school_new38->faculties()->attach(faculty::create([
            'name' => $filiére39,
            'img' => $image39
      ])
  );
       }
    }
   }


   
   $school_new39 = School::create([
    'name' => "ECOLE SUPERIEURE DES SCIENCES ET DES TECHNIQUES",
    'city_id' => 1,
    'localisation' => 'Douala',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier et sur Concours",
    'logo' => 'dddddd38.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres40 as $key1 => $filiére40) {
    foreach ($images40 as $key2 => $image40) {
       if ($key2 == $key1) {
        $school_new39->faculties()->attach(faculty::create([
            'name' => $filiére40,
            'img' => $image40
      ])
  );
       }
    }
   }

   $school_new40 = School::create([
    'name' => "GROUPE NDI SAMBA FORMATION UNIVERSITE DE YAOUNDE SUR Joseph NDI SAMBA",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier",
    'logo' => 'dddddd39.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres41 as $key1 => $filiére41) {
    foreach ($images41 as $key2 => $image41) {
       if ($key2 == $key1) {
        $school_new40->faculties()->attach(faculty::create([
            'name' => $filiére41,
            'img' => $image41
      ])
  );
       }
    }
   }

   $school_new41 = School::create([
    'name' => "INSTITUT SIANTOU SUPERIEURE",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier",
    'logo' => 'dddddd40.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres42 as $key1 => $filiére42) {
    foreach ($images42 as $key2 => $image42) {
       if ($key2 == $key1) {
        $school_new41->faculties()->attach(faculty::create([
            'name' => $filiére42,
            'img' => $image42
      ])
  );
       }
    }
   }


   $school_new42 = School::create([
    'name' => "ECOLE SUPERIEURE SPECIALE D'ARCHITECTURE DU CAMEROUN",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait sur Concours",
    'logo' => 'dddddd41.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres43 as $key1 => $filiére43) {
    foreach ($images43 as $key2 => $image43) {
       if ($key2 == $key1) {
        $school_new42->faculties()->attach(faculty::create([
            'name' => $filiére43,
            'img' => $image43
      ])
  );
       }
    }
   }


   $school_new43 = School::create([
    'name' => "INSTITUT SUPERIEUR DE TECHNOLOGIE SIANTOU",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier",
    'logo' => 'dddddd42.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres44 as $key1 => $filiére44) {
    foreach ($images44 as $key2 => $image44) {
       if ($key2 == $key1) {
        $school_new43->faculties()->attach(faculty::create([
            'name' => $filiére44,
            'img' => $image44
      ])
  );
       }
    }
   }



   $school_new44 = School::create([
    'name' => "INSTITUT SUPERIEUR DE COMMERCE ET DE GESTION SIANTOU",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier",
    'logo' => 'dddddd43.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres45 as $key1 => $filiére45) {
    foreach ($images45 as $key2 => $image45) {
       if ($key2 == $key1) {
        $school_new44->faculties()->attach(faculty::create([
            'name' => $filiére45,
            'img' => $image45
      ])
  );
       }
    }
   }



   $school_new45 = School::create([
    'name' => "ECOLE SUPERIEURE DE COMMERCE ET DE GESTION DES ENTREPRISES",
    'city_id' => 8,
    'localisation' => 'Yaoundé',
    'TypeUniversité'=>"Université privée",
    'description'=>"L'accès a cette Ecole ce fait par Etude de dossier et sur Concours",
    'logo' => 'dddddd44.jpg',
    'langue_formation' => 'Anglais et Francais',
]);
   foreach ($filiéres46 as $key1 => $filiére46) {
    foreach ($images46 as $key2 => $image46) {
       if ($key2 == $key1) {
        $school_new45->faculties()->attach(faculty::create([
            'name' => $filiére46,
            'img' => $image46
      ])
  );
       }
    }
   }
       foreach($series as $serie){
       Serie::create([
        'name' => $serie
       ]);
    }
       foreach($metiers as $metier){
        Metier::create([
         'name' => $metier
        ]);
    }
    }
}