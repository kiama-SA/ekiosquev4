<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>

    <!-- Assets -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Main css files -->
    <link rel="stylesheet" href="css/styleHeader.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/styleEntete.css">
    <link rel="stylesheet" href="css/styleContent.css">
    <link rel="stylesheet" href="css/styleAsideLeft.css">
    <link rel="stylesheet" href="css/styleLatestNewspapers.css">
    <link rel="stylesheet" href="css/styleLatestArticles.css">
    <link rel="stylesheet" href="css/styleModals.css">

    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</head>

<body>

    <!-- Side-Nav -->
    <div class="side-navbar d-flex justify-content-start flex-wrap flex-column pt-5 " id="sidebar">

        <ul class="nav flex-column text-white w-100 pt-3">

            <a href="index.php" class="nav-link">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span class="mx-2">connexion/Inscription</span>
            </a>
            <a href="index.php" class="nav-link">
                <i class="fa-solid fa-house"></i>
                <span class="mx-2">Accueil</span>
            </a>
            <a href="reseauKiosk.php" class="nav-link">
                <i class="fa-solid fa-book-open-reader"></i>
                <span class="mx-2">Réseau Kiosk</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fa-solid fa-gift"></i>
                <span class="mx-2">bibliothèque</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fa-solid fa-gift"></i>
                <span class="mx-2">Nos offres</span>
            </a>
            <a href="notifications.php" class="nav-link">
                <i class="fa-solid fa-bell"></i>
                <span class="mx-2">notifications</span>
            </a>
            <a href="#" class="nav-link">
                <i class="fa-solid fa-circle-user"></i>
                <span class="mx-2">Mon Compte</span>
            </a>
        </ul>
        <div id="contact" class="d-flex flex-column align-items-center justify-content-center">
            <div>
                Contactez nous au
                <span>697 81 25 15 (Whatsapp)</span>

            </div>

        </div>

    </div>

    <!--main Container-->
    <div class=" my-container ">
        <!--Bloc principal contenant toute la page-->

        <div id="topBar">
            <!-- show menu icon -->
            <div class="show-menu" id="menu-btn1">
                <img src="img/show-apps-button_2.svg" width="32px" height="36px">
            </div>

            <!--large screen header -->
            <div class="container-fluid bg-white">
                <div class="container">
                    <header class="container-fluid" id="header-lg">
                        <a href="index.php" id="logo" class="d-flex align-items-center">
                            <img src="img/ekiosque-presse-numerique-cameroun-afrique.png"
                                alt="ekiosque-presse-numerique-cameroun-afrique" width="100%">
                        </a>
                        <div id="search">
                            <form>
                                <div class="d-flex">
                                    <input type="text" name="" id="" placeholder="rechercher un editeur">
                                    <button> <i class="fas fa-search"></i></button>

                                </div>
                            </form>
                        </div>

                        <div id="icones">
                            <a href="index.php" class="d-flex flex-column justify-content-center  menu-item">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-house"></i>
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    <span class="menu-text">Accueil</span>
                                </div>

                            </a>
                            <a href="#" class="d-flex flex-column justify-content-center menu-item">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-users"></i>

                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    reseau kiosk
                                </div>
                            </a>
                            <a href="#" class="d-flex flex-column justify-content-center menu-item ">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    bibliothèque
                                </div>

                            </a>
                            <a href="#" class="d-flex flex-column justify-content-center menu-item">
                                <div class="d-flex align-items-end justify-content-center">

                                    <i class="fa-solid fa-gift"></i>
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    Nos offres
                                </div>

                            </a>
                            <a href="notifications.php" class="d-flex flex-column justify-content-center menu-item">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-bell"></i>
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    notifications
                                </div>

                            </a>
                            <a href="#" class="d-flex flex-column justify-content-center menu-item">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>

                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    Mon Compte
                                </div>

                            </a>
                        </div>
                    </header>
                </div>

                <!--medium screen header -->
                <div class="container">

                    <header class="container-fluid" id="header-md">

                        <a href="index.php" class="d-flex align-items-center">
                            <img src="img/ekiosque-presse-numerique-cameroun-afrique.png" width="120px"
                                alt="ekiosque-presse-numerique-cameroun-afrique">
                        </a>


                        <div id="search">
                            <form>
                                <div class="d-flex">
                                    <input type="text" name="" id="" placeholder="rechercher un editeur">
                                    <button> <i class="fas fa-search"></i></button>

                                </div>
                            </form>

                        </div>

                        <div id="icones">
                            <a href="#" class="d-flex flex-column justify-content-center menu-item ">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    bibliothèque
                                </div>

                            </a>
                            <a href="#" class="d-flex flex-column justify-content-center menu-item ">
                                <div class="d-flex align-items-end justify-content-center">
                                    <i class="fa-solid fa-gift"></i>
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    Nos offres
                                </div>

                            </a>

                        </div>


                    </header>
                </div>

                <!--small screen header -->
                <div class="container-fluid">

                    <header class="container-fluid" id="header-sm">


                        <div class="d-flex align-items-center" id="logo">
                            <a href="index.php" class="d-flex flex-column justify-content-center  menu-item">
                                <div class="d-flex align-items-end justify-content-center">
                                    <img src="img/logo-ekiosque-mobile.png"
                                        alt="ekiosque-presse-numerique-cameroun-afrique" width="42px">
                                </div>
                                <div class="d-flex align-items-end justify-content-center mt-1">
                                    <span class="menu-text"><b>ekiosque</b></span>
                                </div>

                            </a>

                        </div>

                        <div id="search">
                            <form>
                                <div class="d-flex">
                                    <input type="text" name="" id="" placeholder="rechercher un editeur">
                                    <button> <i class="fas fa-search"></i></button>

                                </div>
                            </form>

                        </div>

                    </header>
                </div>


            </div>

        </div>

        <div class="container" id="lg-container">

            <div id="entete" class="ui-block">
                <div id="cover-photo">
                    
                    

                </div>
                <div id="profil-photo">
                    

                </div>
                <div id="info" class="d-flex justify-content-between">
                    <div id="profil-info">
                        <span class="title">Cameroun Tribune</span><br> <span class="sub-title">editeur</span>
                    </div>
                    <div id="stat-btn" class="stat-btn">
                        <a href="#"  class="stat-btn d-flex justify-content-center align-items-center">
                            <button>
                                Je m'abonne
                            </button>
                        </a>
                    </div>
                </div>
                <div id="nav">
                    <ul>
                        <li ><a href="index.php">Accueil</a></li>
                        <li class="active"><a href="#">A Propos</a></li>
                        <li><a href="archives.php">Archives</a></li>
                        
                    </ul>

                </div>
            </div>

            <div id="content" class="d-flex ">
                <div id="aside-left" class="col-md-3 ">
                    <div id="about" class="ui-block">
                        <div class="aside-title">
                            <iconify-icon icon="clarity:help-info-solid"></iconify-icon> A Propos de la page
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Description</div>
                            <div class="aside-text">
                                Le Cameroon Tribune est un quotidien généraliste camerounais
                                créé par le gouvernement en
                                1974.
                            </div>
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Catégorie</div>
                            <div class="aside-text">
                                Editeur
                            </div>
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Téléphone</div>
                            <div class="aside-text">
                                +237 66666666
                            </div>
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Email</div>
                            <div class="aside-text">
                                camerountribune@gmailcom
                            </div>
                        </div>
                        <div class="aside-block">
                            <button>Je m'abonne</button>
                        </div>

                    </div>

                   

                </div>
                <div id="main-content" class="col-md-9 col-lg-6">
                    <div class="aProposText ui-block">
                        <h6><b>Cameroon Tribune, achetez votre journal en PDF et abonnez-vous maintenant !
                            </b></h6>
                        Cameroon Tribune, votre journal. Tout savoir sur l’actualité politique, économique,
                        socio-culturelle et internationale uniquement dans Cameroon Tribune. Le quotidien national
                        bilingue Cameroon Tribune paraît chaque matin dès 04 heures sur www.ekiosque.cm sauf les
                        week-ends. Abonne-toi pour lire chaque numéro de ce journal sur ton smartphone, ta tablette, ou
                        ton ordinateur portable et ceci dans n’importe quel pays
                
                    </div>
                    <div class="aProposText ui-block">
                        <h6><b>Cameroon Tribune, quotidien bilingue d’information au Cameroun
                            </b></h6>
                        Quotidien du genre généraliste, Cameroon Tribune s’est engagé à publier l’information fiable et
                        de source légale du Cameroun en particulier et du monde en général à ses lecteurs. Publier la
                        bonne information, informer la population et décrypter l’opinion publique sont là de nombreuse
                        qualité de Cameroon Tribune. Ce journal est une édition de la Société de Presse et d’Editions du
                        Cameroun en abrégé SOPECAM, elle possède des articles en français et en anglais. Votre quotidien
                        national est disponible dans toute les agences SOPECAM (Garoua, Maroua, Bamenda, Buea, Douala,
                        Dschang, Bafoussam, …)
                        et points de vente Messapresse mais bien évidemment en version numérique sur www.ekiosque.cm
                
                    </div>
                    <div class="aProposText ui-block">
                        <h6><b>Toute l’actualité national et international au Cameroun
                
                            </b></h6>
                        Le Quotidien Cameroon Tribune, l’information continue du Cameroun dans
                        tous les domaines ! quelque soit le domaine d’activité économique ou
                        professionnel, politique ou social, l’éditeur se veut plus proche de
                        la population et du gouvernement. Le Cameroon Tribune est un quotidien généraliste camerounais
                        créé par le gouvernement en 1974. Ce journal est longtemps resté le seul journal autorisé au
                        Cameroun. À l\\\'origine, il était publié en deux versions, une version francophone et une
                        version anglophone. Néanmoins, les méventes l\\\'ont obligé au milieu des années 1980 à
                        fusionner les deux versions. Retrouvez dans le journal toute l’actualité politique, économique,
                        sociale… du Cameroun ; des partis politiques tel que le RDPC, le SDF, le MRC, le parti UNIVERS,
                        l’ UNDP,… et bien d’autres mais aussi des personnalité qui font régulièrement sa une comme
                        l’ambassadeur de France au Cameroun GILLES THIBAUT, CHRISTINE LAGARDE, le Pape FRANCOIS, PAUL
                        BIYA, Lejeune MBELLA MBELLA, et sans oublié les grands sommets qu’organise le Cameroun à savoir
                        le sommet France-AFRIQUE, CAMEROUN-OIF, CAN total 2019. Avec Cameroon Tribune ne rater plus
                        aucune information du Cameroun, la vrai, la fiable, et la plus importante !
                
                
                    </div>
                </div>
                <div id="aside-right" class="col-md-3 ">
                    <div id="latest-posts" class="ui-block">
                        <div class="aside-title">
                            <i></i>Les derniers articles
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                    </div>

                    <div id="pub" class="ui-block">

                    </div>

                </div>
            </div>

        </div>

        <div class="container" id="md-container">

            <div id="entete" class="ui-block">
                <div id="cover-photo">
                    
                </div>
                <div id="profil-photo">
                    
                </div>
                <div id="info" class="d-flex justify-content-between">
                    <div id="profil-info">
                        <span class="title">Cameroun Tribune</span><br> <span class="sub-title">editeur</span>
                    </div>
                    <div id="stat-btn" class="stat-btn">
                        <a href="#"  class="stat-btn d-flex justify-content-center align-items-center">
                            <button >
                                Je m'abonne
                            </button>
                        </a>
                    </div>
                </div>
                <div id="nav">
                    <ul>
                        <li ><a href="index.php">Accueil</a></li>
                        <li class="active"><a href="#">A Propos</a></li>
                        <li><a href="archives.php">Archives</a></li>
                        
                    </ul>

                </div>
            </div>

            <div id="content" class="d-flex ">

                <div id="main-content" class="col-12">
                    <div class="aProposText ui-block">
                        <h6><b>Cameroon Tribune, achetez votre journal en PDF et abonnez-vous maintenant !
                            </b></h6>
                        Cameroon Tribune, votre journal. Tout savoir sur l’actualité politique, économique,
                        socio-culturelle et internationale uniquement dans Cameroon Tribune. Le quotidien national
                        bilingue Cameroon Tribune paraît chaque matin dès 04 heures sur www.ekiosque.cm sauf les
                        week-ends. Abonne-toi pour lire chaque numéro de ce journal sur ton smartphone, ta tablette, ou
                        ton ordinateur portable et ceci dans n’importe quel pays
                
                    </div>
                    <div class="aProposText ui-block">
                        <h6><b>Cameroon Tribune, quotidien bilingue d’information au Cameroun
                            </b></h6>
                        Quotidien du genre généraliste, Cameroon Tribune s’est engagé à publier l’information fiable et
                        de source légale du Cameroun en particulier et du monde en général à ses lecteurs. Publier la
                        bonne information, informer la population et décrypter l’opinion publique sont là de nombreuse
                        qualité de Cameroon Tribune. Ce journal est une édition de la Société de Presse et d’Editions du
                        Cameroun en abrégé SOPECAM, elle possède des articles en français et en anglais. Votre quotidien
                        national est disponible dans toute les agences SOPECAM (Garoua, Maroua, Bamenda, Buea, Douala,
                        Dschang, Bafoussam, …)
                        et points de vente Messapresse mais bien évidemment en version numérique sur www.ekiosque.cm
                
                    </div>
                    <div class="aProposText ui-block">
                        <h6><b>Toute l’actualité national et international au Cameroun
                
                            </b></h6>
                        Le Quotidien Cameroon Tribune, l’information continue du Cameroun dans
                        tous les domaines ! quelque soit le domaine d’activité économique ou
                        professionnel, politique ou social, l’éditeur se veut plus proche de
                        la population et du gouvernement. Le Cameroon Tribune est un quotidien généraliste camerounais
                        créé par le gouvernement en 1974. Ce journal est longtemps resté le seul journal autorisé au
                        Cameroun. À l\\\'origine, il était publié en deux versions, une version francophone et une
                        version anglophone. Néanmoins, les méventes l\\\'ont obligé au milieu des années 1980 à
                        fusionner les deux versions. Retrouvez dans le journal toute l’actualité politique, économique,
                        sociale… du Cameroun ; des partis politiques tel que le RDPC, le SDF, le MRC, le parti UNIVERS,
                        l’ UNDP,… et bien d’autres mais aussi des personnalité qui font régulièrement sa une comme
                        l’ambassadeur de France au Cameroun GILLES THIBAUT, CHRISTINE LAGARDE, le Pape FRANCOIS, PAUL
                        BIYA, Lejeune MBELLA MBELLA, et sans oublié les grands sommets qu’organise le Cameroun à savoir
                        le sommet France-AFRIQUE, CAMEROUN-OIF, CAN total 2019. Avec Cameroon Tribune ne rater plus
                        aucune information du Cameroun, la vrai, la fiable, et la plus importante !
                
                
                    </div>
                </div>
                <div class="row">
                    <div id="aside-left" class="col-6 ">
                        <div id="about" class="ui-block">
                            <div class="aside-title">
                                <iconify-icon icon="clarity:help-info-solid"></iconify-icon> A Propos de la page
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Description</div>
                                <div class="aside-text">
                                    Le Cameroon Tribune est un quotidien généraliste camerounais
                                    créé par le gouvernement en
                                    1974.
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Catégorie</div>
                                <div class="aside-text">
                                    Editeur
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Téléphone</div>
                                <div class="aside-text">
                                    +237 66666666
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Email</div>
                                <div class="aside-text">
                                    camerountribune@gmailcom
                                </div>
                            </div>
                            <div class="aside-block">
                                <button>Je m'abonne</button>
                            </div>

                        </div>

                        <!-- <div id="stats" class="ui-block">
                            <div class="aside-title">
                                <iconify-icon icon="ion:stats-chart"></iconify-icon>Statistiques
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Montant disponible</div>
                                <div class="aside-amount">
                                    50 000 FCFA
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Nombre d'abonnés</div>
                                <div class="aside-amount">
                                    250
                                </div>
                            </div>
                            <div class="aside-block">
                                <button>Tout voir</button>
                            </div>
                        </div> -->

                    </div>
                    <div id="aside-right" class="col-6 ">
                        <div id="latest-posts" class="ui-block">
                            <div class="aside-title">
                                <i></i>Les derniers articles
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                        </div>

                        <!-- <div id="pub" class="ui-block">
        
                        </div> -->

                    </div>
                </div>
                <div class="row">
                    <div id="aside-left" class="col-6 ">
                        <!-- <div id="about" class="ui-block">
                            <div class="aside-title">
                                <iconify-icon icon="clarity:help-info-solid"></iconify-icon> A Propos de la page
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Description</div>
                                <div class="aside-text">
                                    Le Cameroon Tribune est un quotidien généraliste camerounais
                                    créé par le gouvernement en
                                    1974.
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Catégorie</div>
                                <div class="aside-text">
                                    Editeur
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Téléphone</div>
                                <div class="aside-text">
                                    +237 66666666
                                </div>
                            </div>
                            <div class="aside-block">
                                <div class="aside-subtitle">Email</div>
                                <div class="aside-text">
                                    camerountribune@gmailcom
                                </div>
                            </div>
                            <div class="aside-block">
                                <button>Je m'abonne</button>
                            </div>
        
                        </div> -->

                       

                    </div>
                    <div id="aside-right" class="col-6 ">
                        <!-- <div id="latest-posts" class="ui-block">
                            <div class="aside-title">
                                <i></i>Les derniers articles
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                            <div class="aside-block d-flex">
                                <div class="post-img"></div>
                                <div class="aside-text">
                                    La coupe du monde quatar 2022...
                                </div>
                            </div>
                        </div> -->

                        <div id="pub" class="ui-block">

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="container" id="sm-container">

            <div id="entete" class="ui-block">
                <div id="cover-photo">
                    
                </div>
                <div id="profil-photo">
                    
                </div>
                <div id="info" class="d-flex justify-content-between">
                    <div id="profil-info">
                        <span class="title">Cameroun Tribune</span><br> <span class="sub-title">editeur</span>
                    </div>
                    <div id="stat-btn" class="stat-btn">
                        <a href="#"  class="stat-btn d-flex justify-content-center align-items-center">
                            <button >
                                Je m'abonne
                            </button>
                        </a>
                    </div>
                </div>
                <div id="nav">
                    <ul>
                        <li ><a href="index.php">Accueil</a></li>
                        <li><a  href="archives.php">Archives</a></li>
                        <li class="active"><a id="about-link" href="#">A Propos</a></li>
                        

                    </ul>

                </div>
            </div>

            <div id="content" class="d-flex ">

                <div id="main-content" class="col-12">
                    <div class="aProposText ui-block">
                        <h6><b>Cameroon Tribune, achetez votre journal en PDF et abonnez-vous maintenant !
                            </b></h6>
                        Cameroon Tribune, votre journal. Tout savoir sur l’actualité politique, économique,
                        socio-culturelle et internationale uniquement dans Cameroon Tribune. Le quotidien national
                        bilingue Cameroon Tribune paraît chaque matin dès 04 heures sur www.ekiosque.cm sauf les
                        week-ends. Abonne-toi pour lire chaque numéro de ce journal sur ton smartphone, ta tablette, ou
                        ton ordinateur portable et ceci dans n’importe quel pays
                
                    </div>
                    <div class="aProposText ui-block">
                        <h6><b>Cameroon Tribune, quotidien bilingue d’information au Cameroun
                            </b></h6>
                        Quotidien du genre généraliste, Cameroon Tribune s’est engagé à publier l’information fiable et
                        de source légale du Cameroun en particulier et du monde en général à ses lecteurs. Publier la
                        bonne information, informer la population et décrypter l’opinion publique sont là de nombreuse
                        qualité de Cameroon Tribune. Ce journal est une édition de la Société de Presse et d’Editions du
                        Cameroun en abrégé SOPECAM, elle possède des articles en français et en anglais. Votre quotidien
                        national est disponible dans toute les agences SOPECAM (Garoua, Maroua, Bamenda, Buea, Douala,
                        Dschang, Bafoussam, …)
                        et points de vente Messapresse mais bien évidemment en version numérique sur www.ekiosque.cm
                
                    </div>
                    <div class="aProposText ui-block">
                        <h6><b>Toute l’actualité national et international au Cameroun
                
                            </b></h6>
                        Le Quotidien Cameroon Tribune, l’information continue du Cameroun dans
                        tous les domaines ! quelque soit le domaine d’activité économique ou
                        professionnel, politique ou social, l’éditeur se veut plus proche de
                        la population et du gouvernement. Le Cameroon Tribune est un quotidien généraliste camerounais
                        créé par le gouvernement en 1974. Ce journal est longtemps resté le seul journal autorisé au
                        Cameroun. À l\\\'origine, il était publié en deux versions, une version francophone et une
                        version anglophone. Néanmoins, les méventes l\\\'ont obligé au milieu des années 1980 à
                        fusionner les deux versions. Retrouvez dans le journal toute l’actualité politique, économique,
                        sociale… du Cameroun ; des partis politiques tel que le RDPC, le SDF, le MRC, le parti UNIVERS,
                        l’ UNDP,… et bien d’autres mais aussi des personnalité qui font régulièrement sa une comme
                        l’ambassadeur de France au Cameroun GILLES THIBAUT, CHRISTINE LAGARDE, le Pape FRANCOIS, PAUL
                        BIYA, Lejeune MBELLA MBELLA, et sans oublié les grands sommets qu’organise le Cameroun à savoir
                        le sommet France-AFRIQUE, CAMEROUN-OIF, CAN total 2019. Avec Cameroon Tribune ne rater plus
                        aucune information du Cameroun, la vrai, la fiable, et la plus importante !
                
                
                    </div>
                </div>
                <div id="aside-left" class="col-12 ">
                    <div id="about" class="ui-block">
                        <div class="aside-title">
                            <iconify-icon icon="clarity:help-info-solid"></iconify-icon> A Propos de la page
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Description</div>
                            <div class="aside-text">
                                Le Cameroon Tribune est un quotidien généraliste camerounais
                                créé par le gouvernement en
                                1974.
                            </div>
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Catégorie</div>
                            <div class="aside-text">
                                Editeur
                            </div>
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Téléphone</div>
                            <div class="aside-text">
                                +237 66666666
                            </div>
                        </div>
                        <div class="aside-block">
                            <div class="aside-subtitle">Email</div>
                            <div class="aside-text">
                                camerountribune@gmailcom
                            </div>
                        </div>
                        <div class="aside-block">
                            <button>Je m'abonne</button>
                        </div>

                    </div>

                    

                </div>
                <div id="aside-right" class="col-12 ">
                    <div id="latest-posts" class="ui-block">
                        <div class="aside-title">
                            <i></i>Les derniers articles
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                        <div class="aside-block d-flex">
                            <div class="post-img"></div>
                            <div class="aside-text">
                                La coupe du monde quatar 2022...
                            </div>
                        </div>
                    </div>

                    <div id="pub" class="ui-block">

                    </div>

                </div>
            </div>

        </div>

        

        <div id="footer" class="row">

            footer footer footer footer
        </div>



    </div>

</body>
<script src="js/header.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>