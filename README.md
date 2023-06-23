# gestion_de_parc_informatique
 projet de stage
<a name="br1"></a> 

**développement d’une application web :**

**gestion de parc informatique**

**La province de Taroudant**

**BOULAAJOUL Abdelhamid**

**Mr. EL MOUIM Abdessamad**

**2022/2023**



<a name="br2"></a> 

I. **Remerciements**

Je tiens à exprimer ma profonde gratitude à toutes les personnes qui ont contribué à la réussite

de mon stage dans le secteur informatique de la province de Taroudant, en tant qu'étudiant de la

filière Systèmes et Réseaux Informatiques (SRI) à l'école BTS Al Idrissi.

Tout d'abord, je souhaite adresser mes sincères remerciements à mon encadrant, Mr. EL

MOUIM Abdessamad, pour son accompagnement attentif, sa disponibilité et ses précieux conseils

tout au long de mon stage. Sa connaissance approfondie des systèmes et réseaux informatiques, ainsi

que son expertise dans le secteur, m'ont permis d'acquérir des compétences techniques solides et

d'approfondir ma compréhension du fonctionnement des infrastructures informatiques.

Je tiens également à exprimer ma reconnaissance envers l'équipe pédagogique de la filière

Systèmes et Réseaux Informatiques (SRI) de l'école BTS Al Idrissi. Leurs enseignements de qualité,

leurs efforts continus pour nous préparer au monde professionnel et leur soutien tout au long de mon

stage ont été essentiels pour ma réussite. Leur expertise dans le domaine des systèmes et réseaux

informatiques a été une source d'inspiration et m'a permis de progresser dans ma formation.

Je souhaite également remercier l'ensemble du personnel de l'école BTS Al Idrissi pour leur

dévouement envers les étudiants et leur contribution à notre parcours éducatif. Leur engagement à

fournir un environnement d'apprentissage stimulant et des ressources pédagogiques de qualité a

grandement contribué à mon développement académique et professionnel.

Enfin, j'adresse mes remerciements à ma famille, mes amis et toutes les personnes qui m'ont

soutenu tout au long de ma formation en Systèmes et Réseaux Informatiques (SRI) et pendant mon

stage. Leur soutien inconditionnel, leurs encouragements et leurs conseils avisés ont été essentiels

pour ma motivation et ma réussite dans le secteur informatique de la province.

Mes sincères remerciements vont à tous ceux qui ont joué un rôle dans mon stage et dans ma

formation en Systèmes et Réseaux Informatiques (SRI). Leurs contributions ont été précieuses et ont

renforcé ma passion pour les technologies de l'information et des communications.

Merci à tous !



<a name="br3"></a> 

II.

**Dédicace**

Je tiens à dédier ce rapport à toutes les personnes qui ont contribué à la réussite de mon stage et

à mon parcours au sein de l'entreprise. Leur soutien, leur guidance et leur collaboration ont été

essentiels dans ma croissance professionnelle et personnelle.

Je souhaite exprimer ma reconnaissance envers :

· Mes superviseurs et responsables de stage, pour leur confiance, leurs conseils avisés et

leur disponibilité tout au long de mon expérience. Leur expertise et leur soutien constant

m'ont permis de progresser et d'atteindre mes objectifs.

· Mes collègues, pour leur convivialité, leur encouragement et leur amitié. Leur bonne

humeur et leur camaraderie ont rendu mon séjour au sein de l'entreprise encore plus

agréable et m'ont fait me sentir partie prenante de la famille professionnelle.

· Mes enseignants et mes camarades de classe, pour leur appui et leur compréhension

pendant cette période de stage. Leur soutien moral et académique m'a permis de

combiner théorie et pratique de manière harmonieuse et d'en tirer le meilleur parti.

· Ma famille et mes amis, pour leur soutien inconditionnel, leur encouragement constant et

leurs précieux conseils. Leur amour et leur encouragement ont été une source de

motivation tout au long de mon parcours, et je leur suis reconnaissant(e) pour leur

présence à mes côtés.

Enfin, je tiens à remercier l'entreprise elle-même, pour m'avoir offert cette opportunité de stage

enrichissante. Je suis reconnaissant(e) d'avoir pu faire partie de votre équipe et de contribuer, à mon

humble mesure, à la réalisation de vos objectifs.

Ce rapport est dédié à toutes ces personnes qui ont joué un rôle important dans mon expérience

de stage. Leur soutien indéfectible, leur expertise partagée et leur amitié ont fait de cette expérience

une véritable réussite.



<a name="br4"></a> 

III.

Sommaire

[I](#br2)[.](#br2)[ ](#br2)[Remerciements....................................................................................................................................](#br2)[ ](#br2)[1](#br2)

[II.](#br3)

[IV.](#br6)

[Dédicace](#br3)[ ](#br3)[..........................................................................................................................................](#br3)[ ](#br3)[2](#br3)

[Introduction.....................................................................................................................................](#br6)[ ](#br6)[5](#br6)

[V.](#br7)[ ](#br7)[PRESENTATION](#br7)[ ](#br7)[DE](#br7)[ ](#br7)[L’ORGANISME](#br7)[ ](#br7)[DE](#br7)[ ](#br7)[LA](#br7)[ ](#br7)[PROVINCE](#br7)[...........................................................................](#br7)[ ](#br7)[6](#br7)

[1.](#br7)[ ](#br7)[PRESENTATION](#br7)[ ](#br7)[DE](#br7)[ ](#br7)[LA](#br7)[ ](#br7)[PROVINCE](#br7)[ ](#br7)[DE](#br7)[ ](#br7)[TAROUDANT](#br7)[ ](#br7)[:](#br7)[ ](#br7)[.......................................................................](#br7)[ ](#br7)[6](#br7)

[A.](#br9)[ ](#br9)[Géographie](#br9)[ ](#br9)[:](#br9)[ ](#br9)[................................................................................................................................](#br9)[ ](#br9)[8](#br9)

[B.](#br9)[ ](#br9)[Découpage](#br9)[ ](#br9)[administratif](#br9)[ ](#br9)[:](#br9)[ ](#br9)[...........................................................................................................](#br9)[ ](#br9)[8](#br9)

[2.](#br10)[ ](#br10)[L’ORGANIGRAMME](#br10)[ ](#br10)[DE](#br10)[ ](#br10)[LA](#br10)[ ](#br10)[PROVINCE](#br10)[ ](#br10)[:](#br10)[............................................................................................](#br10)[ ](#br10)[9](#br10)

[A.](#br12)[ ](#br12)[LES](#br12)[ ](#br12)[SERVICESDE](#br12)[ ](#br12)[LA](#br12)[ ](#br12)[PROVINCE](#br12)[ ](#br12)[:.................................................................................................](#br12)[ ](#br12)[11](#br12)

[B.](#br17)[ ](#br17)[Missions](#br17)[ ](#br17)[et](#br17)[ ](#br17)[tâches](#br17)[ ](#br17)[du](#br17)[ ](#br17)[Service](#br17)[ ](#br17)[Informatique](#br17)[ ](#br17)[:](#br17)[ ](#br17)[...........................................................................](#br17)[ ](#br17)[16](#br17)

[VI.](#br18)

[Objectif](#br18)[ ](#br18)[et](#br18)[ ](#br18)[problématique](#br18)[ ](#br18)[du](#br18)[ ](#br18)[stage:](#br18)[ ](#br18)[.............................................................................................](#br18)[ ](#br18)[17](#br18)

[1.](#br18)[ ](#br18)[Problématique...............................................................................................................................](#br18)[ ](#br18)[17](#br18)

[2.](#br19)[ ](#br19)[Objectifs](#br19)[ ](#br19)[:.......................................................................................................................................](#br19)[ ](#br19)[18](#br19)

[3.](#br20)[ ](#br20)[Cahier](#br20)[ ](#br20)[des](#br20)[ ](#br20)[charges](#br20)[ ](#br20)[-](#br20)[ ](#br20)[Gestion](#br20)[ ](#br20)[de](#br20)[ ](#br20)[parc](#br20)[ ](#br20)[informatique](#br20)[ ](#br20)[......................................................................](#br20)[ ](#br20)[19](#br20)

[A.](#br20)[ ](#br20)[Introduction...............................................................................................................................](#br20)[ ](#br20)[19](#br20)

[B.](#br20)[ ](#br20)[Description](#br20)[ ](#br20)[générale](#br20)[ ](#br20)[du](#br20)[ ](#br20)[projet..................................................................................................](#br20)[ ](#br20)[19](#br20)

[C.](#br20)[ ](#br20)[Spécifications](#br20)[ ](#br20)[fonctionnelles.....................................................................................................](#br20)[ ](#br20)[19](#br20)

[D.](#br21)[ ](#br21)[Spécifications](#br21)[ ](#br21)[techniques](#br21)[ ](#br21)[..........................................................................................................](#br21)[ ](#br21)[20](#br21)

[E.](#br22)[ ](#br22)[Contraintes](#br22)[ ](#br22)[et](#br22)[ ](#br22)[exigences](#br22)[ ](#br22)[...........................................................................................................](#br22)[ ](#br22)[21](#br22)

[4.](#br23)[ ](#br23)[Le](#br23)[ ](#br23)[modèle](#br23)[ ](#br23)[MVC](#br23)[ ](#br23)[(Modèle](#br23)[ ](#br23)[Vue](#br23)[ ](#br23)[Contrôleur)](#br23)[ ](#br23)[....................................................................................](#br23)[ ](#br23)[22](#br23)



<a name="br5"></a> 

[VII.](#br24)[ ](#br24)[Technologies](#br24)[ ](#br24)[et](#br24)[ ](#br24)[L’environnement](#br24)[ ](#br24)[du](#br24)[ ](#br24)[développement](#br24)[ ](#br24)[.................................................................](#br24)[ ](#br24)[23](#br24)

[1.](#br24)[ ](#br24)[Les](#br24)[ ](#br24)[technologies](#br24)[ ](#br24)[utilisées](#br24)[ ](#br24)[:](#br24)[ ](#br24)[............................................................................................................](#br24)[ ](#br24)[23](#br24)

[2.](#br25)[ ](#br25)[L’environnement](#br25)[ ](#br25)[du](#br25)[ ](#br25)[développement](#br25)[............................................................................................](#br25)[ ](#br25)[24](#br25)

[VIII.](#br27)

[Réalisation](#br27)[ ](#br27)[de](#br27)[ ](#br27)[l'application........................................................................................................](#br27)[ ](#br27)[26](#br27)

[1.](#br27)[ ](#br27)[Implémentation](#br27)[ ](#br27)[de](#br27)[ ](#br27)[la](#br27)[ ](#br27)[Base](#br27)[ ](#br27)[de](#br27)[ ](#br27)[données](#br27)[ ](#br27)[:......................................................................................](#br27)[ ](#br27)[26](#br27)

[A.](#br28)[ ](#br28)[Génération](#br28)[ ](#br28)[des](#br28)[ ](#br28)[fichiers](#br28)[ ](#br28)[de](#br28)[ ](#br28)[migration](#br28)[ ](#br28)[:......................................................................................](#br28)[ ](#br28)[27](#br28)

[B.](#br28)[ ](#br28)[Définition](#br28)[ ](#br28)[des](#br28)[ ](#br28)[schémas](#br28)[ ](#br28)[de](#br28)[ ](#br28)[table](#br28)[ ](#br28)[:..............................................................................................](#br28)[ ](#br28)[27](#br28)

[C.](#br28)[ ](#br28)[Exécution](#br28)[ ](#br28)[des](#br28)[ ](#br28)[migrations](#br28)[ ](#br28)[:](#br28)[ ](#br28)[........................................................................................................](#br28)[ ](#br28)[27](#br28)

[D.](#br28)[ ](#br28)[Création](#br28)[ ](#br28)[des](#br28)[ ](#br28)[modèles](#br28)[ ](#br28)[:..............................................................................................................](#br28)[ ](#br28)[27](#br28)

[E.](#br28)[ ](#br28)[Création](#br28)[ ](#br28)[des](#br28)[ ](#br28)[factoreries](#br28)[ ](#br28)[:](#br28)[ ](#br28)[..........................................................................................................](#br28)[ ](#br28)[27](#br28)

[F.](#br29)[ ](#br29)[Remplissage](#br29)[ ](#br29)[de](#br29)[ ](#br29)[la](#br29)[ ](#br29)[base](#br29)[ ](#br29)[de](#br29)[ ](#br29)[données](#br29)[ ](#br29)[avec](#br29)[ ](#br29)[des](#br29)[ ](#br29)[données](#br29)[ ](#br29)[de](#br29)[ ](#br29)[test](#br29)[ ](#br29)[:](#br29)[ ](#br29)[..............................................](#br29)[ ](#br29)[28](#br29)

[2.](#br30)[ ](#br30)[Contrôleur](#br30)[ ](#br30)[de](#br30)[ ](#br30)[Matériel](#br30)[ ](#br30)[(MaterielController)](#br30)[ ](#br30)[................................................................................](#br30)[ ](#br30)[29](#br30)

[3.](#br32)[ ](#br32)[Section:](#br32)[ ](#br32)[Récupération](#br32)[ ](#br32)[d'informations](#br32)[ ](#br32)[en](#br32)[ ](#br32)[cascade........................................................................](#br32)[ ](#br32)[31](#br32)

[4.](#br34)[ ](#br34)[Génération](#br34)[ ](#br34)[de](#br34)[ ](#br34)[codes](#br34)[ ](#br34)[QR](#br34)[ ](#br34)[pour](#br34)[ ](#br34)[chaque](#br34)[ ](#br34)[matériel](#br34)[ ](#br34)[:..........................................................................](#br34)[ ](#br34)[33](#br34)

[5.](#br35)[ ](#br35)[Statistiques:](#br35)[ ](#br35)[...................................................................................................................................](#br35)[ ](#br35)[34](#br35)

[6.](#br36)[ ](#br36)[Surveillance](#br36)[ ](#br36)[du](#br36)[ ](#br36)[réseaux:................................................................................................................](#br36)[ ](#br36)[35](#br36)

[7.](#br37)[ ](#br37)[Recherche](#br37)[ ](#br37)[d'équipement](#br37)[ ](#br37)[:](#br37)[ ](#br37)[............................................................................................................](#br37)[ ](#br37)[36](#br37)

[8.](#br38)[ ](#br38)[Vues:](#br38)[ ](#br38)[..............................................................................................................................................](#br38)[ ](#br38)[37](#br38)

[9.](#br39)[ ](#br39)[Vues](#br39)[ ](#br39)[et](#br39)[ ](#br39)[Routage](#br39)[ ](#br39)[:...........................................................................................................................](#br39)[ ](#br39)[39](#br39)

[IX.](#br43)

[Conclusion](#br43)[ ](#br43)[.....................................................................................................................................](#br43)[ ](#br43)[42](#br43)



<a name="br6"></a> 

IV.

**Introduction**

Dans le cadre de ma formation académique et de ma volonté d'acquérir une expérience pratique,

j'ai eu l'opportunité d'effectuer un stage au sein de la province de Taroudant. Je suis ravi de vous

présenter ce rapport, qui met en lumière mon parcours en tant que stagiaire au sein de cette

entreprise.

Permettez-moi de me présenter. Je m'appelle BOULAAJOUL Abdelhamid et je suis

actuellement étudiant en Systèmes et Réseaux Informatiques (SRI) à BTS Al Idrissi. Passionné par le

développement informatique, j'ai choisi d'effectuer ce stage pour approfondir mes connaissances et

développer mes compétences pratiques. Tout au long de cette expérience, j'ai eu l'occasion de

travailler sur des projets stimulants et de collaborer avec une équipe talentueuse.

Le stage s'est déroulé au sein de la province de Taroudant[,](https://fr.wikipedia.org/wiki/Subdivisions_du_Maroc)[ ](https://fr.wikipedia.org/wiki/Subdivisions_du_Maroc)[subdivision](https://fr.wikipedia.org/wiki/Subdivisions_du_Maroc)[ ](https://fr.wikipedia.org/wiki/Subdivisions_du_Maroc)à dominante rurale de la

région marocaine de [Souss-Massa-Draa.](https://fr.wikipedia.org/wiki/Souss-Massa-Dr%C3%A2a)

Lorsque j'ai décidé d'effectuer ce stage, j'avais plusieurs motivations en tête. Tout d'abord, je

souhaitais mettre en pratique les connaissances théoriques acquises au cours de ma formation. Je

considérais ce stage comme une opportunité de consolider mes compétences techniques et de

développer de nouvelles compétences pratiques.

De plus, je désirais découvrir l'environnement professionnel dans mon domaine d'études. Ce

stage m'a permis de comprendre les attentes, les normes et les exigences du milieu professionnel,

tout en m'offrant un aperçu des différentes facettes de l'industrie.

Dans ce rapport, je vous présenterai les principales activités auxquelles j'ai participé, les

compétences que j'ai acquises et les défis que j'ai rencontrés tout au long de mon stage. J'espère que

cette synthèse de mon expérience en tant que stagiaire sera informative et intéressante.



<a name="br7"></a> 

V. **PRESENTATION DE L’ORGANISME DE LA PROVINCE**

**1. PRESENTATION DE LA PROVINCE DE TAROUDANT :**

La province de Taroudant est une [subdivision](https://fr.wikipedia.org/wiki/Subdivisions_du_Maroc)[ ](https://fr.wikipedia.org/wiki/Subdivisions_du_Maroc)à dominante rurale de la

région marocaine de [Souss-Massa-Draa.](https://fr.wikipedia.org/wiki/Souss-Massa-Dr%C3%A2a)[ ](https://fr.wikipedia.org/wiki/Souss-Massa-Dr%C3%A2a)Elle tire son nom de son chef-

lieu, [Taroudant.](https://fr.wikipedia.org/wiki/Taroudant)

La Troisième plus grande province de Souss Massa, avec ses 16 500 Km²,

et composée à 40% de plaines fertiles. Le reste de ses divers reliefs est

constitué de montagnes et de forêts d'arganiers, de chênes verts et de thuyas.

Elle est découpée en 7 communes urbaines et 82 communes rurales.

Sa population de 504 000 habitants est à majorité rurale. Taroudant et

OuledTeima ses deux plus grandes villes. La densité régionale est de 31 habitants par Km².

L'activité économique de cette province se manifeste principalement autour de l'agriculture, du

tourisme et de l'artisanat. En effet, son agriculture est caractérisée par la production d'agrumes,

d'olives, d'huile d'argan, de fourrages, de roses... Parallèlement, une industrie liée à ce type

d'agriculture s'est développée, notamment l'exploitation de stations d'emballage, qui naissent chaque

année dans cette province, permettant le conditionnement de produits (agrumes, primeurs, huiles, jus

d'orange, lait et ses dérivés), afin de les acheminer vers les marchés nationaux et internationaux.

Le tourisme et l'artisanat sont également en croissance, plusieurs projets d'investissement dans

ces secteurs voient le jour. Les remparts couleur cuivre du 16ème siècle, imposant de beauté, au son

de frémissement des palmiers donnent à la cité de Taroudant sa douceur et son charme incomparable.

Les Kasbahs de Taliouine et d'Ighil N'oughou, les paysages magnifiques de Tiout et bien d'autres

trésors

touristiques

font

la

force

de

la

province.

Les autres activités sont liées aux secteurs des mines (argent, manganèse, cobalt...) et de l'artisanat

(tapis, fer forgé...).

La région de Taroudant est l’une des plus grandes régions du Royaume en nombre de

collectivités locales, ce découpage se caractérise par la présence de :



<a name="br8"></a> 

· 8 pachaliks

· 5 cercles

· 18 caïdats

· 89 communautés locales

*Figure 1 : Carte du découpage administratif et communal de la province de Taroudant*

*Figure* 2 *: DRAPEAU DE VILLE DE TAROUDANT*



<a name="br9"></a> 

**A. Géographie :**

**B. Découpage administratif :**

La province de Taroudant est composée de 89 communes, dont 8 sont des municipalités (ou

communes

urbaines) : [Aït](https://fr.wikipedia.org/wiki/A%C3%AFt_Iaaza)

[Iaaza,](https://fr.wikipedia.org/wiki/A%C3%AFt_Iaaza)[ ](https://fr.wikipedia.org/wiki/A%C3%AFt_Iaaza)[Aoulouz,](https://fr.wikipedia.org/wiki/Aoulouz)[ ](https://fr.wikipedia.org/wiki/Aoulouz)[El](https://fr.wikipedia.org/wiki/El_Guerdane)

[Guerdane,](https://fr.wikipedia.org/wiki/El_Guerdane)[ ](https://fr.wikipedia.org/wiki/El_Guerdane)[Irherm,](https://fr.wikipedia.org/wiki/Irherm)[OuladBerhil,](https://fr.wikipedia.org/wiki/Oulad_Berhil)[ ](https://fr.wikipedia.org/wiki/Oulad_Berhil)[OuladTeima,](https://fr.wikipedia.org/wiki/Oulad_Teima)[ ](https://fr.wikipedia.org/wiki/Oulad_Teima)[Taliouine](https://fr.wikipedia.org/wiki/Taliouine)[ ](https://fr.wikipedia.org/wiki/Taliouine)et [Taroudant.](https://fr.wikipedia.org/wiki/Taroudant)

Les 81 communes rurales restantes sont rattachées à 15 caïdats, eux-mêmes rattachés à 5

cercles :

**Cercle d'Irherm :**

· Caïdat d'Ait Abdallah : Sidi Mzal, Ait Abdallah, Tuofelaazt, Tabia et

Toumliline ;

· Caïdat d'Ilmguert : Imaouen, Tindine, Sidi Boaal, Amalou et Tataoute ;

· Caïdat d'Adas : Azaghar N'irs, Tisfane, Nihit, Oualqadi, Imi N'tayart et Adar ;

**Cercle d'Ouled Teima :**

· caïdat d'Argana : [Argana,](https://fr.wikipedia.org/wiki/Argana)[ ](https://fr.wikipedia.org/wiki/Argana)Bigoudine, Talmakante et Imilmaiss ;

· Caïdat d'Ain Chaib : Sidi Boumoussa, Issen, Sidi Ahmed Ou Amar, Lagfilat, Sidi

Moussa Lhamri, Eddir et Ahl Ramel ;

· Caïdat d'Oulad M'hella : Assads, Tidsi-Nissendalene, El Koudia El Beida,

Lakhnafif, Machraa El Ain et Lamhadi ;

**Cercle de Taroudant :**

· Caïdat de Tamaloukte : Tamaloukte, Imoulass, Tafraouten et Ait Makhlouf ;



<a name="br10"></a> 

· Caïdat d'Ahmar : Ahmar Laglalcha, Lamnizla, Zaouia Sidi Tahar et Ida Ou

Moumen ;

· Caïdat de Freija : Sidi Dahmane, Sidi Borja, Freija, Tazemmourt, Bounrar, Tiout,

Sidi Ahmed Ou Abdellah et Ait Igas ;

**Cercle d'Oulad Berhil :**

· caïdat de Sidi Abdellah Ou Moussa : [Arazane,](https://fr.wikipedia.org/wiki/Arazane)[ ](https://fr.wikipedia.org/wiki/Arazane)Toughmart, IgoudarMnabha,

Tinzart et Lamhara ;

· Caïdat d'Igli : Igli, Oulad Aissa, Ida Ou Ghailal et Sidi Abdellah Ou Said ;

· Caïdat de Tafingoult : Talgjount, Tizi N'test, Ouneine, Tafingoult, Sidi Ouaaziz

et Tigouga ;

· Caïdat d'El Faid : Ida-Ougoummad, El Faid, Tisrasse et Ouzioud ;

**Cercle de Taliouine :**

· Caïdat d'Askaouen : Toubkal, Ahl Tifnoute, Iguidi, Taouyalte et Askaouen ;

· Caïdat de Saktana : Azrar, Agadir Melloul, Tizgzaouine, Sidi Hsaine, Tassousfi,

Assaisse, Zagmouzen et Assaki.

**2. L’ORGANIGRAMME DE LA PROVINCE :**

La figure 3 présente l’organigramme type de la province de Taroudant et donne une idée

générale sur la répartition des différentes divisions administratives de la province.



<a name="br11"></a> 

Le gouverneur

Cabinet

Secrétariat Générale

DRH

DAS

DE

DEC DBM

DT

DAR

DCL

DUA

DLA

D.P.A.I

*FIGURE3 : ORGANIGRAMME DE LA PROVINCE DE TAROUDANT*

DPAI : Division Provincial des Affaires

internes

DT : Division Technique

DBM

: Division du Budgets au

DRH : Division des Ressources Humaines

DLA : Division des Liaisons Administrative

Matériels

DEC : Division de l’Etat Civil

DUA

:

Division des d’Urbanisme et

DE

: Division Economique

d’Architecture

DAS : Division des affaires sociales

DCL : Division des Collectivités locales



<a name="br12"></a> 

DAR : Division des Affaires Rurales

**A. LES SERVICESDE LA PROVINCE :**

*a) CABINET :*

*i. Bureau d’ordre :*

Il comprend deux services :

Service de départ : toutes les correspondances sont dirigées soit à la province, soit à d’autres

services extérieurs

Service d’arrivée : toutes les correspondances destinées à la province sont enregistrées et

numérotées au bureau d’ordre.

*ii. Transmission :*

Reçoit et envoi les correspondances urgentes sous forme de message.

*iii. Standard :*

Il assure la combinaison téléphonique soit entre les divisions de la province ou avec l’extérieur.

*b) SECRETARIAT GENERALE*

*i. Division de Collectivités Locales :*

Cette division est organisée comme suit :

Service du personnel communal: Ce service qui s’occupe de la mise en point des lois des cadres

des collectivités locales, du recrutement fonctionnaires et agent relevant des budgets communaux.



<a name="br13"></a> 

Service d ‘exploitation des PV: Ce service est en quelque sorte le trait d’union entre les

collectives locales et les services extérieurs.

Service des finances locales: C’est un service qui procède à la préparation et à la mise en point

du budget communal, de mouvement du budget, l’approbation des marchés et à des inspections.

Service des patrimoines communaux et la police administrative: Il veille sur la gestion du

patrimoine communale et au respect des règles régissant la police administrative.

Service des patrimoines communal et la police administrative : Il veille sur la gestion du

patrimoine communale et au respect des règles régissant la police administrative.

*ii. Division Economique*

Elle comprend 3 services :

*Service du contrôle des prix:* Il est chargé de contrôler les prix des ventes des marchandises et le

respect des lois en vigueur.

*Service économique:* Ce service est chargé de l’établissement de B.E.S (bulletin économique et

social). C’est un document qui reflète les activités des services existants au niveau de la province.

*Service des études économique et de la documentation:* Il est chargé de documentation des

données économiques et sociales dans la province et les études économiques

*iii. Division des Ressources Humaines :*

Cette division se compose :

Service personnel et formation des cadres :

Ce service est chargé de tout ce qui concerne les fonctionnaires au sein

de la province telles que : mutation, discipline, autorisation et avancement et indemnités.



<a name="br14"></a> 

Il s’occupe également de tout ce qui touche la régularisation de la situation du

personnel (congé, promotion, sanction …………etc.)

*iv. Division des Liaisons Administratives :*

Comme son nom l’indique, la division de liaison administrative (D.L.A) joue un rôle de

liaison entre les services extérieurs relevant du commandement de cette province et l’administration

provinciale.

Elle est composée de services :

*Service de transport:* Il concerne la gestion des licences de taxis, autorisation de transport mixte,

transport public de voyageurs, autorisation de transport de marchandises (Handats).

*Service des liaisons:*

. Il comme attributions :

. Transfert des coups

. Légalisation des pièces destinées à l’étranger

. Logement de moniaux

. Ecole privé

. Excursions

*v. Division d’ETAT Civil :*

Les compétences de cette division sont nombreuses, on peut citer :

Les inspections des différents bureaux d’état civil implanté dans le commandement de cette

province.

· Vérification des dossiers de changement de noms de famille.

· Assistance aux officiers d’état civil pour mieux gérer leurs bureaux.

· Elaboration d’un rapport trimestriel en vue de donner la situation exacte de chaque

bureau.



<a name="br15"></a> 

· Il veille également dans le redressement et dans les différentes imperfections constatées

dans ses bureaux.

*vi. Division d’Urbanisme et d’Architecture :*

Cette division récente se rattachait il y a 6 ans au ministère de l’habitat et de l’aménagement

du territoire.

Grâce à la grande importance qu’accorde sa majesté le roi à l’architecture et à l’urbanisme dans

notre pays, il a décidé de la rattacher au ministère de l’intérieure pour une meilleure efficacité de

cette division au sein de toutes les provinces du Royaume.

Elle est chargée de tout ce qui concerne l’urbanisme, les autorisations d’habitat, les

morcellements, les lotissements, et les plans.

*vii. Division Technique :*

L’organisation du secrétariat général de la province de Taroudant comprend une

division technique s’occupant de la tutelle technique de la division centrale au sein du ministère de

l’intérieur, elle gêne l’organisation selon les divisions de l’état.

Cette division a pour but d’étudier et contrôler les projets d’assainissement,

d’alimentation en eau potable et d’électrification rurale.

*viii. Division des Affaires Rurales*

La DAR occupe une place de choix au sein du secrétariat général de la province.

Elle comprend 3 services :

*Service des terres collectives:* Il est chargé de sauvegarder les terres collectives par le

biais : d’immatriculations ou de délimitations, et de suivre les dossiers en cours de

jugement, suivre aussi les litiges entre ayants droit dans les terres collectives et les tiers

entre les tribaux ou les groupements ethniques.



<a name="br16"></a> 

*Service développement rural:* Il est chargé de :

· Suivre les affaires de l’agriculture, et la situation de cheptel dans la province,

(alimentation et sente des animaux).

· Suivre les affaires de réforme agraire, les exploitations agricoles, financement

agricole.

· Suivre les projets de développement rural.

· Suivre la situation météorologique, dossier de création des coopératives agricoles

et association de développement et leurs activités, assurance agricoles.

· Suivre l’exploitation forestière, la gestion de la chasse et la pêche.

· Sauvegarder le patrimoine forestier.

· Suivre la gestion d’eaux, pompage, barrages collinaires.

· Service de l’affaire foncière : Il est chargé de suivre la situation foncière dans la

province : Terres relevant de domaine privé de l’Etat, terres relevant des habousse

location, cession et change immobilière.

*ix.*

*Division des affaires sociales :*

Elle est composée d’un seul service :

Service social : C’est un service chargé du traitement et de suivi des toutes les affaires qui

revêtent un caractère purement social à savoir :

Ø Le domaine de l’enseignement

Ø Le domaine de la santé

Ø Le domaine de l’entraide nationale



<a name="br17"></a> 

*x.*

*Division du Budget et Matériel*

Cette division se compose de 3 services :

*Service du budget général :* Il veille sur la préparation du budget général de la province

Il établit des marchés.

*Service du budget provincial**:*** C’est un service qui est chargé de la préparation et l’exécution du

budget provincial.

*Service des marchés :* Ce service est chargé de tout ce qui concerne le marché provincial.

**B. Missions et tâches du Service Informatique :**

Cerner les différentes opérations nationales dans le cadre du système d'information (statistiques

générales pour la population et du logement)

Les processus nationaux de recrutement dans les élections législatives et communales Suivi

des projets programmés dans les plans de développement

Révision des listes électorales

Suivi de la préparation des budgets collectifs

Créer des cartes et des études sur les projets économiques et sociaux de développement dans

divers groupes locaux

Maintenir le bon fonctionnement du réseau informatique au sein du siège de la province ainsi sur

sites distants connectes.

Installation de l'équipement et l'entretien des systèmes d'information

Coordonner avec le Département d'informatique central du ministère



<a name="br18"></a> 

VI.

**Objectif et problématique du stage:**

**1. Problématique**

Comment collecter efficacement les informations sur les matériels informatiques, y compris les

détails techniques, les dates d'achat, etc. ?

Comment assurer l'exactitude et l'intégrité des données collectées ?

Comment gérer les affectations des matériels aux services de manière efficace et précise ?

Comment éviter les conflits d'affectation et assurer la traçabilité des mouvements des matériels ?

Comment enregistrer et suivre les demandes d'intervention technique pour les matériels

défectueux ou nécessitant une maintenance ?

Comment générer des rapports d'inventaire du parc informatique fournissant une vue d'ensemble

des matériels enregistrés ?

Comment créer des statistiques sur l'état du parc informatique, telles que le nombre de matériels

en panne, les matériels disponibles, etc. ?

Comment optimiser les performances de l'application pour gérer un grand nombre de matériels

et assurer une expérience utilisateur fluide ?

Comment mettre en place une technique de monitoring pour vérifier la connectivité des routeurs

et matériels du parc informatique ?



<a name="br19"></a> 

**2. Objectifs :**

Le but de l’application de gestion de parc informatique :

Accessibilité de l'information : Faciliter l'accès rapide et simple aux informations concernant les

équipements informatiques.

Enregistrement des matériels : Permettre l'enregistrement et la gestion efficace des équipements

achetés.

Optimisation du temps : Réduire le temps nécessaire pour retrouver des informations spécifiques

sur les équipements.

Anticipation des besoins futurs : Utiliser des graphiques et des statistiques pour prévoir et

anticiper les besoins en équipements informatiques.

Utilisation du QR Code : Générer et scanner des QR Codes pour une identification facile des

équipements et un accès rapide aux informations détaillées.

Statistiques et rapports : Collecter des données sur l'utilisation, les performances, les pannes, les

coûts, etc., afin de générer des rapports analytiques et des statistiques pertinentes.

Monitoring en temps réel : Surveiller en temps réel l'état et les performances des équipements

informatiques, et recevoir des alertes en cas de problèmes ou de dépassements de seuils.



<a name="br20"></a> 

**3. Cahier des charges - Gestion de parc informatique**

**A. Introduction**

Présentation du projet : Le projet vise à développer une application de gestion de parc

informatique pour faciliter l'enregistrement, la consultation et la gestion des matériels informatiques

de la province.

Objectifs : L'objectif principal est de fournir un outil centralisé et convivial permettant aux

utilisateurs de gérer efficacement le parc informatique, d'améliorer l'accessibilité des informations et

d'optimiser les processus liés à la gestion des matériels.

**B. Description générale du projet**

Système de gestion de parc informatique : L'application permettra d'enregistrer les matériels

informatiques, de consulter les informations détaillées sur les matériels, de gérer les affectations aux

services, de suivre les interventions techniques et de générer des rapports et des statistiques sur l'état

du parc informatique.

**C. Spécifications fonctionnelles**

Enregistrement des matériels informatiques :

· Saisie des informations : L'application permettra de saisir les informations pertinentes

sur les matériels tels que la marque, le modèle, le numéro de série, la date d'achat, etc.

· Attribution d'un identifiant unique : Chaque matériel sera attribué un identifiant unique

pour faciliter la recherche et le suivi.

Consultation des matériels :

· Recherche et filtrage : Les utilisateurs pourront rechercher et filtrer les matériels en

fonction de différents critères tels que le type, l'état, le service, etc.



<a name="br21"></a> 

· Affichage des informations détaillées : L'application affichera les informations

détaillées sur chaque matériel, y compris son historique d'affectation et d'interventions

techniques.

Gestion des affectations :

· Enregistrement des informations d'affectation : L'application permettra d'enregistrer

les informations relatives à l'affectation d'un matériel à un service.

Génération de rapports et statistiques :

· Statistiques sur l'état du parc informatique : L'application générera des statistiques sur

l'état du parc informatique, notamment le nombre de matériels en panne, les

matériels disponibles, les nombre des matériels dans chaque type, etc.

**D. Spécifications techniques**

Langage de programmation : PHP

Framework : Laravel

Base de données : MySQL

Interface utilisateur : HTML, CSS, JavaScript avec une conception responsive

Outils et technologies supplémentaires :

· Ajax: Utilisation d'Ajax pour les requêtes asynchrones et la mise à jour dynamique des

données.

· Chart.js: une bibliothèque de graphiques pour représenter visuellement les statistiques

et les données du parc informatique.

· Bootstrap: Utilisation du framework CSS Bootstrap pour créer une interface

utilisateur responsive et attrayante.



<a name="br22"></a> 

· JQuery : Utilisation de JQuery pour simplifier les interactions avec le DOM et ajouter

des fonctionnalités interactives.

**E. Contraintes et exigences**

Normes de développement et de sécurité : Le développement de l'application doit suivre les

bonnes pratiques de développement et garantir la sécurité des données.

Compatibilité avec les navigateurs : L'application doit être compatible avec les navigateurs web

couramment utilisés (Chrome, Firefox, Safari, etc.).

Ergonomie et convivialité : L'interface utilisateur doit être intuitive, conviviale et offrir une

expérience utilisateur optimale.

Performances optimales : L'application doit être optimisée pour gérer un grand nombre de

matériels tout en assurant des performances fluides.



<a name="br23"></a> 

**4. Le modèle MVC (Modèle Vue Contrôleur)**

L’architecture MVC : design pattern (oriente objet) : un patron de conception est un concept

destiné à résoudre les problèmes récurrents suivant le paradigme objet (décrivent des solutions

standard pour répondre à des problèmes d’architecture et de conception des logiciels)

Élabore par Trygve Reenskaug en 1979 au Xerox PARC

Repose sur une séparation des concepts (couches)

Modèle – Vue – Contrôleur :

o Modèle : gestion des données et des fonctions pour y accéder Couche de persistance

des données

o Vue : affichage des données : Interfaces avec l'utilisateur

o Contrôleur : synchronisation entre la vue et les données Application, traitements, flux

de données

*Figure 4 : L’architecture MVC*



<a name="br24"></a> 

VII.

**Technologies et L’environnement du développement**

Dans ce chapitre, je vais décrire les étapes de l’implémentation de l’application, en précisant les

choix technologiques et techniques qu’est j’ai choisi. Ensuite je vais présenter les différentes

fonctionnalités offertes par l’application par quelques captures d’écrans des interfaces.

**1. Les technologies utilisées :**

PHP : PHP est un langage de programmation côté serveur largement utilisé dans le

développement web. Il est utilisé dans ce projet pour traiter les requêtes, accéder à la

base de données, gérer la logique métier et générer des pages web dynamiques.

Laravel : Laravel est un framework de développement web basé sur PHP. Il offre une structure

de projet organisée, des fonctionnalités avancées et une productivité accrue. Laravel

est utilisé dans ce projet pour faciliter le développement rapide, la gestion des routes,

l'interfaçage avec la base de données, et l'implémentation de bonnes pratiques de

développement.

MySQL : MySQL est un système de gestion de base de données relationnelle. Il est utilisé dans

ce projet pour stocker les informations relatives aux matériels, aux utilisateurs, aux

affectations, etc. MySQL permet de gérer les opérations de création, de lecture, de

mise à jour et de suppression des données.

HTML, CSS, JavaScript : Ces langages de programmation web sont utilisés pour créer

l'interface utilisateur de l'application. HTML est utilisé pour structurer

le contenu, CSS est utilisé pour le style et la mise en forme, tandis que

JavaScript est utilisé pour ajouter des fonctionnalités interactives et des comportements dynamiques

à l'application.

Ajax : ou Asynchronous JavaScript and XML, est une technologie web utilisée dans ce projet

pour réaliser des requêtes asynchrones entre le navigateur et le serveur. Elle permet



<a name="br25"></a> 

de mettre à jour dynamiquement les données sur une page web sans recharger complètement la page,

offrant une meilleure expérience utilisateur. Cette technologie est utilisée dans ce projet pour des

fonctionnalités telles que la recherche en temps réel, la mise à jour des informations sans

rechargement de la page, l'envoi de demandes de Ping en arrière-plan, etc.

JQuery: jQuery est une bibliothèque JavaScript populaire qui simplifie la manipulation du

DOM, la gestion des événements et les requêtes AJAX. Dans ce projet, jQuery est

utilisé pour faciliter l'interaction avec les éléments de la page, effectuer des requêtes

asynchrones et mettre à jour dynamiquement le contenu.

Chart.js : Chart.js est une bibliothèque JavaScript permettant de créer des graphiques et des

visualisations de données. Elle est utilisée dans ce projet pour générer des graphiques

statistiques et des visualisations des données relatives au parc informatique.

Bootstrap : Bootstrap est un framework CSS qui facilite la création d'une interface utilisateur

réactive et compatible avec différents appareils. Il est utilisé dans ce projet pour

garantir un design et une mise en page cohérents, ainsi qu'une expérience utilisateur

optimale sur tous les dispositifs.

QRCode.js: Cet outil est utilisé pour générer des codes QR uniques pour chaque matériel

enregistré dans le parc informatique. Ces codes QR facilitent l'identification et le

suivi des matériels à l'aide d'un scanner QR.

TCP/IP Monitoring : Cette technique est utilisée pour surveiller la connectivité des routeurs et

des matériels informatiques dans le parc. Elle permet de détecter les éventuels problèmes de

connectivité et d'assurer un suivi en temps réel de l'état des équipements.

**2. L’environnement du développement**



<a name="br26"></a> 

Serveur Web : J'ai utilisé XAMPP, une suite logicielle qui intègre Apache

comme serveur web et MySQL comme système de gestion de base de

données. Cela m'a permis de créer un environnement de développement

local pour exécuter et tester l'application.

Éditeur de Code : J'ai travaillé avec Visual Studio Code, un éditeur de code populaire offrant des

fonctionnalités avancées telles que l'auto complétion, le débogage et l'intégration avec

Git. Visual Studio Code a été mon outil principal pour écrire et modifier le code source

du projet.

Base de données : J'ai utilisé MySQL pour stocker les informations relatives aux matériels, aux

utilisateurs et aux autres données pertinentes. J'ai pu interagir avec la base de données en utilisant

l'interface phpMyAdmin fournie par XAMPP.

Navigateur Web : J'ai principalement utilisé le navigateur Brave pour tester l'application. Brave

est basé sur Chromium et offre une compatibilité étendue avec les normes web

modernes.

Gestion des Dépendances : J'ai utilisé Composer, un gestionnaire de dépendances PHP, pour

gérer les bibliothèques et les packages nécessaires au projet. Cela m'a permis d'installer

et de mettre à jour facilement les composants tiers requis par l'application.

Contrôle de Version : J'ai utilisé GitHub pour héberger le code source du projet, gérer les

versions et collaborer avec d'autres développeurs. Cette plateforme m'a permis de

suivre l'évolution du code, de gérer les demandes de fusion et de coordonner les

contributions.

Outils de Développement : J'ai tiré parti des outils de développement intégrés (DevTools) du

navigateur pour analyser les requêtes, inspecter les éléments de la page, déboguer le code JavaScript,

et optimiser les performances de l'application.

Génération de Données Factices : J'ai utilisé la bibliothèque Faker en PHP pour générer des

données factices réalistes lors des tests de l'application. Cela m'a permis de simuler divers scénarios

et de vérifier le bon fonctionnement de l'application avec des données de test.



<a name="br27"></a> 

VIII. **Réalisation de l'application**

**1. Implémentation de la Base de données :**

Pour mettre en place la base de données de cette application, j'ai suivi une approche structurée

en utilisant le framework Laravel et sa fonctionnalité intégrée, Eloquent ORM. Cette approche suit le

modèle MVC (Modèle-Vue-Contrôleur) pour une meilleure organisation et maintenabilité du code.

*Figure 5 : base de donnée*

Voici comment j'ai procédé :



<a name="br28"></a> 

**A. Génération des fichiers de migration :**

J’ai utilisé la commande artisan `PHP artisan make:migration` pour créer des fichiers de

migration. Par exemple, pour créer la table "matériels", j’ai exécuté la commande `PHP artisan

make:migration create\_materiels\_table --create=materiels`.

**B. Définition des schémas de table :**

Dans chaque fichier de migration, j’ai spécifié la structure de la table en utilisant les méthodes

de schéma fournies par Laravel. Par exemple, pour la table "matériels", j’ai défini les colonnes telles

que "id", "materiel\_type", "marque", etc.

**C. Exécution des migrations :**

J’ai utilisé la commande `PHP artisan migrate` pour exécuter les migrations. Cela a créé les

tables correspondantes dans la base de données en utilisant les schémas définis dans les fichiers de

migration.

**D. Création des modèles :**

J’ai créé des modèles Eloquent pour chaque table de la base de données. Ces modèles

représentent les entités de notre application et permettent d'effectuer des opérations de base de

données de manière orientée objet. Par exemple, pour la table "matériels", j’ai créé un modèle

"matériel" correspondant.

**E. Création des factoreries :**

Les factoreries nous ont permis de générer des données de test pour remplir notre base de

données. J’ai utilisé la commande `PHP artisan make:factory` pour générer des fichiers de factory.

Par exemple, pour la table "matériels", j’ai créé un fichier de factory "materielFactory"

correspondant.



<a name="br29"></a> 

**F. Remplissage de la base de données avec des données de test :**

J’ai utilisé les factoreries et le concept de "seeding" pour remplir notre base de données avec des

données de test. Dans le fichier de classe "DatabaseSeeder", j’ai utilisé les factoreries pour créer des

instances des modèles et les sauvegarder dans la base de données. Par exemple, pour la table

"matériels", j’ai créé des matériels de test pour afficher le dans le projet.

*Figure 6 : Remplissage de la base de données avec des données de test*

L'utilisation de l'approche MVC (Modèle-Vue-Contrôleur) a permis de séparer clairement les

différentes responsabilités de cette application. Les modèles représentent les données et les

opérations de base de données, les migrations gèrent la structure de la base de données, les

factoreries génèrent des données de test et les seeders remplissent la base de données.

Cette approche facilite la maintenance et l'évolution de cette application, en permettant une

meilleure organisation du code et en favorisant la réutilisation des composants.



<a name="br30"></a> 

**2. Contrôleur de Matériel (MaterielController)**

Le Contrôleur de Matériel est une composante clé de cette application. Son rôle principal est de

gérer les différentes actions et tâches liées à la gestion des matériels.

Le Contrôleur de Matériel adopte l'approche du Modèle-Vue-Contrôleur (MVC) pour organiser

et structurer notre application. Le Contrôleur de Matériel communique avec le Modèle de données

pour récupérer les informations relatives aux matériels. Il utilise les méthodes du Modèle pour

effectuer des opérations de création, de modification et de suppression de matériels. Une fois les

données manipulées, le Contrôleur retourne les résultats à la Vue correspondante pour affichage ou

traitement ultérieur.

La conception du Contrôleur de Matériel repose sur plusieurs méthodes qui traitent des actions

spécifiques liées à ce projet. Voici une description des principales méthodes implémentées :

· Méthode "index" : Cette méthode renvoie la vue principale du contrôleur de matériel.

· Méthode "create" : Cette méthode renvoie la vue de création d'un nouveau matériel. Elle

permet à l'utilisateur de remplir un formulaire avec les détails du nouveau matériel à

ajouter.

· Méthode "store" : Cette méthode gère l'enregistrement d'un nouveau matériel dans le

système. Elle reçoit les données du formulaire de création, effectue les validations

nécessaires et enregistre le matériel dans la base de données.

· Méthode "listMateriel" : Cette méthode récupère tous les matériels disponibles dans le

système et les renvoie à la vue de liste des matériels. Elle permet d'afficher une liste

complète de tous les matériels.

· Méthode "edit" : Cette méthode renvoie la vue d'édition d'un matériel spécifique. Elle

récupère les détails du matériel à modifier à partir de son identifiant et les affiche dans

un formulaire pré-rempli.



<a name="br31"></a> 

· Méthode "modify" : Cette méthode gère la mise à jour des informations d'un matériel

existant. Elle reçoit les données modifiées du formulaire d'édition, valide les

changements et met à jour les informations du matériel dans la base de données.

· Méthode "show" : Cette méthode renvoie la vue détaillée d'un matériel spécifique. Elle

récupère les détails du matériel à partir de son identifiant et les affiche de manière

détaillée.

· Méthode "drop" : Cette méthode gère la suppression d'un matériel spécifique du système.

Elle supprime le matériel de la base de données en fonction de son identifiant.

· Méthode "search" : Cette méthode permet de rechercher des matériels spécifiques en

fonction de critères de recherche donnés. Elle renvoie une liste de matériels

correspondant aux critères spécifiés.

· Méthode "Monitoring" : Cette méthode renvoie la vue de monitoring des matériels.

· Méthode "checkPing" : Cette méthode vérifie l'état de connectivité des ports en

effectuant des tests de Ping. Elle renvoie les résultats de ces tests pour évaluer l'état de

chaque matériel.

· Méthode "statistique" : Cette méthode génère des statistiques et des rapports sur les

matériels, tels que le nombre total de matériels par type, nombre total de matériels qui

acheter chaque année, etc. Elle renvoie ces statistiques à la vue de statistique.

En ce qui concerne la logique globale du Contrôleur de Matériel, il suit généralement les étapes

suivantes :



<a name="br32"></a> 

Recevoir une demande

ou une action de la part de

l'utilisateur via la Vue

Valider et traiter les

données reçues, le cas échéant.

Retourner les résultats à

la Vue pour affichage ou

traitement supplémentaire.

Interagir avec le Modèle

de données pour récupérer ou

mettre à jour les informations

nécessaires.

*Figure 7 : fonctionnement d’architecture MVC avec le controller*

À l'approche MVC, cette structure permet une séparation claire des responsabilités et facilite la

maintenance de notre application.

**3. Section: Récupération d'informations en cascade**

Cette approche permet d'envoyer des requêtes au contrôleur de marques et au contrôleur de

modèles pour chaque modification du champ "type de matériel" afin d'obtenir les marques

correspondantes à ce type, ainsi que les modèles correspondants lorsque la marque est modifiée.

Voici une description claire et concise de cette fonctionnalité :

Lorsqu'un utilisateur effectue un changement dans le champ "type de matériel", Ajax envoie

automatiquement une requête au contrôleur de marques avec le type de matériel spécifié. Le

contrôleur de marques traite cette requête et renvoie les marques correspondant à ce type. Les

résultats sont récupérés en arrière-plan et affichés dynamiquement dans la liste des marques, sans

nécessiter de rechargement de la page.



<a name="br33"></a> 

De la même manière, lorsque l'utilisateur modifie la marque, Ajax envoie une nouvelle requête

au contrôleur de modèles, en utilisant la marque sélectionnée comme paramètre. Le contrôleur de

modèles traite cette requête et renvoie les modèles correspondant à cette marque. Les résultats sont

ensuite affichés en temps réel dans la liste des modèles, sans rafraîchissement de la page.

Le contrôleur de marques et le contrôleur de modèles ont chacun une méthode spécifique qui

renvoie les données nécessaires. Ces méthodes sont appelées par Ajax lors de la récupération des

informations en cascade.

L'utilisation d'Ajax pour obtenir les résultats en cascade présente plusieurs avantages importants.

Tout d'abord, cela permet d'optimiser la performance en évitant de charger toutes les marques et

modèles disponibles dès le chargement de la page. Au lieu de cela, seules les données nécessaires

sont récupérées et affichées dynamiquement en fonction des sélections de l'utilisateur.

De plus, cette approche réduit les risques d'erreurs liées à des combinaisons incompatibles de

marques et de modèles. Par exemple, si toutes les marques et tous les modèles étaient affichés dès le

départ, l'utilisateur pourrait sélectionner un modèle qui n'est pas disponible pour une marque

spécifique, entraînant ainsi des problèmes et des erreurs. En utilisant Ajax, seules les marques et

modèles valides et compatibles sont affichés en fonction des sélections précédentes de l'utilisateur,

garantissant ainsi une meilleure expérience utilisateur.

*Figure 8 : exemple d’avoir des marque pour chaque type*



<a name="br34"></a> 

**4. Génération de codes QR pour chaque matériel :**

L'intégration de la génération de codes QR pour

chaque matériel a été réalisée en utilisant la

bibliothèque qrcode.js. Cette bibliothèque permet

de générer des codes QR uniques pour chaque

équipement.

L'implémentation de la bibliothèque qrcode.js a

permis de créer un code QR spécifique pour

chaque article d'équipement. Chaque code QR

contient des informations détaillées sur

*Un QR code générer pour ce matériel avec leur*

l'équipement correspondant, telles que le type, le

numéro de série, la date d'achat, etc.

*information. L’utilisateur peu le télécharger ou*

*l’imprimer pour le coller au matériel*

Les codes QR offrent de nombreux avantages, notamment la possibilité de scanner le code à l'aide

d'un appareil mobile pour obtenir rapidement et facilement des informations détaillées sur

l'équipement. Cela facilite la maintenance, la gestion des stocks et la récupération des informations

pertinentes.

Pour offrir plus de flexibilité aux utilisateurs, une option a été ajoutée pour télécharger ou imprimer

le code QR. De plus, les utilisateurs peuvent choisir la taille du code QR (petite, moyenne, grande)

pour l'adapter à l'équipement correspondant. Cela permet de fixer facilement le code QR à

l'équipement de manière visible et accessible.



<a name="br35"></a> 

**5. Statistiques:**

Pour la génération de statistiques, la bibliothèque

Chart.js a été utilisée pour créer des graphiques et des

visualisations clairs et informatifs.

L'intégration de la bibliothèque Chart.js a permis

de générer différents types de graphiques pour

représenter les données statistiques liées aux

équipements.

Parmi les statistiques spécifiques implémentées,

j’ai utilisé un graphique en ligne pour représenter le

nombre d'équipements enregistrés chaque année. Cela

permet de visualiser les fluctuations et les tendances

au fil du temps.

Un graphique à barres a été utilisé pour

représenter la répartition des équipements par

division. Cela permet d'identifier les divisions qui ont

le plus d'équipements ou de repérer les écarts entre

les différentes divisions.

Un graphique en forme de beignet (doughnut) a

été utilisé pour représenter la répartition des

équipements par type. Cela permet de visualiser la

*Les statistiques dans l’application*

proportion d'équipements dans chaque catégorie et d'identifier les types d'équipements les plus

courants.

Un graphique en forme de secteur polaire (polarArea) a été utilisé pour représenter la répartition

des équipements par état. Cela permet d'obtenir une vue globale de l'état des équipements et de

prendre des décisions éclairées en fonction de leur situation.



<a name="br36"></a> 

La visualisation des données à l'aide de graphiques présente de nombreux avantages. Elle facilite

la compréhension des tendances, des relations et des modèles au sein des données. Les graphiques

permettent également de communiquer efficacement les informations statistiques, ce qui facilite la

prise de décision éclairée.

**6. Surveillance du réseaux:**

La surveillance du réseau a été implémentée afin de

garantir une connectivité stable et de détecter tout

problème éventuel. AJAX a été utilisé pour permettre la

surveillance en temps réel.

La mise en œuvre de la surveillance du réseau en

utilisant AJAX a permis d'effectuer des pings périodiques

sur les ports des équipements et de mettre à jour les

résultats en temps réel.

La fonctionnalité de surveillance du réseau repose

sur la fonction "checkPing" de la classe

"MaterielController".

Cette

fonction

utilise

la

bibliothèque "exec" pour exécuter la commande de Ping

sur l'adresse IP ou le nom d'hôte fourni en paramètre.

Cette méthode effectue un Ping unique sur l'adresse

IP ou le nom d'hôte spécifié. Si le Ping est réussi, la

méthode renvoie une réponse JSON avec un statut "true".

Sinon, elle renvoie une réponse JSON avec un statut

"false".

*Chaque port a fait une commande Ping a*

*l’adresse IP et afficher le résultat si un port*

*et connecter le routeur aussi connecter*

Pour refléter l'état de connectivité de chaque équipement, des indicateurs visuels ont été mis en

place. Chaque port est représenté par une div à l'intérieur de laquelle se trouve une autre div affichant

son état (rouge ou vert). De la même manière, chaque équipement dispose d'une div qui affiche son



<a name="br37"></a> 

état global en fonction de la connectivité de ses ports. Si tous les ports sont déconnectés,

l'équipement sera en rouge, tandis que s'il y a au moins un port connecté, l'équipement sera en vert.

**7. Recherche d'équipement :**

La fonctionnalité de recherche d'équipement a été mise en place pour permettre des recherches

spécifiques dans la vue de liste. AJAX a été utilisé pour permettre une recherche dynamique sans

recharger la page.

Pour activer la recherche spécifique

d'équipement, AJAX a été intégré. Lorsqu'un

utilisateur saisit des critères de recherche dans la

vue de liste, une requête AJAX est envoyée au

serveur

pour

récupérer

les

résultats

correspondants.

La fonctionnalité de recherche prend en

compte différents critères tels que le nom de

l'équipement, le type d'équipement, la marque, le

modèle, etc. Les résultats de la recherche sont

affichés de manière dynamique sans recharger la

page entière. Cela permet à l'utilisateur de voir les

résultats de la recherche en temps réel et de

*Dans cette exemple nous rechercheront sur un*

*matériel dans le service DCL avec 16 GB de ram ou*

*de stockage.*

modifier ses critères de recherche si nécessaire.

En utilisant AJAX, la recherche d'équipement devient plus fluide et efficace. Les résultats sont

mis à jour en temps réel à mesure que l'utilisateur saisit ses critères de recherche, ce qui lui permet de

trouver rapidement les équipements correspondants sans avoir à recharger la page.

En résumé, la fonctionnalité de recherche d'équipement utilise AJAX pour effectuer des

recherches spécifiques dans la vue de liste. Les résultats de la recherche sont mis à jour en temps

réel, offrant à l'utilisateur une expérience de recherche fluide et efficace.



<a name="br38"></a> 

**8. Vues:**

Les vues jouent un rôle essentiel dans l'architecture MVC de l'application. Elles sont

responsables de l'affichage des données et de l'interaction avec les utilisateurs. Les vues sont créées

en utilisant le moteur de Template Blade de Laravel, ce qui permet de séparer la logique de

présentation du reste de l'application.

Voici un aperçu des différentes vues créées pour l'application :

. Layout (Mise en page) : La vue de mise en page principale (layout) définit le modèle de

base de l'application. Elle inclut des éléments communs tels que l'en-tête, la barre

latérale, etc. Cette vue est étendue par d'autres vues pour hériter de la structure de base.

. Bouton Retour : Une vue spécifique a été créée pour afficher le bouton de retour dans les

vues où il est nécessaire, comme la création et la liste d'équipements. Cette vue est

incluse dans d'autres vues à l'aide de la syntaxe Blade "@include" pour fournir une

fonctionnalité de retour cohérente.

Les vues utilisent la syntaxe Blade pour améliorer l'expérience de développement et de lecture

du code. Les directives Blade telles que "@section", "@extend", "@yield" et "@include" sont

utilisées pour organiser le contenu et faciliter la réutilisation du code.

Dans chaque vue, des choix de conception spécifiques ont été faits pour améliorer l'utilisabilité

et l'expérience utilisateur. Par exemple, des alertes et des messages sont affichés pour indiquer les

succès ou les champs obligatoires manquants. De plus, la pagination est implémentée à l'aide de la

méthode "links()" pour faciliter la navigation entre les pages de résultats. En outre, la nouvelle

fonctionnalité HTML "dialogue" est utilisée pour afficher le code QR, offrant ainsi une expérience

utilisateur interactive.

L'utilisation du moteur de Template Blade présente plusieurs avantages. Il permet une séparation

claire entre la logique de présentation et la logique métier de l'application. De plus, Blade offre des

fonctionnalités telles que l'héritage de mise en page, les directives conditionnelles et itératives, ainsi

que la possibilité de créer des composants réutilisables, ce qui facilite le développement et la

maintenance du code.



<a name="br39"></a> 

Botton pour créer des

nouveaux matériels

Le nombre

total pour

chaque type

dans le parc

Navigations

Les bottons de

voir et modifier

et supprimer

Le materiel

Links pour faire la

pagination pour

voir 20 matériel

pour chaque page



<a name="br40"></a> 

Voir le matériel avec le qi code et les ports

Modifier le matériel

Créer un nouveau matériel



<a name="br41"></a> 

**9. Vues et Routage :**

Les vues et le routage sont des éléments essentiels de toute application web. Ils définissent la

structure et le fonctionnement des pages accessibles aux utilisateurs. Voici comment ces aspects ont

été pris en compte dans notre application :

Structuration des routes : Les routes de l'application sont définies dans le fichier web.php. Elles

sont enregistrées à l'aide de la classe Route de Laravel. Chaque route est associée à une URL et à un

contrôleur spécifique qui gère la logique de cette route. Par exemple, la route '/' est associée au

contrôleur MaterielController pour afficher la liste des équipements.

Routes de ressources : Les routes de ressources sont utilisées pour générer automatiquement les

routes CRUD (Create, Read, Update, Delete) pour un contrôleur donné. Dans notre application, les

routes de ressources sont définies pour les contrôleurs MaterielController et PortController.

Paramètres de route : Certaines routes utilisent des paramètres pour passer des valeurs

spécifiques. Par exemple, la route '/materiel/{materielid}/modify' utilise le paramètre 'materielid'

pour identifier l'équipement à modifier. Ces paramètres sont ensuite accessibles dans les méthodes

des contrôleurs correspondants.

Middleware : Le middleware est utilisé pour appliquer des filtres ou des contrôles avant ou après

l'exécution d'une route. Dans notre application, le groupe de middleware 'web' est assigné à toutes les

routes, ce qui permet d'appliquer les fonctionnalités communes à toutes les requêtes web.

Le fichier web.php :

Route::resource('/', MaterielController::class);

Route::resource('dashboard', MaterielController::class);

Route::resource('Materiel', MaterielController::class);

Route::resource('PortController', PortController::class);

Route::put('/materiel/{materielid}/modify', [MaterielController::class,'modify'])-

\>name('materiel.modify');

Route::get('/checkPing', [MaterielController::class, 'checkPing'])-

\>name('/checkPing');

Route::get('/monitoring', [MaterielController::class, 'Monitoring'])-

\>name('monitoring');



<a name="br42"></a> 

Route::get('/listMateriel', [MaterielController::class, 'listMateriel'])-

\>name('listMateriel');

Route::post('/search', [MaterielController::class, 'search'])-

\>name('materiel.search');

Route::get('/statistique', [MaterielController::class, 'statistique'])-

\>name('statistique');

Route::get('/marques', [MarqueController::class, 'getMarquesByMaterielType']);

Route::get('/modeles', [ModèleController::class, 'getModelesByMarque']);

Route::delete('/port/{portID}/drop', [PortController::class, 'drop'])-

\>name('port.drop');

Route::get('/materiel/drop/{ID}', [MaterielController::class, 'drop'])-

\>name('materiel.drop');

Le code a des fautes d’orthographe car dans la phase de développement il est difficile pour le

correcte.



<a name="br43"></a> 

IX.

**Conclusion**

En conclusion, mon stage dans la province de Taroudant a été une expérience enrichissante où

j'ai eu l'opportunité de créer une application de gestion de parc informatique. Cette application a été

conçue dans le but de faciliter la surveillance et la gestion des équipements informatiques au sein de

l'organisation.

Durant mon stage, j'ai pu mettre en pratique mes connaissances et compétences en

développement logiciel, en utilisant les technologies modernes pour concevoir une application

fonctionnelle et intuitive. J'ai également été en mesure de comprendre les besoins spécifiques de

l'organisation en termes de gestion de parc informatique, ce qui m'a permis de développer des

fonctionnalités adaptées à ses besoins.

Ce stage m'a permis d'acquérir de nouvelles compétences techniques, notamment dans le

domaine du développement d'applications web et de la gestion de bases de données. J'ai également

développé des compétences en communication et en travail d'équipe.

En conclusion, ce stage m'a offert l'occasion d'appliquer mes connaissances théoriques à un

projet concret, tout en développant de nouvelles compétences. J'ai pu constater l'impact positif de

mon travail sur l'organisation en améliorant la gestion de son parc informatique. Je suis reconnaissant

d'avoir eu cette opportunité et je suis convaincu que cette expérience me sera bénéfique dans ma

carrière professionnelle future.



<a name="br44"></a> 

X. **Webographie :**

Le projet sur GitHub pour voir le code:

Ø <https://github.com/ABDALHAMID/gestion_de_parc_informatique>

Qrcode.js : <https://www.npmjs.com/package/qrcode>

