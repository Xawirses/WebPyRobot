from django.conf.urls import url

from . import views

urlpatterns = [
    url(r'^$', views.index, name='index'),
    url(r'^accueil$', views.accueil, name='accueil'),
    url(r'^boutique$', views.boutique, name='boutique'),
    url(r'^inventaire$', views.inventaire, name='inventaire'),
    url(r'^editeur$', views.editeur, name='editeur'),
    url(r'^aide$', views.aide, name='aide'),
]
