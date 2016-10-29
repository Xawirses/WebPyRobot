from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def index(request):
    return render(request, 'backend/index.html')

def boutique(request):
    return render(request, 'backend/boutique.html')

def accueil(request):
    return render(request, 'backend/accueil.html')

def inventaire(request):
    return render(request, 'backend/inventaire.html')

def aide(request):
    return render(request, 'backend/aide.html')

def editeur(request):
    return render(request, 'backend/editeur.html')
