import random
import sys
choix= sys.argv[1]

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
    print("ERREUR.")
    exit()

#Le mot de passe est généré automatiquement avec une longueur aléatoire entre 5 et 12
longueur =  random.randint(5, 12)

# On crée une chaîne vide qui va contenir le mot de passe final
mot_de_passe = "".join(random.choice(mdp) for _ in range(longeur))

print(mot_de_passe)




