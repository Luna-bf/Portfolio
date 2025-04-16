Fonctionnalités à implémenter :

- Un thème qui persiste (comme la langue)
- Responsive (mobile et tablet)


## Astuces Responsive

Quelles astuces sont couramment utilisées pour rendre un site responsive ?

- Changer  flex-direction  de  row  à  column

- Définir un  overflow: auto  ou  scroll

- Prévoir plusieurs breakpoints avec des comportements associés

Souvent, changer l'orientation de ses éléments au sein de  flex  permet d'adapter une grille à un écran plus étroit. De la même manière, quand la hauteur ou la largeur n'est pas suffisante, il peut vous arriver d'avoir à exploiter la propriété  overflow. Et pour tout ça, vous pouvez définir des media queries avec des breakpoints et des comportements associés.

En revanche, définir une  width  fixe ne vous aidera pas à rendre un site responsive.

Source : OpenClassrooms
