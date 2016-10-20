from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.decorators import login_required
from django.views.decorators.cache import never_cache
from django.urls import reverse

# Create your views here.


def index(request):
    if request.user.is_authenticated:
        return HttpResponse('page d un user connecté')
    else:
        return HttpResponse('page index')


@never_cache
def login(request):
    if request.user.is_authenticated:
        return redirect(reverse('backend:index'))
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        urlnext = request.POST.get('next')
        from django.contrib.auth import authenticate
        user = authenticate(username=username, password=password)
        if user:
            from django.contrib.auth import login
            login(request, user)
            if urlnext is not None:
                return redirect(urlnext)
            return redirect(reverse('backend:index'))
    return render(request, 'backend/login.html',  {'next': request.GET.get('next')})


@never_cache
def logout(request):
    from django.contrib.auth import logout
    logout(request)
    return redirect(reverse('backend:index'))


def signup(request):
    return HttpResponse('page signup')


@login_required(login_url='/login/')
def fight(request):
    return HttpResponse('page de fight')

@login_required(login_url='/login/')
def figthdetail(request, pk):
    return HttpResponse('page figthDetails pour ' + pk)

@login_required(login_url='/login/')
def editor(request):
    return HttpResponse('page de l editor')

@login_required(login_url='/login/')
def editordetail(request, pk):
    return HttpResponse('page de l editor pour ' + pk)

@login_required(login_url='/login/')
def market(request):
    return HttpResponse('page du market')

@login_required(login_url='/login/')
def help(request):
    return HttpResponse('page du je suis perdu')