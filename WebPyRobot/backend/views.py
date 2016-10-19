from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.


def index(request):
    return HttpResponse('page index')


def login(request):
    return HttpResponse('page login')


def logout(request):
    return HttpResponse('page logout')


def signup(request):
    return HttpResponse('page signup')


def fight(request):
    return HttpResponse('page de fight')


def figthdetail(request, pk):
    return HttpResponse('page figthDetails pour ' + pk)


def editor(request):
    return HttpResponse('page de l editor')


def editordetail(request, pk):
    return HttpResponse('page de l editor pour ' + pk)


def market(request):
    return HttpResponse('page du market')


def help(request):
    return HttpResponse('page du je suis perdu')