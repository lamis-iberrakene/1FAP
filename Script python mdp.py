import random

print("Choisis le type de mot de passe :")
print("1 - Lettres seulement")
print("2 - Lettres + chiffres")
print("3 - Lettres + chiffres + caractères spéciaux")

choix = input("choisis entre le premier, le deuxieme et le troisieme choix : ")
# Définir les lettres les chiffres et les caracteres speciaux 
lettres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
chiffres = "0123456789"
speciaux = "!@#$%^&*()-_=+"

if choix == "1":
    mdp = lettres
elif choix == "2":
    mdp = lettres + chiffres
elif choix == "3":
    mdp = lettres + chiffres + speciaux
else:
    print("Choix invalide.")
    exit()

#Le mot de passe est généré automatiquement avec une longueur aléatoire entre 5 et 12
longueur =  random.randint(5, 12)

# On crée une chaîne vide qui va contenir le mot de passe final
mot_de_passe = ""

# Boucle qui s'exécute autant de fois que la longueur souhaitée du mot de passe
for i in range(longueur):
    # À chaque tour, on ajoute un caractère choisi au hasard depuis la liste 'mdp'
    mot_de_passe += random.choice(mdp)

# Affichage du mot de passe généré
print("\nMot de passe généré :")
print(mot_de_passe)




