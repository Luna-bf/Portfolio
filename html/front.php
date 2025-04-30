<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Luna BURATTI-FAYOLLE">
    <title>Portfolio - Luna BURATTI-FAYOLLE</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" >
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" type="text/css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="imgs/favicon-48x48.png" >
</head>
<body>
    
<!--
- le rendre responsive (mobile et tablette)
- faire en sorte que le thème sélectionné reste le même après avoir quitté ou réinitialisé la page
- Ctrl + / pour commenter
- Essayer de changer le button en a href (theme switcher)
-->
    <nav>
        <div id="space-between">
            <div class="d-flex">
                <div class="dropdown-menu">
                    <a href="#" class="drop-link d-flex"><?= __('Thème') ?></a>
                    <div class="dropdown-content d-flex" id="themes">
                        <button id="change-theme" class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M479.96-144Q340-144 242-242t-98-238q0-140 97.93-238t237.83-98q13.06 0 25.65 1 12.59 1 25.59 3-39 29-62 72t-23 92q0 85 58.5 143.5T648-446q49 0 92-23t72-62q2 13 3 25.59t1 25.65q0 139.9-98.04 237.83t-238 97.93Z"/></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="M479.77-288Q400-288 344-344.23q-56-56.22-56-136Q288-560 344.23-616q56.22-56 136-56Q560-672 616-615.77q56 56.22 56 136Q672-400 615.77-344q-56.22 56-136 56ZM216-444H48v-72h168v72Zm696 0H744v-72h168v72ZM444-744v-168h72v168h-72Zm0 696v-168h72v168h-72ZM269-642 166-742l51-55 102 104-50 51Zm474 475L642-268l49-51 103 101-51 51ZM640-691l102-101 51 49-100 103-53-51ZM163-217l105-99 49 47-98 104-56-52Z"/></svg>
                        </button>
                        <p id="themes-p"><?= __('Cliquez pour changer de thème') ?></p>
                    </div>
                </div>
                
                <div class="dropdown-menu">
                    <a href="#" class="drop-link"><?= __('Langue') ?></a>
                    <div class="dropdown-content">
                        <a href="index.php?lang=fr" class="lang-change" id="fr"><img src="imgs/flags/france-flag.png" alt="France flag" class="flag">Français</a>
                        <a href="index.php?lang=en" class="lang-change" id="en"><img src="imgs/flags/uk-flag.png" alt="UK flag" class="flag">English</a>
                        <a href="index.php?lang=es" class="lang-change" id="es"><img src="imgs/flags/spain-flag.png" alt="Spain flag" class="flag">Español</a>
                    </div>
                </div>
            </div>
            
            <ul class="d-flex">
                <li><a href="#projects"><?= __('Projets')?></a></li>
                <li><a href="#competences"><?= __('Compétences')?></a></li>
                <li><a href="#contact"><?= __('Contact')?></a></li>
            </ul>
        </div>
    </nav>
    
    <header class="d-flex">
        <div id="header">
	    <h1><?= __('Bonjour, je m\'appelle')?> <span>Luna</span> <?= __('et je suis une jeune')?> <span><?= __('développeuse web junior.')?></span></h1>
            <h2><?= __('Je recherche une')?> <span><?= __('opportunité de stage')?></span> <?= __('pour devenir une développeuse full stack confirmée.')?></h2>
        </div>
    </header>
    
    <main class="container" id="accueil">
        
        <section class="home d-flex">
            
            <div class="d-flex" id="profile">
                <img src="imgs/Photo_portfolio_15012025.jpg" id="profile-img" alt="Ma photo">
    
                <p id="find-me"><?= __('Vous pouvez me retrouver sur :')?></p>
                <article class="d-flex" id="socials-icons">
                    <a href="https://github.com/Luna-bf" target="_blank" class="fa-brands fa-github"></a>
                    <a href="https://www.linkedin.com/in/luna-buratti-fayolle/" target="_blank" class="fa-brands fa-linkedin"></a>
                </article>
            </div>
            
            <div id="searching-for">
                <h2><?= __('Qui suis-je ?')?></h2>
                <br>
                <p><?= __('Actuellement en recherche à l\'AFEC, je suis une jeune développeuse web junior passionnée par le développement et la création de solutions innovantes. Dans l’optique d’évoluer dans ce domaine, je suis en quête d\'une opportunité de stage pour mettre en pratique mes compétences et apprendre auprès de professionnels expérimentés.')?></p>
                <br>
                <p><?= __('Motivation, curiosité et persévérance sont des soft skills qui me représentent et bien que je sois au début de mon parcours, je suis déterminée à monter en compétences aussi bien front-end qu’en back-end afin de devenir une développeuse full-stack confirmée. Je possède déjà des connaissances en HTML, CSS, PHP, MySQL et d’autres.')?></p>
                <br>
                <p><?= __('Je suis disponible immédiatement pour échanger avec vous alors n\'hésitez pas à me contacter !')?></p>
            </div>
        </section>
        
        <section class="d-flex contact-resume">
            <a href="ressources/CV_Luna_17042025.pdf" download="CV de Luna BURATTI-FAYOLLE.pdf" class="resume"><?= __('Télécharger mon CV (FR)') ?></a>
            <a href="ressources/Luna_Resume_17042025.pdf" download="Luna BURATTI-FAYOLLE's Resume.pdf" class="resume">Download my Resume (EN)</a>
        </section>
            
        <hr>
        
        <div class="d-flex title-projects">
            <h1 id="projects"><?= __('Projets')?></h1>
        </div>
        <section>
	        <article class="d-flex parent-project">
                <article class="project">
                    <a href="https://github.com/Luna-bf/To-do_list_JavaScript" target="_blank">
                        <img src="imgs/projects/js_todo-list_thumbnail.png" alt=<?= __('"Capture d\'écran de la To-do list Javascript"')?> class="project-img" />
                    </a>
                    <ul>
                        <li><?= __('Année :') ?> 2024 <?= __('(en cours)')?></li>
                        <li><?= __('Stacks utilisées :') ?> JavaScript, HTML <?= __('et')?> CSS</li>
                        <li><a href="https://github.com/Luna-bf/To-do_list_JavaScript" target="_blank" class="github-link"><?= __('Lien Github')?></a></li>
                    </ul>
                </article>
            
                <!-- <article class="project">
                    <a href="https://github.com/Luna-bf/Hollow_Knight-Quiz" target="_blank">
                        <img src="imgs/projects/hk-quiz_thumbnail.png" alt=<?= __('"Capture d\'écran du quiz Hollow Knight"')?> class="project-img" />
                    </a>
                    <ul>
                        <li><?= __('Année :') ?> 2024 <?= __('(en cours)')?></li>
                        <li><?= __('Stacks utilisées :') ?> JavaScript, HTML <?= __('et')?> CSS</li>
                        <li><a href="https://github.com/Luna-bf/Hollow_Knight-Quiz" target="_blank" class="github-link"><?= __('Lien Github')?></a></li>
                    </ul>
                </article> -->
                
                <article class="project">
                    <a href="https://luna-bf.github.io/Simple-Accessibility.github.io/" target="_blank">
                        <img src="imgs/projects/simple-accessibility_thumbnail.png" alt=<?= __('"Capture d\'écran du projet Simple Accessibility"')?> class="project-img" />
                    </a>
                    <ul>
                        <li><?= __('Année :') ?> 2024</li>
                        <li><?= __('Stacks utilisées :') ?> HTML, CSS <?= __('et')?> JavaScript</li>
                        <li><a href="https://luna-bf.github.io/Simple-Accessibility.github.io/" target="_blank" class="github-link"><?= __('Lien Github')?></a></li>
                    </ul>
                </article>
                
                <article class="project">
                    <a href="https://github.com/Luna-bf/Simple_translation_backend" target="_blank">
                        <img src="imgs/projects/simple_translation-backend_thumbnail.png" alt=<?= __('"Capture d\'écran du projet Simple Translation"')?> class="project-img" />
                    </a>
                    <ul>
                        <li><?= __('Année :') ?> 2025</li>
                        <li><?= __('Stacks utilisées :') ?> HTML, CSS, PHP <?= __('et')?> JS</li>
                        <li><a href="https://github.com/Luna-bf/Simple_translation_backend" target="_blank" class="github-link"><?= __('Lien Github')?></a></li>
                    </ul>
                </article>
            </article>
        </section>
        
        <hr>
        
        <div class="d-flex title-competences">
            <h1 id="competences" class="d-flex"><?= __('Compétences')?></h1>
        </div>
        
        <section class="section-padding">
            <div class="d-flex parent">
                <h2 class="d-flex title-lang"><?= __('Langues')?></h2>
                <article id="langues">    
                    <ul class="d-flex">
                        <li><?= __('Français : Langue maternelle')?></li>
                        <li><?= __('Anglais : niveau B1')?></li>
                    </ul>
                </article>
                
                <hr class="skills-hr">
                
                <h2 class="d-flex title-soft-skills">Soft Skills</h2>
                <article class="soft-skills">
                        <ul>
                            <li><?= __('Prise de recul : Je suis ouverte à la critique et à la conversation')?></li>
                            <li><?= __('Curiosité : Je suis ouverte à de nouveaux outils et langages')?></li>
                            <li><?= __('Persévérance : Je n\'abandonne pas face à la difficulté')?></li>
                        </ul>
                </article>
                
                <hr class="skills-hr">
                
                <h2 class="d-flex title-hard-skills">Hard skills (front-end)</h2>
                <article class="hard-skills-front-article-1">
                    <div id="html">
                        <a href="https://fr.wikipedia.org/wiki/Hypertext_Markup_Language" target="_blank"><img src="imgs/logos/HTML_logo.png" alt=<?= __('"Logo d\'HTML"')?> /></a>
                        <h3>HTML</h3>
                    </div>
                    
                    <div id="css">
                        <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade" target="_blank"><img src="imgs/logos/CSS_logo.png" alt=<?= __('"Logo de CSS"')?> /></a>
                        <h3>CSS</h3>
                    </div>
                    
                    <div id="js">
                        <a href="https://fr.wikipedia.org/wiki/JavaScript" target="_blank"><img src="imgs/logos/JavaScript_logo.png" alt=<?= __('"Logo de JavaScript"')?> /></a>
                        <h3>JavaScript</h3>
                    </div>
                </article>
                
                <article class="hard-skills-front-article-2">
                    <div id="figma">
                        <a href="https://fr.wikipedia.org/wiki/Figma" target="_blank"><img src="imgs/logos/Figma_logo.png" alt=<?= __('"Logo de Figma"')?> /></a>
                        <h3>Figma</h3>
                    </div>
                    
                    <div id="swift">
                        <a href="https://fr.wikipedia.org/wiki/Swift_(langage_d%27Apple)" target="_blank"><img src="imgs/logos/Swift_logo.png" alt=<?= __('"Logo de Swift"')?> /></a>
                        <h3>Swift</h3>
                    </div>
                    
                    <div id="swift-ui">
                        <a href="https://en.wikipedia.org/wiki/SwiftUI" target="_blank"><img src="imgs/logos/SwiftUI_logo.png" alt=<?= __('"Logo de SwiftUI"')?> /></a>
                        <h3>SwiftUI</h3>
                    </div>
                </article>
                
                <hr id="hard-skills-hr">
                
                <h2 class="d-flex title-hard-skills">Hard skills (back-end)</h2>
                <article class="hard-skills-back-article-1">
                    <div id="php">
                        <a href="https://fr.wikipedia.org/wiki/PHP" target="_blank"><img src="imgs/logos/PHP_logo.png" alt=<?= __('"Logo de PHP"')?> /></a>
                        <h3>PHP</h3>
                    </div>
                    
                    <div id="python">
                        <a href="https://en.wikipedia.org/wiki/Python_(programming_language)" target="_blank"><img src="imgs/logos/Python_logo.png" alt=<?= __('"Logo de Python"')?> /></a>
                        <h3>Python</h3>
                    </div>
                    
                    <div id="git">
                        <a href="https://fr.wikipedia.org/wiki/Git" target="_blank"><img src="imgs/logos/git_logo.png" alt=<?= __('"Logo de Git"')?> /></a>
                        <h3>Git</h3>
                    </div>
                </article>
                
                <article class="hard-skills-back-article-2">
                    <div id="mySQL">
                        <a href="https://fr.wikipedia.org/wiki/MySQL" target="_blank"><img src="imgs/logos/MySQL_logo.png" alt=<?= __('"Logo de MySQL"')?> /></a>
                        <h3>MySQL</h3>
                    </div>
                    
                    <div id="nodeJS">
                        <a href="https://fr.wikipedia.org/wiki/Node.js" target="_blank"><img src="imgs/logos/Nodejs_logo.png" alt=<?= __('"Logo de Node.js"')?> /></a>
                        <h3>Node.js</h3>
                    </div>
                    
                    <div id="ruby">
                        <a href="https://fr.wikipedia.org/wiki/Ruby" target="_blank"><img src="imgs/logos/Ruby_logo.png" alt=<?= __('"Logo de Ruby"')?> /></a>
                        <h3>Ruby</h3>
                    </div>
                </article>
            </div>
        </section>
        
        <hr>
        
        <div class="d-flex title-contact">
            <h1 id="contact"><?= __('Contactez moi')?></h1>
        </div>
        
        <section id="contact-me">
            <form action="form/form.php" method="POST">
                <div class="d-flex" id="form-group">
                    <input type="text" id="companyName" name="companyName" placeholder=<?= __('"Nom de l\'entreprise (obligatoire)"')?> required>
                    <input type="email" id="email" name="userEmail" placeholder=<?= __('"Votre adresse mail (obligatoire)"')?> required>
                    <input type="text" id="subject" name="subject" placeholder=<?= __('"Objet (obligatoire)"')?> required>
                    <textarea id="message" name="message" placeholder=<?= __('"Votre message"')?>></textarea>
                    <button type="submit" id="submit-button"><?= __('Soumettre')?></button>
                </div>
            </form>
        </section>
    </main>
    
    <footer id="footer">
        <ul class="contacts">
            <li><?= __('Mon adresse mail :') ?></li>
            <li>lburattifayolle@gmail.com</li>
        </ul>
        
        <ul class="contacts">
            <li id="logo"><a href="#"><img src="imgs/logo-160x160.png" alt=<?= __('"Logo et favicon de mon portfolio"')?>></a></li>
        </ul>
    </footer>
        
    <a href="#" id="return-to-top">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
    
    <div id="prompt" class="hide-prompt auto">
        <i id="prompt-x" class="fa-solid fa-circle-xmark"></i>
        <div id="prompt-text">
            <p class="prompt-first-p"><?= __('Bonjour/bonsoir,') ?></p>
            <p class="prompt-p"><?= __('Cette boîte de texte est apparue pour vous prévenir que le formulaire de contact ne fonctionne actuellement pas.') ?></p>
            <p class="prompt-p"><?= __('Je vous invite à utiliser mon adresse mail présente dans') ?> <a href="#footer" id="prompt-link"><?= __('le footer') ?></a> <?= __('pour me contacter.') ?></p>
            <p class="prompt-p"><?= __('Je vous remercie pour votre temps et votre compréhension et vous souhaite de passer une excellente journée/soirée.') ?></p>
            <p class="prompt-polite"><?= __('Cordialement,') ?></p>
            <p class="prompt-final-p">Luna BURATTI-FAYOLLE</p>
        </div>
    </div>
    
    <script type="text/javascript" src="js/app.js" defer></script>
</body>
</html>