Installation de GIT 

Créer un compte sur GitHub

Création projet en local => ouvrir avec GIT BASH

	- $ git init : initialiser de votre projet (on obtient le projet dit 'master')

	- $ git config --global user.name 

	- $ git config --global user.email 

	=> aller sur GitHub  et créer un 'repository'

	- $ git remote add origin https://github.com/airone113/git_site.git

	- $ git add --all (permet de tout selectionner)

	- $ git commit -m 'première version de mon projet'

 	- $ git push -u origin master
    	=> demande identifiant et mdp
	
=> pour ajouter un collaborateur au projet : 
	sur Github.com > setting > collaborateurs (c'est à cet endroit qu'on ajoute un collaborateur)
	Le collaborateur va recevoir un mail
	
	$ git clone https://github.com/moustapha95000/site_git.git
	
	- $ git config --global user.name 'airone113'
	
	- $ git config --global user.email 'baron.erwann13@gmail.com'
	
	- $ git checkout -b 'nom_du_travail_en_cours' (=> création de la branche sur laquelle il va travailler et se positionner dessus)
	
	-------------------------------------------------------------------------------------------------------
	
	- $ git branch 'doctype' (=> création d'une branche)
	
	- $ git checkout 'doctype' (=> positionne sur la branche)
	
	- $ git add --all (=> on récupère tout notre projet)
	
	- $ git commit -m 'modif_titre'
	
	- $ git push origin 'doctype' (=> on push ( on envoie) la branche à notre master)
	
	on retourne sur GitHub.com et on clique sur "compare and pull request" (en vert sur la page)
	on écrit un commentaire et clique sur 'merge pull request' puis 'confirm merge'
	on peut ensuite supprimer la branche une fois le travail validé
	
	=>  Récupérer le travail collaboratif : 
	
	- $ git checkout master (=> on se positionne sur le master)
	
	- $ git pull origin master (=> on récupère le travail)
	
	=> on recommence le process : 
	
	-> création d'une branche
	-> on se positionne sur la branche
	-> on fait les modifs
	-> on 'add' --all'
	-> on 'commit'
	-> on 'push'
	-> on 'compare request'
	-> on 'merge'
	-> tout le monde 'pull'
	
	=> exemple d'ajout d'une section
		=> $ git branch 'section'
		=> $ git checkout 'section'
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	