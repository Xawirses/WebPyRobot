from dbus.service import Object
from django.contrib.auth import update_session_auth_hash
from django.contrib.auth.forms import PasswordChangeForm
from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.decorators import login_required
from django.views.decorators.cache import never_cache
from django.views.generic.edit import FormView
from django.urls import reverse
from django.contrib.auth.models import User
from django.core.exceptions import ObjectDoesNotExist

from backend.models import Weapon, Armor, Caterpillar, NavSystem, TypeItem, Inventory
from .models import UserProfile, Tank, Ia
 #from .game.Game import Game, Robot

from .forms import SignUpForm
from .forms import ChangeDataForm


# Create your views here.


def index(request):
    if request.user.is_authenticated:
        context = {'money' : UserProfile.objects.get(user=request.user).money,
                   'username' : request.user,
                   'pageIn' : 'accueil' }
        return render(request, "backend/accueil.html", context)
    else:
        form = SignUpForm()
        context = { 'form' : form }
        return render(request, "backend/index.html",context)


@never_cache
def login(request):
    if request.user.is_authenticated:
        return redirect(reverse('backend:index'))
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')
        from django.contrib.auth import authenticate
        user = authenticate(username=username, password=password)
        if user is not None:
            from django.contrib.auth import login
            login(request, user)
            urlnext = request.POST.get('next', reverse('backend:index'))
            return redirect(urlnext)
        else:
            form = SignUpForm()
            context = {
                'form': form,
                'next': request.GET.get('next'),
                'error': 'Your username and password didn\'t match. Please try again.'
            }
            return render(request, 'backend/index.html', context)
    return render(request, 'backend/index.html',  {'next': request.GET.get('next')})

@never_cache
def logout(request):
    from django.contrib.auth import logout
    logout(request)
    return redirect(reverse('backend:index'))

class SignUp (FormView):
    from .forms import SignUpForm
    template_name = 'backend/index.html'
    form_class = SignUpForm

    def get_success_url(self):
        self.success_url = reverse('backend:signUpThanks')
        return super().get_success_url()

    def form_valid(self, form):
        email = form.cleaned_data['email']
        username = form.cleaned_data['username']
        password = form.cleaned_data['password']
        try:
            User.objects.get(username=username)
        except ObjectDoesNotExist:
            user = User.objects.create_user(username, email, password)
            UserProfile(user=user, money=0).save()
            #create ia file default
            userProfile = UserProfile.objects.get(user=user)
            Ia.objects.create(owner=userProfile, name=username+"\'s ia", text="1+1")
            return super(SignUp, self).form_valid(form)
        return super(SignUp, self).form_invalid(form)


def thanks(request):
    return render(request,"backend/thanks.html")

@login_required
def fight(request):
    tank = Tank.objects.get(owner_id=1)
    r1 = Robot(tank)
    r2 = Robot(tank)
    game = Game(r1, r2)
    game.process()
    return HttpResponse('page de fight')

@login_required
def password_change(request):
    if request.method == 'POST':
        form = PasswordChangeForm(user=request.user, data=request.POST)
        print("ICI")
        if form.is_valid():
            form.save()
            update_session_auth_hash(request, form.user)
            context = {'money': UserProfile.objects.get(user=request.user).money,
                       'username': request.user,
                       'pageIn': 'accueil',
                       'returnChange': "Les Informations ont bien été enregistré"}
            return render(request, "backend/accueil.html", context)
        else:
            context = {'money': UserProfile.objects.get(user=request.user).money,
                       'username': request.user,
                       'pageIn': 'accueil',
                       'returnChange': "Erreur"}
            return render(request, "backend/accueil.html", context)

@login_required
def figthdetail(request, pk):
    return HttpResponse('page figthDetails pour ' + pk)

@login_required
def editor(request):
    userProfile = UserProfile.objects.get(user=request.user)
    context = { 'money' : UserProfile.objects.get(user=request.user).money,
                'username' : request.user,
                'pageIn': 'editor',
                'ia': Ia.getIaByOwner(userProfile) }
    return render(request, 'backend/editeur.html',context)

@login_required
def editorDetail(request, pk):
    return HttpResponse('page de l editor pour ' + pk)

@login_required
def market(request):
    context = {'money' : UserProfile.objects.get(user=request.user).money,
               'username' : request.user,
               'pageIn': 'market',
               'weapons': Weapon.objects.all(),
               'armors': Armor.objects.all(),
               'caterpillars': Caterpillar.objects.all(),
               'navSys': NavSystem.objects.all()
               }
    return render(request, 'backend/boutique.html',context)

@login_required
def inventory(request):
    context = {'money' : UserProfile.objects.get(user=request.user).money,
               'username' : request.user,
               'pageIn': 'inventory'}
    return render(request, 'backend/inventaire.html',context)

@login_required
def parameter(request):

    form = ChangeDataForm()
    form.fields['email'].initial = request.user.email
    form.fields['username'].initial= request.user.username
    context = {'money' : UserProfile.objects.get(user=request.user).money,
               'username' : request.user,
               'form': form}
    return render(request, 'backend/parameter.html',context)

@login_required
def help(request):
    context = {'money' : UserProfile.objects.get(user=request.user).money,
               'username' : request.user,
               'pageIn': 'help'}
    return render(request, 'backend/aide.html',context)

