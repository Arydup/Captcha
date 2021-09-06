# Captcha
## Liste des commandes git utiles

### Pour set up wordpress et git localement - vous devez :
1. Installer wordpress (si vous ne l'avez pas fait)
2. Activer Xampp
3. Dans votre dossier thème de wordpress, cliquez sur `git bash here`
4. Dans la console :
 - `git init`
 - `git branch -M main`
 - `git remote add origin main` (origin peut s'appeler comme vous le souhaitez)

### À chaque fois que vous voulez faire des changements, vous devez créer une branche. Pour créer une branche :
- `git pull origin main` (origin se nomme comme vous l'avez appelé)
- `git branch nomDeLaPersonne/ceQuiVaEtreFait`(Par exemple : Aryane/readme)
- `git checkout nomDeLaPersonne/ceQuiVaEtreFait` (Par exemple : Aryane/readme)

### Quand vous avez terminés vos changements :
- `git add --all`
- `git commit -m "Description du commit"`
- `git push origin nomDeLaBranche` (origin se nomme comme vous l'avez appelé)

### Lorsque vous avez terminé avec le push, allez faire une pull request sur gitHub.
## Lorsque la pull request est merge, supprimez votre branche 
