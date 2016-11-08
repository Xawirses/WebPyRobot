from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib.auth.decorators import login_required
from django.views.decorators.cache import never_cache
from django.views.generic.edit import FormView
from django.urls import reverse
from django.contrib.auth.models import User
from django.core.exceptions import ObjectDoesNotExist
from .models import UserProfile, Tank
 #from .game.Game import Game, Robot

# Create your views here.


def index(request):
    if request.user.is_authenticated:
        context = {'money' : 340 }
        return render(request, "backend/accueil.html", context)
    else:
        return render(request, "backend/index.html")


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
            context = {
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
    template_name = 'backend/signUp.html'
    form_class = SignUpForm

    def get_success_url(self):
        self.success_url = reverse('backend:signUpThanks')
        return super().get_success_url()

    def get(self, request, *args, **kwargs):
        from django.contrib.auth import logout
        logout(request)
        return super().get(request, *args, **kwargs)

    def form_valid(self, form):
        email = form.cleaned_data['email']
        username = form.cleaned_data['username']
        password = form.cleaned_data['password']
        try:
            User.objects.get(username=username)
        except ObjectDoesNotExist:
            user = User.objects.create_user(username, email, password)
            UserProfile(user=user, money=0).save()
            return super(SignUp, self).form_valid(form)
        return super(SignUp, self).form_invalid(form)


def thanks(request):
    return HttpResponse('Merci de c etre inscrit !')


@login_required
def fight(request):
    tank = Tank.objects.get(owner_id=1)
    r1 = Robot(tank)
    r2 = Robot(tank)
    game = Game(r1, r2)
    game.process()
    return HttpResponse('page de fight')


@login_required
def figthdetail(request, pk):
    return HttpResponse('page figthDetails pour ' + pk)


@login_required
def editor(request):
    return render(request, 'backend/editeur.html')


@login_required
def editorDetail(request, pk):
    return HttpResponse('page de l editor pour ' + pk)


@login_required
def market(request):
    return render(request, 'backend/boutique.html')

@login_required
def inventory(request):
    return render(request, 'backend/inventaire.html')

@login_required
def help(request):
    return render(request, 'backend/aide.html')

